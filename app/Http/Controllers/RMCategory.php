<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use DB;
use Session;
use Redirect;


class RMCategory extends Controller
{
    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('rm_category');

    //         if (!$access) {
    //             Redirect::to('dashboard')->send();
    //         }
    //         $this->acces_management =$acces_management;
    //  }

    public function index()
    {
        // $data['acces_management'] = $this->acces_management;

        // $data['module_id'] = '32.0';
        $list = \Helper::getPermission('rm-category-list') ? 1 : 0;
        if($list){
            return view('rmcategory.index');
        }else{
            Redirect::to('dashboard')->send();
        }

    }

    public function rmcategorydata()
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

        if($search_value!="")
        {
            $search_string="where te.name LIKE '%$search_value%' or te.unique_id LIKE '%$search_value%'";

            //echo "select * from tbl_rm_category te $search_string order by te.id desc limit $start,$length";die;
            $tbldata = DB::select("select * from tbl_rm_category te $search_string order by te.id desc limit $start,$length");
            $category_count = DB::select("select count(*) as totalcount from tbl_rm_category te $search_string");

        }
        else
        {
            $tbldata = DB::select("select * from tbl_rm_category te order by te.id desc limit $start,$length");
            $category_count = DB::select("select count(*) as totalcount from tbl_rm_category te");
        }


        foreach($category_count as $category_count) {
            $totalcount = $category_count->totalcount;
        }

        $output = array(
            "iTotalRecords" =>10,
            "iTotalDisplayRecords" => $totalcount,
            "aaData" => array()
        );
        $row = array();
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('rm-category-edit') ? 1 : 0;
        $delete = \Helper::getPermission('rm-category-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {
            $id=$tbldata->id;
            $name=$tbldata->name;
            $unique_id=$tbldata->unique_id;

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            //$row[] = $id;
            $row[] = $unique_id;
            $row[] = $name;

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

            $output['aaData'][] = $row;
        }

        echo json_encode($output);
    }

    function delete(Request $request)
    {
        $id=$request->request->get('id');
        $product_count = DB::select("select count(*) as product_count from tbl_rm_product_category where rmcategory=$id");

        foreach($product_count as $product_count) {
            $product_count=$product_count->product_count;
        }
        //echo $product_count;die;
        if($product_count==0)
        {
            DB::table("tbl_rm_category")->delete($id);
        }
        else
        {
            $message="You can not delete this record.";
            $alert_type="error";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));die;
        }

        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function record_actions(Request $request)
    {
        $id=$request->request->get('id');
        $opt=$request->request->get('opt');
        $data = array('status' => 0);

        if($opt == 1)
        {
            $status=1;
            foreach($id as $id) {

                //DB::enableQueryLog();

                $result = DB::table('tbl_city')
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);
            }

            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));

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

            }
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
        }
        else
        {
            foreach($id as $id) {

                $product_count = DB::select("select count(*) as product_count from tbl_rm_product_category where rmcategory=$id");

                foreach($product_count as $product_count) {
                    $product_count=$product_count->product_count;
                }
                echo $product_count;die;
                if($product_count==0)
                {
                    DB::table("tbl_rm_category")->delete($id);
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

        }
    }

    function submitrmcategory(Request $request)
    {

        $name=$request->request->get('name');
        $edit_id=$request->request->get('edit_id');

        $max_id_result=DB::table('tbl_rm_category')->max('id');
        $max_id_result=$max_id_result+1;
        $unique_id="MC/".$max_id_result;

        $data = array();

        //$data['unique_id']= $unique_id;

        $data['name']= $name;

        if($edit_id=="")
        {
            $data['addeddby']= "0";
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            //var_dump($data);die;

            $query_insert = DB::table("tbl_rm_category")->insert($data);

            if($query_insert==true)
            {

                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="MC/$lastInsertId";

                $result = DB::table("tbl_rm_category")
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
            $result = DB::table("tbl_rm_category")
            ->where('id', $edit_id)
            ->update([
                'name'=>$name,
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

    function editrmcategory(Request $request)
    {
        $edit_id=$request->request->get('edit_id');
        $tbldata = DB::select("select * from tbl_rm_category where id=$edit_id");

        foreach($tbldata as $tbldata){
            $name=$tbldata->name;
        }

        echo json_encode(array('name' => $name,'message'=>''));
    }

    function validatermcategorycode(Request $request)
    {
        $status = "false";
        $name=$request->request->get('name');

        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_rm_category where name='".$name."' ");
        }
        else{
            $tbldata = DB::select("select count(*) as found from tbl_rm_category where name='".$name."' and id!='".$edit_id."'");
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

}
