<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class process extends Controller
{

    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('process');

    //         if (!$access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //  }





    function index()
    {

        //var_dump(Session::get('userdata')['user_id']);die;
        /*$acces_management = $this->check_rights('User');

            //var_dump($acces_management);die;
            if (!$access) {
                return redirect('dashboard');
            }*/

            //return $this->method($user, 'home', 'user', 'welcome');

        /*if(!Session::has('user_id'))
        {
            return redirect('/login');
        }

        if(Session::has('role'))
        {
            $role=Session::get('role');
            //echo $role;die;
            if($role!=1)
            {
                return redirect('dashboard');
            }
        }*/
        //var_dump(session()->all());die;
        //$state = DB::select("select *,tc.status as citystatus,tc.id as cityid,tc.description as citydescription,mc.description as countrydescription,ts.description as statedescription from tbl_city tc left join mst_country mc on mc.id=tc.state left join tbl_state ts on ts.id=tc.state");
        //$title = DB::table('master')->where('id' ,$id)->value('title');
        //var_dump($state);die;
        // $data['acces_management'] = $this->acces_management;
        // $data['module_id'] = '22.0';
        $list = \Helper::getPermission('process-m-list') ? 1 : 0;
        if($list == 1){
            return view('process.index');
        }else{
            Redirect::to('dashboard')->send();
        }
    }


    public function processdata()
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
            $search_string="where tc.category LIKE '%$search_value%' or tpm.id LIKE '%$search_value%' or tpm.unique_id LIKE '%$search_value%' or tpm.process_id LIKE '%$search_value%' or tpm.name LIKE '%$search_value%' or tpm.category LIKE '%$search_value%' or tpm.is_fixed_process LIKE '%$search_value%'";
            $tbldata = DB::select("select tc.category as process_category,tpm.id as pid,tpm.unique_id as punique_id,tpm.process_id as process_id,tpm.name as name,tpm.category as category,tpm.is_fixed_process as is_fixed_process from tbl_process_master tpm left join tbl_category tc on tc.id=tpm.category $search_string order by tpm.id desc limit $start,$length");

            $process_count = DB::select("select count(*) as totalcount from tbl_process_master tpm left join tbl_category tc on tc.id=tpm.category $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select tc.category as process_category,tpm.id as pid,tpm.unique_id as punique_id,tpm.process_id as process_id,tpm.name as name,tpm.category as category,tpm.is_fixed_process as is_fixed_process from tbl_process_master tpm left join tbl_category tc on tc.id=tpm.category order by tpm.id desc limit $start,$length");
            $process_count = DB::select("select count(*) as totalcount from tbl_process_master tpm ");
        }




        foreach($process_count as $process_count) {
            $totalcount=$process_count->totalcount;
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
        $create = \Helper::getPermission('process-m-create') ? 1 : 0;
        $edit = \Helper::getPermission('process-m-edit') ? 1 : 0;
        $delete = \Helper::getPermission('process-m-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {

            $id=$tbldata->pid;
            $punique_id=$tbldata->punique_id;


            $process_id=$tbldata->process_id;
            $name=$tbldata->name;
            $category=$tbldata->process_category;

            /*if($category=="1")
            {
                $category_val="Pre-Press";
            }
            else if($category=="2")
            {
                $category_val="Post-Press";
            }
            else if($category=="3")
            {
                $category_val="Press";
            }
            else if($category=="4")
            {
                $category_val="Other";
            }
            else if($category=="5")
            {
                $category_val="FABRIC";
            }
            else
            {
                $category_val="WATER MARK PROSS";
            }*/

            $is_fixed=$tbldata->is_fixed_process;
            if($is_fixed==0)
            {
                $is_fixed_val="N";
            }
            else
            {
                $is_fixed_val="Y";
            }

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $punique_id;
            $row[] = $name;
            $row[] = $process_id;
            $row[] = $category;
            $row[] = $is_fixed_val;



            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';
            $action="";
            if ($edit OR $delete)
            {
                if($edit)
                {
                    $edit_url  = url("/processaddedit/{$id}");
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                }
                if($delete)
                {
                    $edit_url  = url("/processaddedit/{$id}");
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
        // $acces_management = $this->acces_management;
        $create = \Helper::getPermission('process-m-create') ? 1 : 0;
        $edit = \Helper::getPermission('process-m-edit') ? 1 : 0;
        $delete = \Helper::getPermission('process-m-delete') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        DB::table("tbl_process_master")->delete($id);
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

                $result = DB::table('tbl_user')
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

                $result = DB::table('tbl_user')
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

            // $acces_management = $this->acces_management;
            // $create = \Helper::getPermission('process-m-create') ? 1 : 0;
            $edit = \Helper::getPermission('process-m-edit') ? 1 : 0;
            // $delete = \Helper::getPermission('process-m-delete') ? 1 : 0;
            if($edit != 1)
            {
                $Success=0;
                $Msg="You have no access rights to delete, Contact Administrator for access rights";
                echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
            }
                foreach($id as $id) {
                    DB::table("tbl_process_master")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitprocess(Request $request)
    {




        //echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
        //print_r($_POST);die;
        //die("here");
        $edit_id=$request->request->get('edit_id');
        $process_id=$request->request->get('process_id');
        $process_name=$request->request->get('process_name');
        $category=$request->request->get('category');
        $fixed_cost=$request->request->get('fixed_cost');



        $is_fixed_process=0;
        if(isset($_POST['is_fixed_process']))
        {
            $is_fixed_process=$request->request->get('is_fixed_process');
        }


        $running_cost=$request->request->get('running_cost');
        $process_avg_completion_time=$request->request->get('process_avg_completion_time');
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        $img_to_upload="";
        $img1_to_upload="";
        $img2_to_upload="";



        if($edit_id=="0")
        {
            //echo "here";die;

            $destinationPath =base_path()."/assets/uploadimage/process_master/";

            if(isset($_FILES['img']))
            {
                $img = $request->file('img');

                if($request->hasFile('img'))
                {
                    //$img_to_upload=$img->getClientOriginalName();

                    $file_ext = $img->getClientOriginalExtension();

                    $file_size = $img->getSize();

                    $img_to_upload=$process_id."_".$process_name.".".$file_ext;

                    $upload_success = $img->move($destinationPath, $img_to_upload);
                    //var_dump($upload_success);die;
                    //var_dump($img->getClientOriginalName());die;
                    /*foreach ($img as $img)
                    {
                        var_dump($img);die;
                        $img_to_upload=$img->getClientOriginalName();

                        $file_ext = $img->getClientOriginalExtension();

                        $file_size = $img->getSize();

                        $upload_success = $img->move($destinationPath, $img_to_upload);
                    }*/
                }


            }


            if(isset($_FILES['img1']))
            {
                $img1 = $request->file('img1');


                if($request->hasFile('img1'))
                {
                    //$img1_to_upload=$img->getClientOriginalName();

                    $file_ext = $img1->getClientOriginalExtension();

                    $file_size = $img1->getSize();

                    $img1_to_upload=$process_id."_".$process_name."_1".".".$file_ext;

                    $upload_success = $img1->move($destinationPath, $img1_to_upload);

                }


            }

            if(isset($_FILES['img2']))
            {
                $img2 = $request->file('img2');


                if($request->hasFile('img2'))
                {
                    //$img2_to_upload=$img->getClientOriginalName();

                    $file_ext = $img2->getClientOriginalExtension();

                    $file_size = $img2->getSize();

                    $img2_to_upload=$process_id."_".$process_name."_2".".".$file_ext;

                    $upload_success = $img2->move($destinationPath, $img2_to_upload);

                }


            }


            $data = array();
            $data['process_id']= $process_id;
            $data['name']= $process_name;
            $data['category']= $category;
            $data['is_fixed_process']= $is_fixed_process;
            $data['fixed_cost']= $fixed_cost;
            $data['running_cost']= $running_cost;
            $data['process_avg_completion_time']= $process_avg_completion_time;
            $data['image']= $img_to_upload;
            $data['image1']= $img1_to_upload;
            $data['image2']= $img2_to_upload;

            $data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_process_master")->insert($data);

            if($query_insert==true)
            {


                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="PR/$lastInsertId";

                $result = DB::table("tbl_process_master")
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
            //die("here");
            //print_r($_FILES);die;

            $destinationPath =base_path()."/assets/uploadimage/process_master/";
            $data = array();


            if(isset($_FILES['img']))
            {
                $img = $request->file('img');

                if($request->hasFile('img'))
                {

                    $file_ext = $img->getClientOriginalExtension();

                    $file_size = $img->getSize();

                    $img_to_upload=$process_id."_".$process_name.".".$file_ext;

                    $upload_success = $img->move($destinationPath, $img_to_upload);

                    $data['image'] = $img_to_upload;

                    //var_dump($data);die;

                }



            }


            if(isset($_FILES['img1']))
            {
                $img1 = $request->file('img1');


                if($request->hasFile('img1'))
                {
                    //$img1_to_upload=$img->getClientOriginalName();

                    $file_ext = $img1->getClientOriginalExtension();

                    $file_size = $img1->getSize();

                    $img1_to_upload=$process_id."_".$process_name."_1".".".$file_ext;

                    $upload_success = $img1->move($destinationPath, $img1_to_upload);
                    $data['image1'] = $img1_to_upload;

                }


            }

            if(isset($_FILES['img2']))
            {
                $img2 = $request->file('img2');


                if($request->hasFile('img2'))
                {
                    //$img2_to_upload=$img->getClientOriginalName();

                    $file_ext = $img2->getClientOriginalExtension();

                    $file_size = $img2->getSize();

                    $img2_to_upload=$process_id."_".$process_name."_2".".".$file_ext;

                    $upload_success = $img2->move($destinationPath, $img2_to_upload);
                    $data['image2'] = $img2_to_upload;

                }


            }



            $date=date("Y/m/d h:m:s");

            //var_dump($data);die;


            $data['process_id']= $process_id;
            $data['name']= $process_name;
            $data['category']= $category;
            $data['is_fixed_process']= $is_fixed_process;
            $data['process_avg_completion_time']= $process_avg_completion_time;
            $data['fixed_cost']= $fixed_cost;
            $data['running_cost']= $running_cost;
            $data['modifiedby']= $user_id;
            $data['modifieddttm']= $date;



            $result = DB::table("tbl_process_master")
            ->where('id', $edit_id)
            ->update($data);


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

    function editcity(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_city where id=$edit_id");


        foreach($tbldata as $tbldata){
            $description=$tbldata->description;
            $status=$tbldata->status;
            $state=$tbldata->state;
        }
        echo json_encode(array('description' => $description,'status'=>$status,'state'=>$state,'message'=>''));
    }

    function validateprocessname(Request $request)
    {
        $status = "false";

        $process_name=$request->request->get('process_name');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_process_master where name='".$process_name."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_process_master where name='".$process_name."' and id!='".$edit_id."'");
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

    function validateusercode(Request $request)
    {
        $status = "false";

        $usercode=$request->request->get('usercode');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_user where usercode='".$usercode."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_user where usercode='".$usercode."' and id!='".$edit_id."' ");
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
