<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class productcategory extends Controller
{
    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('product_category');

    //         if (!$access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //  }

    function index()
    {

        $state = DB::select("select *,tc.id as cityid,tc.description as citydescription,mc.description as countrydescription,ts.description as statedescription from tbl_city tc left join mst_country mc on mc.id=tc.state left join tbl_state ts on ts.id=tc.state");

        // $data['acces_management'] = $this->acces_management;
        $data['tbldata'] = $state;

        // $data['module_id'] = '21.0';
        $list = \Helper::getPermission('product-category-m-list') ? 1 : 0;
        if($list == 1){
            return view('productcategory.index',$data);
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

    public function productcategorydata()
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
            $search_string="where tpc.id LIKE '%$search_value%' or tpc.unique_id LIKE '%$search_value%' or tpc.product_category LIKE '%$search_value%' or tpc.hs_code LIKE '%$search_value%' or tpc.excise_code LIKE '%$search_value%' or tpc.excise_description LIKE '%$search_value%' or tpc.excise_code LIKE '%$search_value%'";
            $tbldata = DB::select("select tpc.id as product_category_id,tpc.unique_id as product_category_unique_id,tpc.product_category as product_category,tpc.hs_code as hs_code,tpc.excise_code as excise_code,tpc.excise_description as excise_description,te.excise_code as excise_code_name from tbl_product_category tpc left join tbl_excise te on tpc.excise_code=te.id $search_string order by tpc.id desc limit $start,$length");

            $city_count = DB::select("select count(*) as totalcount from tbl_product_category tpc left join tbl_excise te on tpc.excise_code=te.id $search_string ");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select tpc.id as product_category_id,tpc.unique_id as product_category_unique_id,tpc.product_category as product_category,tpc.hs_code as hs_code,tpc.excise_code as excise_code,tpc.excise_description as excise_description,te.excise_code as excise_code_name from tbl_product_category tpc left join tbl_excise te on tpc.excise_code=te.id order by tpc.id desc limit $start,$length");
            $city_count = DB::select("select count(*) as totalcount from tbl_product_category tpc left join tbl_excise te on tpc.excise_code=te.id");
        }



        foreach($city_count as $city_count) {
            $totalcount=$city_count->totalcount;
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
        $create = \Helper::getPermission('product-category-m-create') ? 1 : 0;
        $edit = \Helper::getPermission('product-category-m-edit') ? 1 : 0;
        $delete = \Helper::getPermission('product-category-m-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {
            //print_r($tbldata);die;
            $id=$tbldata->product_category_id;
            $product_category_unique_id=$tbldata->product_category_unique_id;

            $product_category=$tbldata->product_category;
            $hs_code=$tbldata->hs_code;
            $excise_code=$tbldata->excise_code;
            $excise_description=$tbldata->excise_description;
            $excise_code_name=$tbldata->excise_code_name;
            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $product_category_unique_id;
            $row[] = $product_category;
            $row[] = $hs_code;
            // $row[] = $excise_code_name;
            // $row[] = $excise_description;
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
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Delete"><i class="fa fa-trash" style="color:red;"> </i></a>';
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

        DB::table("tbl_product_category")->delete($id);
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

                $result = DB::table('tbl_product_category')
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

                $result = DB::table('tbl_product_category')
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
                    DB::table("tbl_product_category")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitproductcategory(Request $request)
    {
        $product_category=$request->request->get('product_category');
        $hs_code=$request->request->get('hs_code');
        $edit_id=$request->request->get('edit_id');
        $excise_code=$request->request->get('excise_code');
        $excise_description=$request->request->get('excise_description');
        $sac = $request->sac;
        $jobCardTypeId = $request->job_card_type;

        $data = array();
        $data['product_category']= $product_category;
        $data['hs_code']= $hs_code;
        $data['excise_code']= $excise_code;
        $data['excise_description']= $excise_description;
        $data['sac'] = $sac;
        $data['job_card_type_id'] = $jobCardTypeId;

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();


        if($edit_id=="")
        {
            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            //var_dump($data);die;

            $query_insert = DB::table("tbl_product_category")->insert($data);

            //var_dump($query_insert);die;

            if($query_insert==true)
            {
                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="FPC/$lastInsertId";

                $result = DB::table("tbl_product_category")
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
            $result = DB::table("tbl_product_category")
            ->where('id', $edit_id)
            ->update([
                'product_category'=>$product_category,
                'hs_code'=>$hs_code,
                'excise_code'=>$excise_code,
                'excise_description'=>$excise_description,
                'sac' => $sac,
                'job_card_type_id' => $jobCardTypeId,
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

    function editproductcategory(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select te.excise_code as excise_code_name,tpc.product_category as product_category,tpc.hs_code as hs_code,tpc.sac as sac,tpc.job_card_type_id as job_card_type_id,tpc.excise_code as excise_code,tpc.excise_description as excise_description from tbl_product_category tpc left join tbl_excise te on te.id=tpc.excise_code where tpc.id=$edit_id");


        foreach($tbldata as $tbldata){
            $excise_code_name=$tbldata->excise_code_name;
            $excise_code=$tbldata->excise_code;
            $product_category=$tbldata->product_category;
            $hs_code=$tbldata->hs_code;
            $excise_description=$tbldata->excise_description;
            $job_card_type_id = $tbldata->job_card_type_id;
            $sac = $tbldata->sac;
        }


        echo json_encode(array('excise_code_name' => $excise_code_name,'excise_code'=>$excise_code,'message'=>'','product_category'=>$product_category,'hs_code'=>$hs_code,'excise_description'=>$excise_description,'sac' => $sac,'job_card_type_id' => $job_card_type_id));
    }


    function get_excise_code_description(Request $request)
    {
        //die("here");
        $excise_code_id=$request->request->get('excise_code_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_excise where id=$excise_code_id");


        foreach($tbldata as $tbldata){
            $excise_description=$tbldata->excise_description;
        }


        echo json_encode(array('excise_description' => $excise_description,'message'=>''));
    }

    function validatecity(Request $request)
    {
        $status = "false";

        $description=$request->request->get('name');
        $edit_id=$request->request->get('id');
        $state=$request->request->get('state');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_city where description='".$description."' and state='".$state."'");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_city where description='".$description."' and id!='".$edit_id."' and state='".$state."'");
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

    function city_ajax_populate_state(Request $request)
    {
        $return_arr = array();
        $row_array = array();
        $whereClause = "1";
        $limit="";

        //print_r($_GET);die;

        //var_dump($request->request->get('search'));die;
        if((isset($_GET['search']) AND isset($_GET['search']['term'])) || (isset($_GET['id']) && is_numeric($_GET['id'])))
        {
            //die("here");
            if(isset($_GET['search']))
            {
                $getVar = strip_tags(trim($_GET['search']['term']));

                //echo $getVar;die;
                $whereClause =  " description LIKE '%" . $getVar ."%' ";
                $limit = 'LIMIT '.intval($_GET['page_limit']);
            }
            elseif(isset($_GET['id']))
            {
                $getVar = strip_tags(trim($_GET['id']));
                $whereClause =  " id = $getVar ";
            }

            $query = "SELECT id,description FROM tbl_state WHERE  $whereClause ORDER BY description $limit";
            $result = DB::select($query);
            //var_dump($result);die;
            //$output = $result->result_array();
            $resultdata = array();
            foreach ($result as $resultdata) {
                //print_r($resultdata);die;
                $row_array['id'] = $resultdata->id;
                $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->description)));
                array_push($return_arr,$row_array);
            }
        }
        else if(isset($_GET['selectedCountry']))
        {
            $query = "SELECT id,description FROM tbl_state WHERE country='".$_GET['selectedCountry']."' ORDER BY description";
            $result = DB::select($query);
            //var_dump($result);die;
            //$output = $result->result_array();
            $resultdata = array();
            foreach ($result as $resultdata) {
                $row_array['id'] = $resultdata->id;
                $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->description)));
                array_push($return_arr,$row_array);
            }
        }
        else{
            $row_array['id'] = 0;
            $row_array['text'] = utf8_encode('Start Typing....');
            array_push($return_arr,$row_array);
        }


        $ret = array();
        if(isset($data['id'])){
            $ret = $row_array;
        }
        else if(isset($data['selectedCountry'])){
            $ret['results'] = $return_arr;
        }else{
            $ret['results'] = $return_arr;
        }
        echo json_encode($ret);
    }

    function city_ajax_populate_country(Request $request)
    {
        $return_arr = array();
        $row_array = array();
        $whereClause = "1";
        $limit="";

        //print_r($_GET);die;

        //var_dump($request->request->get('search'));die;
        if((isset($_GET['search']) AND isset($_GET['search']['term'])) || (isset($_GET['id']) && is_numeric($_GET['id'])))
        {
            //die("here");
            if(isset($_GET['search']))
            {
                $getVar = strip_tags(trim($_GET['search']['term']));

                //echo $getVar;die;
                $whereClause =  " description LIKE '%" . $getVar ."%' ";
                $limit = 'LIMIT '.intval($_GET['page_limit']);
            }
            elseif(isset($_GET['id']))
            {
                $getVar = strip_tags(trim($_GET['id']));
                $whereClause =  " id = $getVar ";
            }



            $query = "SELECT id,description FROM mst_country WHERE  $whereClause ORDER BY description $limit";
            $result = DB::select($query);
            //var_dump($result);die;
            //$output = $result->result_array();
            $resultdata = array();
            foreach ($result as $resultdata) {
                //print_r($resultdata);die;
                $row_array['id'] = $resultdata->id;
                $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->description)));
                array_push($return_arr,$row_array);
            }
        }else{
            $row_array['id'] = 0;
            $row_array['text'] = utf8_encode('Start Typing....');
            array_push($return_arr,$row_array);
        }


        $ret = array();
        if(isset($data['id'])){
            $ret = $row_array;
        }else{
            $ret['results'] = $return_arr;
        }
        echo json_encode($ret);
    }
}
