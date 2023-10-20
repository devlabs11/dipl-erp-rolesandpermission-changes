<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class state extends Controller
{

    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('state');

    //         if (!$access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //  }

    function index()
    {

        // $data['module_id'] = '9.0';
        $state = DB::select("select *,ts.id as stateid,mc.id as countryid,ts.description as statedescription,mc.description as countrydescription from tbl_state ts left join mst_country mc on mc.id=ts.country ");
        //$title = DB::table('master')->where('id' ,$id)->value('title');
        //var_dump($state);die;
        // $data['acces_management'] = $this->acces_management;
        $data['tbldata'] = $state;
        $list = \Helper::getPermission('state-list') ? 1 : 0;
        if($list){
            return view('state.index',$data);
        }else{
            Redirect::to('dashboard')->send();
        }
    }

    function index1()
    {
        if(request()->ajax()) {
            return datatables()->of(Data::select('*'))
            ->addColumn('action', 'company-action')
            ->rawColumns(['action'])
            ->setRowData([
                'data-id' => function($user) {
                    return 'row-' . $user->id;
                },
                'data-name' => function($user) {
                    return 'row-' . $user->name;
                },
            ])
            ->addIndexColumn()
            ->make(true);
        }
        return view('master.index',['title'=>"Country",'tbl'=>'mst_country']);
    }

    public function statedata()
    {
        //die("here");
        $start=0;
        $length=10;
        $search_value="";
        if(isset($_GET))
        {
            $start=$_GET['start'];
            $length=$_GET['length'];
            $search_value=$_GET['search']['value'];
        }

        //echo $start."   ".$length;die;

        if($search_value!="")
        {
            $search_string="where mc.description LIKE '%$search_value%' or ts.id LIKE '%$search_value%' or ts.unique_id LIKE '%$search_value%' or ts.description LIKE '%$search_value%' or ts.code LIKE '%$search_value%'";
            $tbldata = DB::select("select *,ts.code as statecode,ts.id as stateid,ts.unique_id as stateunique_id,ts.description as statedescription,mc.description as countrydescription from tbl_state ts left join mst_country mc on mc.id=ts.country $search_string order by ts.id desc limit $start,$length");
            $state_count = DB::select("select count(*) as totalcount from tbl_state ts left join mst_country mc on mc.id=ts.country $search_string");
            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select *,ts.code as statecode,ts.id as stateid,ts.unique_id as stateunique_id,ts.description as statedescription,mc.description as countrydescription from tbl_state ts left join mst_country mc on mc.id=ts.country order by ts.id desc limit $start,$length");
            $state_count = DB::select("select count(*) as totalcount from tbl_state ts");
        }



        foreach($state_count as $state_count) {
            $totalcount=$state_count->totalcount;
        }

        // return $tbldata;
        $output = array(
            //"sEcho" => 0,
            "iTotalRecords" =>10,
            "iTotalDisplayRecords" => $totalcount,
            "aaData" => array()
        );
        $row = array();

        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('state-edit') ? 1 : 0;
        $delete = \Helper::getPermission('state-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {
            $id=$tbldata->stateid;
            $stateunique_id=$tbldata->stateunique_id;
            $description=$tbldata->statedescription;
            $countrydescription=$tbldata->countrydescription;
            //$status=$tbldata->statestatus;
            $code=$tbldata->statecode;
            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            //$row[] = $id;
            $row[] = $stateunique_id;
            $row[] = $code;
            $row[] = $countrydescription;
            $row[] = $description;
            /*if($tbldata->statestatus=='1')
            {
                $row[] = '<span class="label label-sm label-info status-active" > Active </span>';
            }
            else
            {
                $row[]='<span class="label label-sm label-danger status-inactive" > In Active </span>';
            }*/

            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';

            $action="";
            if ($edit OR $delete)
            {
                if($edit)
                {
                    $action.='<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;"></i></i></a>';
                }
                if($delete)
                {
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;font-weight:normal !important;" title="Delete"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }

            }
            else
            {
                // $action.='<button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                //                 Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                //             </button>';
            }
            $row[]=$action;
            // $row[] = '<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
            // <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
            // <span class="svg-icon svg-icon-5 m-0">
            //     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            //         <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
            //     </svg>
            // </span>
            // <!--end::Svg Icon--></a>
            // <!--begin::Menu-->
            // <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
            //     <!--begin::Menu item-->
            //     <div class="menu-item px-3">
            //         <a href="" class="menu-link px-3">View</a>
            //     </div>
            //     <!--end::Menu item-->
            //     <!--begin::Menu item-->
            //     <div class="menu-item px-3">
            //         <a href="" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
            //     </div>
            //     <!--end::Menu item-->
            // </div>
            // <!--end::Menu-->';

            $output['aaData'][] = $row;
        }



        echo json_encode($output);
    }


    function delete(Request $request)
    {
        $id=$request->request->get('id');
        $city_count = DB::select("select count(*) as city_count from tbl_city where state=$id");

        foreach($city_count as $city_count) {
            $city_count=$city_count->city_count;
        }
        //echo $city_count;die;
        if($city_count==0)
        {
            DB::table("tbl_state")->delete($id);
        }
        else
        {
            $message="You can not delete this record.";
            $alert_type="error";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));die;
        }





        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function record_actions(Request $request)
    {

        //echo "here";
        //return $request;
        //echo $request->request->get('tbl');
        $id=$request->request->get('id');
        $opt=$request->request->get('opt');

        //echo $opt;die;
        $data = array('status'=>0);


        if($opt==1)
        {

            //die("1st");
            $status=1;
            foreach($id as $id) {

                //DB::enableQueryLog();

                $result = DB::table("tbl_state")
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

                //var_dump($result);die;

                //$query = DB::getQueryLog();
                //print_r($query);

                //var_dump($result);die;

                // DB::table("$tbl")->where('id',$id)->update($data);
                // $query = DB::getQueryLog();
                // echo $query;die;
            }
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));

            //return redirect()->back()->with('message', 'Status Updated Successfuly!');
        }
        else if($opt==2)
        {
            //die("2nd");
            $status=0;
            foreach($id as $id) {

                $result = DB::table("tbl_state")
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);
            }
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
            //return redirect()->back()->with('message', 'Status updated Successfuly!');
        }
        else
        {
            //die("delete");
                foreach($id as $id) {

                    $city_count = DB::select("select count(*) as city_count from tbl_city where state=$id");

                    foreach($city_count as $city_count) {
                        $city_count=$city_count->city_count;
                    }
                    //echo $city_count;die;
                    if($city_count==0)
                    {
                        DB::table("tbl_state")->delete($id);
                    }
                    else
                    {
                        $message="You can not delete this record.";
                        $alert_type="error";
                        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));die;
                    }

                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitstate(Request $request)
    {
        $name=$request->request->get('name');
        $code=$request->request->get('code');
        //$status=$request->request->get('status');
        $edit_id=$request->request->get('edit_id');
        $country=$request->request->get('country');

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        $max_id_result=DB::table("tbl_state")->max('id');
        $max_id_result=$max_id_result+1;


        //$tbl='state';


        $data = array();
        $unique_id="ST/$max_id_result";
        //$data['unique_id']= $unique_id;
        $data['description']= $name;
        $data['code']= $code;
        $data['country']= $country;
        //$data['status']= $status;

        if($edit_id=="")
        {
            //echo "here";die;
            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_state")->insert($data);

            if($query_insert==true)
            {

                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="ST/$lastInsertId";

                $result = DB::table("tbl_state")
                ->where('id', $lastInsertId)
                ->update([
                    'unique_id'=> $unique_id
                ]);

                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
            }
        }
        else
        {
            //$data['modifiedby']= "0";
            $date=date("Y/m/d h:m:s");
            //$data['modifieddttm']= $date;

            $result = DB::table("tbl_state")
            ->where('id', $edit_id)
            ->update([
                'description'=>$name,
                //'status' => $status,
                'code' => $code,
                'country'=>$country,
                'modifiedby'=>$user_id,
                'modifieddttm'=>"$date"
            ]);


            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));

            // if($result!=0)
            // {
            //     echo "succ";die;
            // }
            // else
            // {
            //     echo "error";die;
            // }
        }


    }

    function editstate(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_state where id=$edit_id");


        foreach($tbldata as $tbldata){
            $description=$tbldata->description;
            //$status=$tbldata->status;
            $country=$tbldata->country;
            $code=$tbldata->code;
        }
        echo json_encode(array('description' => $description,'country'=>$country,'code'=>$code,'message'=>''));
    }

    function validatestate(Request $request)
    {
        //echo "here";die;
        $status = "false";

        $description=$request->request->get('name');
        $edit_id=$request->request->get('id');
        $country=$request->request->get('country');
        //echo $edit_id;die;

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_state where description='".$description."' and country='".$country."'");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_state where description='".$description."' and id!='".$edit_id."' and country='".$country."'");
        }

        foreach($tbldata as $tbldata){
            $found=$tbldata->found;
            if ($found>0){
                $status = "false";
            }else{
                $status = "true";
            }
        }


        echo $status;
    }



    function fetchstatecountrydata()
    {

        $countrydata = DB::select("select * from mst_country");

        foreach($countrydata as $countrydata){
            $description=$countrydata->description;
            $id=$countrydata->id;
            $row_array['id']=$id;
            $row_array['text'] = utf8_encode(ucfirst(strtolower(description)));
            return array_push($return_arr,$row_array);
            //echo "<option value='".$id."'>$description</option>";
        }


    }
}
