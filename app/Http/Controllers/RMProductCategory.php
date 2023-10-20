<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class RMProductCategory extends Controller
{
    // public function __construct()
    // {
    //         if (!Session::has('userdata')){

    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('rm_product_category');

    //         if (!$access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //  }

     public function index()
     {
        // $data['acces_management'] = $this->acces_management;

        // $data['module_id'] = '33.0';
        $list = \Helper::getPermission('rm-product-category-list') ? 1 : 0;
        if($list){
            return view('rmproductcategory.index');
        }else{
            Redirect::to('dashboard')->send();
        }


     }

     public function rmproductcategorydata()
    {
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
            $search_string="where tc.name LIKE '%$search_value%' or tp.id LIKE '%$search_value%' or tp.unique_id LIKE '%$search_value%' or tp.name LIKE '%$search_value%' ";
            $tbldata = DB::select("select *,tc.name as category_name,tc.id as category_id,tp.name as product_category_name,tp.unique_id as rm_product_category_unique_id from tbl_rm_product_category tp left join tbl_rm_category tc on tc.id=tp.rmcategory order by tp.id desc $search_string limit $start,$length");
            $state_count = DB::select("select count(*) as totalcount from tbl_rm_product_category tp left join tbl_rm_category tc on tc.id=tp.rmcategory $search_string");
            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select *,tp.id as id,tp.name as product_category_name,tc.name as category_name,tp.unique_id as rm_product_category_unique_id from tbl_rm_product_category tp left join tbl_rm_category tc on tc.id=tp.rmcategory order by tp.id desc limit $start,$length");
            $state_count = DB::select("select count(*) as totalcount from tbl_rm_product_category tp");
        }

        foreach($state_count as $state_count) {
            $totalcount=$state_count->totalcount;
        }

        // return $tbldata;
        $output = array(
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
            $rm_product_category_unique_id=$tbldata->rm_product_category_unique_id;

            // dd($tbldata);
            $category_name=$tbldata->category_name;
            $product_category_name=$tbldata->product_category_name;
            //$status=$tbldata->statestatus;
            // $code=$tbldata->statecode;
            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            //$row[] = $id;
            $row[] = $rm_product_category_unique_id;
            $row[] = $category_name;
            $row[] = $product_category_name;


            $action="";
            if ($edit OR $delete)
            {
                if($edit)
                {
                    $action.='<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                }
                if($delete)
                {
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;font-weight:normal !important;" title="Delete" class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }

            }
            else
            {
                // $action.='<button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                //                 Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                //             </button>';
            }
            $row[]=$action;


            $output['aaData'][] = $row;
        }

        echo json_encode($output);
    }

    function delete(Request $request)
    {
        $id=$request->request->get('id');
        DB::table("tbl_rm_product_category")->delete($id);
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function record_actions_rmproductcategory(Request $request)
    {

        $id=$request->request->get('id');
        $opt=$request->request->get('opt');
        //echo $opt;die;
        $data = array('status'=>0);


        if($opt==1)
        {
            $status=1;
            foreach($id as $id) {
                $result = DB::table("tbl_rm_product_category")
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

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

                $result = DB::table("tbl_rm_product_category")
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
                    DB::table("tbl_rm_product_category")->delete($id);
                }
                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }




function submitrmproductcategory(Request $request)
    {
        $name=$request->request->get('name');
        $edit_id=$request->request->get('edit_id');
        $rmcategory=$request->request->get('rmcategory');
        $max_id_result=DB::table("tbl_state")->max('id');
        $max_id_result=$max_id_result+1;

        //$tbl='state';


        $data = array();
        $unique_id="PC/$max_id_result";
        //$data['unique_id']= $unique_id;
        $data['name']= $name;
        $data['rmcategory']= $rmcategory;
        //$data['status']= $status;

        if($edit_id=="")
        {
            //echo "here";die;
            $data['addeddby']= "0";
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_rm_product_category")->insert($data);

            if($query_insert==true)
            {

                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="PC/$lastInsertId";

                $result = DB::table("tbl_rm_product_category")
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

            $result = DB::table("tbl_rm_product_category")
            ->where('id', $edit_id)
            ->update([
                'name'=>$name,
                //'status' => $status,
                // 'code' => $code,
                'rmcategory'=>$rmcategory,
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


    function editrmproductcategory(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_rm_product_category where id=$edit_id");


        foreach($tbldata as $tbldata){
            $name=$tbldata->name;
            //$status=$tbldata->status;
            $rmcategory=$tbldata->rmcategory;
            // $code=$tbldata->code;
        }
        echo json_encode(array('name' => $name,'rmcategory'=>$rmcategory,'message'=>''));
    }


    function validatermproductcategory(Request $request)
    {
        //echo "here";die;
        $status = "false";

        $name=$request->request->get('name');
        $edit_id=$request->request->get('id');
        $rmcategory=$request->request->get('rmcategory');
        //echo $edit_id;die;

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_rm_product_category where name='".$name."' and rmcategory='".$rmcategory."'");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_rm_product_category where name='".$name."' and id!='".$edit_id."' and rmcategory='".$rmcategory."'");
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
