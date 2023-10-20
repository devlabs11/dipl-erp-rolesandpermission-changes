<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;
//use Route;
//use Illuminate\Routing\Controller;


class master extends Controller
{
    public function __construct()
    {
        //die("constructer");

            if (!Session::has('userdata')){
                //die("here");
                //return redirect('/login');
                Redirect::to('login')->send();
            }

            //print_r($_POST);die;
            if(isset($_POST['id']))
            {
                $id=$_POST['id'];
            }
            else
            {
                $id = request()->route('id');
            }

            $master = DB::select("select * from master where id=$id");
            //var_dump($master);die;
            $title="";
            foreach($master as $master) {
                $title=$master->title;
            }

            if($title=="")
            {
                Redirect::to('dashboard')->send();
            }

            // $acces_management = $this->check_rights("$title");

            // if (!$access) {
            //     Redirect::to('dashboard')->send();
            // }

            // $this->acces_management =$acces_management;

        //app('App\Http\Controllers\Controller')->check_rights('User');
        //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    }

    function index($id)
    {
        $list = \Helper::getPermission('common-list') ? 1 : 0;
        if($list != 1){
            Redirect::to('dashboard')->send();
        }
        if($id=='1')
        {
            $module_id="4.0";
        }
        if($id=='2')
        {
            // site Master
            // $list = \Helper::getPermission('site-list') ? 1 : 0;
            // if($list == 1){
                $module_id="5.0";
            // }else{
            //     return redirect('/dashboard');
            // }
        }
        if($id=='3')
        {
            $module_id="6.0";
        }
        if($id=='4')
        {
            $module_id="7.0";
        }
        if($id=='5')
        {
            $module_id="8.0";
        }
        if($id=='6')
        {
            $module_id="12.0";
        }
        if($id=='7')
        {
            $module_id="13.0";
        }
        if($id=='8')
        {
            $module_id="14.0";
        }
        if($id=='9')
        {
            $module_id="15.0";
        }
        if($id=='10')
        {
            $module_id="16.0";
        }
        if($id=='11')
        {
            $module_id="17.0";
        }

        $master = DB::select("select * from master where id=$id");

        foreach($master as $master) {
            $title=$master->title;
            $tbl_name=$master->tbl_name;
        }

        $tbldata = DB::select("select * from $tbl_name");

        return view('master.index',['tbldata'=>$tbldata,'title'=>$title,'tbl'=>$tbl_name,'tblid'=>$id,'module_id'=>$module_id]);
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

    public function data($masterid)
    {
        $master = DB::select("select * from master where id=$masterid");
        foreach($master as $master) {
            $title=$master->title;
            $tbl_name=$master->tbl_name;
        }

        $start=0;
        $length=10;
        $search_value="";
        if(isset($_POST))
        {
            $start=$_POST['start'];
            $length=$_POST['length'];
            $search_value=$_POST['search']['value'];
        }

        //echo $start."   ".$length;die;

        if($search_value!="")
        {


            if($masterid=="2")
            {
                $search_string="where tc.name LIKE '%$search_value%' or tm.id LIKE '%$search_value%' or tm.unique_id LIKE '%$search_value%' or tm.description LIKE '%$search_value%' or tm.code LIKE '%$search_value%'";
                $tbldata = DB::select("select tm.description as mdescription,tm.id as mid,tm.unique_id as munique_id,tm.code as mcode,tm.remark as mremark,tm.status as mstatus,tm.address as maddress,tc.name as companyname from $tbl_name tm left join tbl_company tc on tc.id=tm.company $search_string order by tm.id desc limit $start,$length");
                $master_count = DB::select("select count(*) as totalcount from $tbl_name tm left join tbl_company tc on tc.id=tm.company $search_string");
            }
            else
            {
                $search_string="where tm.id LIKE '%$search_value%' or tm.description LIKE '%$search_value%' or tm.code LIKE '%$search_value%'";
                $tbldata = DB::select("select tm.description as mdescription,tm.id as mid,tm.unique_id as munique_id,tm.code as mcode,tm.remark as mremark,tm.status as mstatus from $tbl_name tm $search_string order by tm.id desc limit $start,$length");
                $master_count = DB::select("select count(*) as totalcount from $tbl_name tm $search_string");
            }
        }
        else
        {
            if($masterid=="2")
            {
                $tbldata = DB::select("select tm.description as mdescription,tm.id as mid,tm.unique_id as munique_id,tm.code as mcode,tm.remark as mremark,tm.status as mstatus,tm.address as maddress,tc.name as companyname from $tbl_name tm left join tbl_company tc on tc.id=tm.company order by tm.id desc limit $start,$length");
                $master_count = DB::select("select count(*) as totalcount from $tbl_name tm left join tbl_company tc on tc.id=tm.company");
            }
            else
            {
                $tbldata = DB::select("select tm.description as mdescription,tm.id as mid,tm.unique_id as munique_id,tm.code as mcode,tm.remark as mremark,tm.status as mstatus,tc.name as companyname from $tbl_name tm left join tbl_company tc on tc.id=tm.company order by tm.id desc limit $start,$length");
                $master_count = DB::select("select count(*) as totalcount from $tbl_name");
            }
        }



        foreach($master_count as $master_count) {
            $totalcount=$master_count->totalcount;
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
        $create = \Helper::getPermission('common-create') ? 1 : 0;
        $edit = \Helper::getPermission('common-edit') ? 1 : 0;
        $delete = \Helper::getPermission('common-delete') ? 1 : 0;
        // $row[] = "checkbox";
        // $row[] = "1";
        // $row[] = "name";
        // $row[] = "active";
        // $row[] = "action";

        foreach($tbldata as $tbldata) {

            //var_dump($tbldata);die;
            $id=$tbldata->mid;
            $unique_id=$tbldata->munique_id;
            $description=$tbldata->mdescription;
            $code=$tbldata->mcode;
            $status=$tbldata->mstatus;


            if($masterid=="2")
            {
                $company=$tbldata->companyname;
                $address=$tbldata->maddress;
            }

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="action_id[]" value="'.$id.'" />
            </div>';
            //$row[] = $id;
            $row[] = $unique_id;


            if($masterid=="1")
            {
                $row[] = $code;
            }
            if($masterid=="2")
            {
                $row[] = $company;
            }
            $row[] = $description;
            if($masterid!="1" && $masterid!="6" && $masterid!="7" && $masterid!="8" && $masterid!="9" && $masterid!="10" && $masterid!="11")
            {
                if($masterid=="2")
                {
                    $row[] =$address;
                }
                else
                {
                    if($status=='1')
                    {
                        $row[] = '<span class="label label-sm label-info status-active" > Active </span>';
                    }
                    else
                    {
                        $row[]='<span class="label label-sm label-danger status-inactive" > In Active </span>';
                    }
                }
            }

            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';

            $action="";
            if ($edit OR $delete)
            {
                if ($edit)
                {
                    $action.='<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;" ></i></i></a>';
                }
                if ($delete)
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
        $id=$request->request->get('delete_id');
        $tbl=$request->request->get('tbl');
        $state_count_val=0;

        //echo $tbl;die;

        if($tbl=="mst_country")
        {
            $state_count = DB::select("select count(*) as state_count from tbl_state where country=$id");

            foreach($state_count as $state_count) {
                $state_count_val=$state_count->state_count;
            }
        }

        //echo $state_count_val;die;






        if($state_count_val==0)
        {
            DB::table("$tbl")->delete($id);
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
        //return $request;
        //echo $request->request->get('tbl');
        $id=$request->request->get('action_id');
        $tbl=$request->request->get('tbl');
        //echo $tbl;die;
        $opt=$request->request->get('opt');
        $data = array('status'=>0);


        if($opt==1)
        {
            $status=1;
            foreach($id as $id) {

                //DB::enableQueryLog();

                $result = DB::table($tbl)
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

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
            $status=0;
            foreach($id as $id) {

                $result = DB::table($tbl)
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
                foreach($id as $id) {
                    $state_count=0;
                    if($tbl=="mst_country")
                    {
                        $state_count = DB::select("select count(*) as state_count from tbl_state where country=$id");

                        foreach($state_count as $state_count) {
                            $state_count=$state_count->state_count;
                        }
                    }



                    if($state_count==0)
                    {
                        DB::table("$tbl")->delete($id);
                    }
                    else
                    {
                        $message="You can not delete this record.";
                        $alert_type="error";
                        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));die;
                    }

                    //DB::table("$tbl")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitmaster(Request $request)
    {
        //die("here");


        $name=$request->request->get('name');
        $code=$request->request->get('code');
        $company=$request->request->get('company');
        $status=$request->request->get('status');
        $address=$request->request->get('address');
        $edit_id=$request->request->get('edit_id');
        $tbl=$request->request->get('tbl');
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        //$max_id_result=DB::table("$tbl")->max('id');
        //$max_id_result=$max_id_result+1;




        $data = array();
        $data['description']= $name;
        $data['status']= $status;
        $data['company']= $company;
        $data['code']= $code;

        if($tbl=="mst_site")
        {
            $data['address']= $address;
            //$unique_id="SI/$lastInsertId";
            //$data['unique_id']= $unique_id;
        }


        // if($tbl=="mst_qc")
        // {
        //     $unique_id="";
        //     $data['unique_id']= $unique_id;
        // }
        // if($tbl=="mst_unit")
        // {
        //     $unique_id="UN/$max_id_result";
        //     $data['unique_id']= $unique_id;
        // }


        if($edit_id=="")
        {
            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("$tbl")->insert($data);

            if($query_insert==true)
            {

                $lastInsertId = DB::getPdo()->lastInsertId();



                if($tbl=="mst_site")
                {
                    //$data['address']= $address;
                    $unique_id="SI/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }

                if($tbl=="mst_ink_make")
                {
                    $unique_id="IM/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }

                if($tbl=="mst_paper_make")
                {
                    $unique_id="PP/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }
                if($tbl=="mst_gum_make")
                {
                    $unique_id="GM/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }
                if($tbl=="mst_color_master")
                {
                    $unique_id="CL/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }
                if($tbl=="mst_color_shade")
                {
                    $unique_id="CS/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }
                if($tbl=="mst_paper_color_shade")
                {
                    $unique_id="PS/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }
                if($tbl=="mst_country")
                {
                    $unique_id="CN/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }
                if($tbl=="mst_position")
                {
                    $unique_id="PM/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }
                if($tbl=="mst_designation")
                {
                    $unique_id="DS/$lastInsertId";
                    //$data['unique_id']= $unique_id;
                }


                $result = DB::table("$tbl")
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

            if($tbl=="mst_site")
            {
                $result = DB::table($tbl)
                ->where('id', $edit_id)
                ->update([
                    'description'=>$name,
                    'code'=>$code,
                    'status' => $status,
                    'company' => $company,
                    'address'=>$address,
                    'modifiedby'=>$user_id,
                    'modifieddttm'=>"$date"
                ]);
            }
            else
            {
                $result = DB::table($tbl)
                ->where('id', $edit_id)
                ->update([
                    'description'=>$name,
                    'code'=>$code,
                    'status' => $status,
                    'company' => $company,
                    'modifiedby'=>$user_id,
                    'modifieddttm'=>"$date"
                ]);
            }



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

    function editmaster(Request $request)
    {
        $edit_id=$request->request->get('edit_id');
        $tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from $tbl where id=$edit_id");

        //var_dump($tbldata);die;

        $address="Address";

        if($tbl=="mst_site")
        {
            foreach($tbldata as $tbldata){
                $description=$tbldata->description;
                $status=$tbldata->status;
                $code=$tbldata->code;
                $company=$tbldata->company;
                $address=$tbldata->address;
            }
        }
        else
        {
            foreach($tbldata as $tbldata){
                $description=$tbldata->description;
                $status=$tbldata->status;
                $code=$tbldata->code;
                $company=$tbldata->company;
            }
        }



        echo json_encode(array('description' => $description,'status'=>$status,'code'=>$code,'company'=>$company,'address'=>$address,'message'=>''));
    }

    function validatemaster(Request $request)
    {
        //die("here");
        $status = "false";
        $description=$request->request->get('name');
        $edit_id=$request->request->get('edit_id');
        $tbl=$request->request->get('tbl');
        //echo $tbl;die;

        //var_dump($_POST);die;

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from $tbl where description='".$description."'");
        }else{
            $tbldata = DB::select("select count(*) as found from $tbl where description='".$description."' and id!='".$edit_id."'");
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
