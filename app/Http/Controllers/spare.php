<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class spare extends Controller
{
    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('spare');

    //         if (!$access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //  }

    function index()
    {

        // $data['acces_management'] = $this->acces_management;
        // //$data['tbldata'] = $state;

        // $data['module_id'] = '37.0';
        $list = \Helper::getPermission('sm-category-list') ? 1 : 0;
        if($list){
            return view('spare.index');
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

    public function sparedata()
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
            $search_string="where mu.description LIKE '%$search_value%' or ts.id LIKE '%$search_value%' or ts.name LIKE '%$search_value%' or ts.unique_id LIKE '%$search_value%' or ts.type LIKE '%$search_value%' or ts.unit LIKE '%$search_value%'";
            $tbldata = DB::select("select ts.id as spareid,ts.unit as spareunit,ts.name as sparename,ts.type as sparetype,ts.unique_id as spareunique_id,mu.description as unitdescription from tbl_spare ts left join mst_unit mu on mu.id=ts.unit $search_string order by ts.id desc limit $start,$length");

            $spare_count = DB::select("select count(*) as totalcount from tbl_spare ts left join mst_unit mu on mu.id=ts.unit $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select ts.id as spareid,ts.unit as spareunit,ts.name as sparename,ts.type as sparetype,ts.unique_id as spareunique_id,mu.description as unitdescription from tbl_spare ts left join mst_unit mu on mu.id=ts.unit order by ts.id desc limit $start,$length");
            $spare_count = DB::select("select count(*) as totalcount from tbl_spare ts");
        }



        foreach($spare_count as $spare_count) {
            $totalcount=$spare_count->totalcount;
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
        $edit = \Helper::getPermission('sm-category-edit') ? 1 : 0;
        $delete = \Helper::getPermission('sm-category-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {
            $id=$tbldata->spareid;
            $spareunique_id=$tbldata->spareunique_id;


            $name=$tbldata->sparename;
            $unit=$tbldata->spareunit;
            $unitdescription=$tbldata->unitdescription;
            $type=$tbldata->sparetype;
            if($type==0)
            {
                $typename="Refundable";
            }
            else
            {
                $typename="Non-Refundable";
            }
            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $spareunique_id;
            $row[] = $name;
            $row[] = $unitdescription;
            $row[] = $typename;
            /*if($tbldata->citystatus=='1')
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

        DB::table("tbl_spare")->delete($id);
        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function record_actions(Request $request)
    {
        $id=$request->request->get('id');
        $opt=$request->request->get('opt');
        $data = array('status'=>0);
        //var_dump($id);die;

        if($opt==1)
        {
            $status=1;
            foreach($id as $id) {

                //DB::enableQueryLog();

                $result = DB::table('tbl_city')
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

            //die("here");
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));

            //return redirect()->back()->with('message', 'Status Updated Successfuly!');
        }
        else if($opt==2)
        {
            $status=0;
            foreach($id as $id) {

                $result = DB::table('tbl_city')
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

                //var_dump($result);die;
            }
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
            //return redirect()->back()->with('message', 'Status updated Successfuly!');
        }
        else
        {
                foreach($id as $id) {
                    DB::table("tbl_spare")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitspare(Request $request)
    {
        $name=$request->request->get('sparename');
        $unit=$request->request->get('unit');
        $edit_id=$request->request->get('edit_id');
        $type=$request->request->get('type');

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        //$tbl='state';


        $data = array();
        $data['name']= $name;
        $data['unit']= $unit;
        $data['type']= $type;

        if($edit_id=="")
        {
            //echo "here";die;

            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_spare")->insert($data);

            if($query_insert==true)
            {
                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="SP/$lastInsertId";

                $result = DB::table("tbl_spare")
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
            $date=date("Y/m/d h:m:s");
            $result = DB::table("tbl_spare")
            ->where('id', $edit_id)
            ->update([
                'name'=>$name,
                'unit'=>$unit,
                'type'=>$type,
                'modifiedby'=>$user_id,
                'modifieddttm'=>"$date"
            ]);


            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));

        }


    }

    function editspare(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_spare where id=$edit_id");


        foreach($tbldata as $tbldata){
            $name=$tbldata->name;
            $unit=$tbldata->unit;

            $mst_unit_data = DB::select("select * from mst_unit where id=$unit");


            foreach($mst_unit_data as $mst_unit_data){
                $unit_description=$mst_unit_data->description;
            }

            $type=$tbldata->type;
        }



        echo json_encode(array('name' => $name,'unit'=>$unit,'message'=>'','type'=>$type,'unitdescription'=>$unit_description));
    }

    function validateexcisecode(Request $request)
    {
        $status = "false";

        $code=$request->request->get('code');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_excise where excise_code='".$code."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_excise where excise_code='".$code."' and id!='".$edit_id."'");
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


}
