<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;


class QcMaster extends Controller
{
    // public function __construct()
    // {
    //     if(!Session::has('userdata'))
    //     {
    //         Redirect::to('login')->send();
    //     }
    //     $acces_management = $this->check_rights('qcmaster');

    //     if(!$access){
    //         Redirect::to('dashboard')->send();
    //     }
    //     $this->acces_management = $acces_management;
    // }

    public function index()
    {
        // $data['acces_management']=$this->acces_management;
        // $data['module_id']= '35.0';
        $list = \Helper::getPermission('process-qc-m-list') ? 1 : 0;
        if($list == 1){
            return view('qcmaster.index');
        }else{
            Redirect::to('dashboard')->send();
        }

    }

    public function qcmasterdata()
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
             $search_string="where qc.id LIKE '%$search_value%' or qc.unique_id LIKE '%$search_value%' or qc.process LIKE '%$search_value%'  or qc.name LIKE '%$search_value%'";
             $tbldata = DB::select("SELECT qc.id as id,qc.unique_id as unique_id, qc.name as qname ,pm.name as process,c.category as category FROM `mst_qc` as qc LEFT JOIN tbl_process_master as pm on qc.process=pm.id LEFT JOIN tbl_category as c on c.id=pm.category $search_string order by qc.id desc limit $start,$length");
             $qc_count = DB::select("select count(*) as totalcount from mst_qc qc $search_string");
         }
         else
         {
             $tbldata = DB::select("SELECT qc.id as id,qc.unique_id as unique_id, qc.name as qname ,pm.name as process,c.category as category FROM `mst_qc` as qc LEFT JOIN tbl_process_master as pm on qc.process=pm.id LEFT JOIN tbl_category as c on c.id=pm.category order by qc.id desc limit $start,$length");
             $qc_count = DB::select("select count(*) as totalcount from mst_qc qc");
         }

         foreach($qc_count as $qc_count) {
            $totalcount=$qc_count->totalcount;
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
        $create = \Helper::getPermission('process-qc-m-create') ? 1 : 0;
        $edit = \Helper::getPermission('process-qc-m-edit') ? 1 : 0;
        $delete = \Helper::getPermission('process-qc-m-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {
            $id=$tbldata->id;
            $unique_id=$tbldata->unique_id;

            $category=$tbldata->category;
            $process=$tbldata->process;
            $name=$tbldata->qname;

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $unique_id;
            $row[] = $category;
            $row[] = $process;
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


        DB::table("mst_qc")->delete($id);
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function record_actions_qcmaster(Request $request)
    {

        $id=$request->request->get('id');
        $opt=$request->request->get('opt');
        //echo $opt;die;
        $data = array('status'=>0);


        if($opt==1)
        {
            $status=1;
            foreach($id as $id) {
                $result = DB::table("mst_qc")
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

                $result = DB::table("mst_qc")
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

                    DB::table("mst_qc")->delete($id);
                }
                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitqcmaster(Request $request)
    {
        $edit_id=$request->request->get('edit_id');

        $name=$request->request->get('name');
        $process=$request->request->get('process');

        $data = array();
        $data['name']= $name;
        $data['process']= $process;

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        if($edit_id=="")
        {
            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            //var_dump($data);die;

            $query_insert = DB::table("mst_qc")->insert($data);

            //var_dump($query_insert);die;

            if($query_insert==true)
            {
                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="QC/$lastInsertId";

                $result = DB::table("mst_qc")
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
            $result = DB::table("mst_qc")
            ->where('id', $edit_id)
            ->update([
                'name'=>$name,
                'process'=>$process,
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

    function editqcmaster(Request $request)
    {
        $edit_id=$request->request->get('edit_id');

        $tbldata = DB::select("select * from mst_qc where id=$edit_id");


        foreach($tbldata as $tbldata){
            $name=$tbldata->name;
            $process=$tbldata->process;
        }
        echo json_encode(array('name' => $name,'process'=>$process,'message'=>''));
    }

    function validateqcmaster(Request $request)
    {
        //echo "here";die;
        $status = "false";

        $name=$request->request->get('name');
        $edit_id=$request->request->get('id');
        $process=$request->request->get('process');
        //echo $edit_id;die;

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from mst_qc where name='".$name."' and process='".$process."'");
        }else{
            $tbldata = DB::select("select count(*) as found from mst_qc where name='".$name."' and id!='".$edit_id."' and process='".$process."'");
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


