<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class UnitMaster extends Controller
{
    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('unit');

    //         if (!$access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //  }

    function index()
    {
        //$state = DB::select("select *,tc.id as cityid,tc.description as citydescription,mc.description as countrydescription,ts.description as statedescription from tbl_city tc left join mst_country mc on mc.id=tc.state left join tbl_state ts on ts.id=tc.state");
        //$title = DB::table('master')->where('id' ,$id)->value('title');
        // //var_dump($state);die;
        // $data['acces_management'] = $this->acces_management;
        // //$data['tbldata'] = $state;

        // $data['module_id'] = '31.0';
        $list = \Helper::getPermission('um-category-list') ? 1 : 0;
        if($list){
            return view('unit.index');
        }else{
            Redirect::to('dashboard')->send();
        }
    }



    public function unitdata()
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


        if($search_value!="")
        {
            $search_string="where te.description LIKE '%$search_value%' or te.unique_id LIKE '%$search_value%'";
            $tbldata = DB::select("select * from mst_unit te $search_string order by te.id desc limit $start,$length");

            $unit_count = DB::select("select count(*) as totalcount from mst_unit te $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select * from mst_unit te order by te.id desc limit $start,$length");
            $unit_count = DB::select("select count(*) as totalcount from mst_unit te");
        }


        foreach($unit_count as $unit_count) {
            $totalcount=$unit_count->totalcount;
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
        $edit = \Helper::getPermission('rm-product-category-edit') ? 1 : 0;
        $delete = \Helper::getPermission('rm-product-category-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {
            $id=$tbldata->id;
            $unique_id=$tbldata->unique_id;
            $description=$tbldata->description;

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $unique_id;
            $row[] = $description;

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
                    $action.='<a onclick="LoadDeleteDialog('.$id.')"   class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Delete"><i class="fa fa-trash" style="color:red;"> </i></a>';
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
        DB::table("mst_unit")->delete($id);

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
                    DB::table("mst_unit")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitunit(Request $request)
    {

        $description=$request->request->get('description');
        $edit_id=$request->request->get('edit_id');

        $data = array();

        $data['description']= $description;

        if($edit_id=="")
        {
            $data['addeddby']= "0";
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("mst_unit")->insert($data);

            if($query_insert==true)
            {
                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="UN/$lastInsertId";

                $result = DB::table("mst_unit")
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
            $result = DB::table("mst_unit")
            ->where('id', $edit_id)
            ->update([
                'description'=>$description,
                'modifiedby'=>"0",
                'modifieddttm'=>"$date"
            ]);


            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));

        }


    }

    function editunit(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');
        // dd($edit_id);

        $tbldata = DB::select("select * from mst_unit where id=$edit_id");


        foreach($tbldata as $tbldata){
            $description=$tbldata->description;
        }

        echo json_encode(array('description'=>$description,'message'=>''));
    }



    function validateunitcode(Request $request)
    {
        $status = "false";

        $description=$request->request->get('description');

        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from mst_unit where description='".$description."' ");
        }
        else{
            $tbldata = DB::select("select count(*) as found from mst_unit where description='".$description."' and id!='".$edit_id."'");
        }

        foreach($tbldata as $tbldata){
            $found=$tbldata->found;
            if ($found>0){
                $status = "false";
            }
            else{
                $status = "true";
            }
        }
        echo $status;
    }

    // function city_ajax_populate_state(Request $request)
    // {
    //     $return_arr = array();
    //     $row_array = array();
    //     $whereClause = "1";
    //     $limit="";

    //     //print_r($_GET);die;

    //     //var_dump($request->request->get('search'));die;
    //     if((isset($_GET['search']) AND isset($_GET['search']['term'])) || (isset($_GET['id']) && is_numeric($_GET['id'])))
    //     {
    //         //die("here");
    //         if(isset($_GET['search']))
    //         {
    //             $getVar = strip_tags(trim($_GET['search']['term']));

    //             //echo $getVar;die;
    //             $whereClause =  " description LIKE '%" . $getVar ."%' ";
    //             $limit = 'LIMIT '.intval($_GET['page_limit']);
    //         }
    //         elseif(isset($_GET['id']))
    //         {
    //             $getVar = strip_tags(trim($_GET['id']));
    //             $whereClause =  " id = $getVar ";
    //         }

    //         $query = "SELECT id,description FROM tbl_state WHERE  $whereClause ORDER BY description $limit";
    //         $result = DB::select($query);
    //         //var_dump($result);die;
    //         //$output = $result->result_array();
    //         $resultdata = array();
    //         foreach ($result as $resultdata) {
    //             //print_r($resultdata);die;
    //             $row_array['id'] = $resultdata->id;
    //             $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->description)));
    //             array_push($return_arr,$row_array);
    //         }
    //     }
    //     else if(isset($_GET['selectedCountry']))
    //     {
    //         $query = "SELECT id,description FROM tbl_state WHERE country='".$_GET['selectedCountry']."' ORDER BY description";
    //         $result = DB::select($query);
    //         //var_dump($result);die;
    //         //$output = $result->result_array();
    //         $resultdata = array();
    //         foreach ($result as $resultdata) {
    //             $row_array['id'] = $resultdata->id;
    //             $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->description)));
    //             array_push($return_arr,$row_array);
    //         }
    //     }
    //     else{
    //         $row_array['id'] = 0;
    //         $row_array['text'] = utf8_encode('Start Typing....');
    //         array_push($return_arr,$row_array);
    //     }


    //     $ret = array();
    //     if(isset($data['id'])){
    //         $ret = $row_array;
    //     }
    //     else if(isset($data['selectedCountry'])){
    //         $ret['results'] = $return_arr;
    //     }else{
    //         $ret['results'] = $return_arr;
    //     }
    //     echo json_encode($ret);
    // }

    // function city_ajax_populate_country(Request $request)
    // {
    //     $return_arr = array();
    //     $row_array = array();
    //     $whereClause = "1";
    //     $limit="";

    //     //print_r($_GET);die;

    //     //var_dump($request->request->get('search'));die;
    //     if((isset($_GET['search']) AND isset($_GET['search']['term'])) || (isset($_GET['id']) && is_numeric($_GET['id'])))
    //     {
    //         //die("here");
    //         if(isset($_GET['search']))
    //         {
    //             $getVar = strip_tags(trim($_GET['search']['term']));

    //             //echo $getVar;die;
    //             $whereClause =  " description LIKE '%" . $getVar ."%' ";
    //             $limit = 'LIMIT '.intval($_GET['page_limit']);
    //         }
    //         elseif(isset($_GET['id']))
    //         {
    //             $getVar = strip_tags(trim($_GET['id']));
    //             $whereClause =  " id = $getVar ";
    //         }



    //         $query = "SELECT id,description FROM mst_country WHERE  $whereClause ORDER BY description $limit";
    //         $result = DB::select($query);
    //         //var_dump($result);die;
    //         //$output = $result->result_array();
    //         $resultdata = array();
    //         foreach ($result as $resultdata) {
    //             //print_r($resultdata);die;
    //             $row_array['id'] = $resultdata->id;
    //             $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->description)));
    //             array_push($return_arr,$row_array);
    //         }
    //     }else{
    //         $row_array['id'] = 0;
    //         $row_array['text'] = utf8_encode('Start Typing....');
    //         array_push($return_arr,$row_array);
    //     }


    //     $ret = array();
    //     if(isset($data['id'])){
    //         $ret = $row_array;
    //     }else{
    //         $ret['results'] = $return_arr;
    //     }
    //     echo json_encode($ret);
    // }
}
