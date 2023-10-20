<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;
use App\Models\DescriptionMaster;
use App\Models\SubMenu;
use App\Models\MenuItem;

class product extends Controller
{

    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('product');

    //         // if (!$access) {
    //         //     // Redirect::to('dashboard')->send();
    //         // }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     // $acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //     // dd($acces_management);
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
        // dd($this->acces_management);
        // $data['acces_management'] = $this->acces_management;
        // $data['module_id'] = '36.0';
        $list = \Helper::getPermission('product-m-list') ? 1 : 0;
        if($list == 1){
            return view('product.index');
        }else{
            Redirect::to('dashboard')->send();
        }
    }


    public function productdata()
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
            $search_string="where tp.id LIKE '%$search_value%' or tp.unique_id LIKE '%$search_value%' or tpc.product_category LIKE '%$search_value%' or tp.product_type LIKE '%$search_value%' ";
            $tbldata = DB::select("select tp.id as pid,tp.unique_id as puniqueid,tp.product_category as pcategory,tp.product_type as ptype,tpc.product_category as pcategoryname from tbl_product tp left join tbl_product_category tpc on tpc.id=tp.product_category $search_string order by tp.id desc limit $start,$length");

            $process_count = DB::select("select count(*) as totalcount from tbl_product tp left join tbl_product_category tpc on tpc.id=tp.product_category $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select tp.id as pid,tp.unique_id as puniqueid,tp.product_category as pcategory,tp.product_type as ptype,tpc.product_category as pcategoryname from tbl_product tp left join tbl_product_category tpc on tpc.id=tp.product_category order by tp.id desc limit $start,$length");
            $process_count = DB::select("select count(*) as totalcount from tbl_product tp ");
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
        $create = \Helper::getPermission('product-m-create') ? 1 : 0;
        $edit = \Helper::getPermission('product-m-edit') ? 1 : 0;
        $delete = \Helper::getPermission('product-m-delete') ? 1 : 0;


        foreach($tbldata as $tbldata) {

            $id=$tbldata->pid;
            $puniqueid=$tbldata->puniqueid;

            $pcategory=$tbldata->pcategory;
            $ptype=$tbldata->ptype;
            $pcategoryname=$tbldata->pcategoryname;

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

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            //$row[] = $id;
            $row[] = $puniqueid;
            $row[] = $pcategoryname;
            $row[] = $ptype;



            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';
            $action="";
            if ($edit OR $delete)
            {
                if($edit)
                {
                    $edit_url  = url("/productaddedit/{$id}");
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                }
                if($delete)
                {
                    $edit_url  = url("/productaddedit/{$id}");
                    $action.='<a onclick="LoadDeleteDialog('.$id.')"  class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Delete"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }
            }
            else
            {
                    // $action.='<button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                    //             Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                    //         </button>';
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
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('product-m-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_product")->delete($id);
        DB::table('tbl_product_pre_press')->where('product_id', $id)->delete();
        DB::table('tbl_product_press')->where('product_id', $id)->delete();
        DB::table('tbl_product_post_press')->where('product_id', $id)->delete();

        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteprepress(Request $request)
    {
        //die("here");
        $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('product-m-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_product_pre_press")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deletepress(Request $request)
    {
        //die("here");
        $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('product-m-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_product_press")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function deletepostpress(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('product-m-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_product_post_press")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function deleteneft(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('product-m-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_rtgs_neft")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


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

                $result = DB::table('tbl_company')
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

                $result = DB::table('tbl_company')
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
            $edit = \Helper::getPermission('product-m-edit') ? 1 : 0;
            if($edit != 1)
            {
                $Success=0;
                $Msg="You have no access rights to delete, Contact Administrator for access rights";
                echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
            }
                foreach($id as $id) {
                    DB::table("tbl_product")->delete($id);
                    DB::table('tbl_product_pre_press')->where('product_id', $id)->delete();
                    DB::table('tbl_product_press')->where('product_id', $id)->delete();
                    DB::table('tbl_product_post_press')->where('product_id', $id)->delete();
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitproduct(Request $request)
    {
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('edit_id');

        $product_category=$request->request->get('product_category');
        $product_type=$request->request->get('product_type');
        $company = $request->company;
        $description = implode(",",$request->description);
        $gst = $request->gst;



        if($edit_id=="0")
        {

            $data = array();
            $data['product_category']= $product_category;
            $data['product_type']= $product_type;

            $data['company_id'] = $company;
            $data['description_id'] = $description;
            $data['gst'] = $gst;

            $data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_product")->insert($data);

            if($query_insert==true)
            {

                $inserted_product_id = DB::getPdo()->lastInsertId();

                //$lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="FPM/$inserted_product_id";

                $result = DB::table("tbl_product")
                ->where('id', $inserted_product_id)
                ->update([
                    'unique_id'=> $unique_id
                ]);

                if(isset($_POST['prepress']['process']))
                {
                    //die("here");

                    foreach($_POST['prepress']['process'] as $key=>$value) {
                        // do stuff

                        /*echo $key;
                        echo "<br/>";
                        echo $value;
                        echo "<br/>";*/

                        $prepress_id=$_POST['prepress']['prepress_id'][$key];
                        $process=$_POST['prepress']['process'][$key];
                        $basicmachine=$_POST['prepress']['basicmachine'][$key];
                        $alternativemachine=$_POST['prepress']['alternativemachine'][$key];
                        $qc=$_POST['prepress']['qc'][$key];

                        $prepressdata['product_id']=$inserted_product_id;
                        $prepressdata['process']=$process;
                        $prepressdata['basicmachine']=$basicmachine;
                        $prepressdata['alternativemachine']=$alternativemachine;
                        $prepressdata['qc']=$qc;

                        $pre_press_query_insert = DB::table("tbl_product_pre_press")->insert($prepressdata);
                    }
                    /*die;
                    $totalplants=sizeof($_POST['plants']['ecc_no']);

                    for($i=1;$i<=$totalplants;$i++)
                    {
                        $plants_id=$_POST['plants']['plants_id'][$i];
                        $ecc_no=$_POST['plants']['ecc_no'][$i];
                        $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                        $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                        $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                        $plantsdata['company_id']=$inserted_company_id;
                        $plantsdata['ecc_no']=$ecc_no;
                        $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                        $plantsdata['ecc_no_dated']=$ecc_no_dated;
                        $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);

                    }*/
                }


                if(isset($_POST['press']['process']))
                {
                    foreach($_POST['press']['process'] as $key=>$value) {


                        $prepress_id=$_POST['press']['press_id'][$key];
                        $process=$_POST['press']['process'][$key];
                        $basicmachine=$_POST['press']['basicmachine'][$key];
                        $alternativemachine=$_POST['press']['alternativemachine'][$key];
                        $qc=$_POST['press']['qc'][$key];

                        $pressdata['product_id']=$inserted_product_id;
                        $pressdata['process']=$process;
                        $pressdata['basicmachine']=$basicmachine;
                        $pressdata['alternativemachine']=$alternativemachine;
                        $pressdata['qc']=$qc;

                        $pre_press_query_insert = DB::table("tbl_product_press")->insert($pressdata);
                    }

                }


                if(isset($_POST['postpress']['process']))
                {
                    foreach($_POST['postpress']['process'] as $key=>$value) {


                        $prepress_id=$_POST['postpress']['press_id'][$key];
                        $process=$_POST['postpress']['process'][$key];
                        $basicmachine=$_POST['postpress']['basicmachine'][$key];
                        $alternativemachine=$_POST['postpress']['alternativemachine'][$key];
                        $qc=$_POST['postpress']['qc'][$key];

                        $postpressdata['product_id']=$inserted_product_id;
                        $postpressdata['process']=$process;
                        $postpressdata['basicmachine']=$basicmachine;
                        $postpressdata['alternativemachine']=$alternativemachine;
                        $postpressdata['qc']=$qc;

                        $pre_press_query_insert = DB::table("tbl_product_post_press")->insert($postpressdata);
                    }

                }


                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'company_id'=>$inserted_product_id));
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
            $date=date("Y/m/d h:m:s");

            //var_dump($data);die;


            $data['product_category']= $product_category;
            $data['product_type']= $product_type;

            $data['company_id'] = $company;
            $data['description_id'] = $description;

            $data['modifiedby']= $user_id;
            $data['modifieddttm']= $date;
            $data['gst'] = $gst;



            /*$data = array(
                'process_id'=>$process_id,
                'name' => $process_name,
                'category'=>$category,
                'is_fixed_process'=>$process_avg_completion_time,
                'process_avg_completion_time'=>$process_avg_completion_time,
                'fixed_cost'=>$fixed_cost,
                'running_cost'=>$running_cost,
                'modifiedby'=>$user_id,
                'modifieddttm'=>"$date"
            );*/

            //print_r($data);die;




            $result = DB::table("tbl_product")
            ->where('id', $edit_id)
            ->update($data);


            if(isset($_POST['prepress']['process']))
            {

                foreach($_POST['prepress']['process'] as $key=>$value) {


                    //echo $key;die;
                    $prepress_id=$_POST['prepress']['prepress_id'][$key];
                    $process=$_POST['prepress']['process'][$key];
                    $basicmachine=$_POST['prepress']['basicmachine'][$key];
                    $alternativemachine=$_POST['prepress']['alternativemachine'][$key];
                    $qc=$_POST['prepress']['qc'][$key];
                    //echo $_POST['prepress']['qc'][$key];die;
                    //echo $qc;die;

                    $pre_press_data['product_id']=$edit_id;
                    $pre_press_data['process']=$process;
                    $pre_press_data['basicmachine']=$basicmachine;
                    $pre_press_data['alternativemachine']=$alternativemachine;
                    $pre_press_data['qc']=$qc;

                    if($prepress_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_product_pre_press")->insert($pre_press_data);
                    }
                    else
                    {
                        $result = DB::table("tbl_product_pre_press")
                        ->where('id', $prepress_id)
                        ->update($pre_press_data);
                    }

                }
                //die("here");
                /*$totalplants=sizeof($_POST['plants']['ecc_no']);

                for($i=1;$i<=$totalplants;$i++)
                {
                    $plants_id=$_POST['plants']['plants_id'][$i];
                    $ecc_no=$_POST['plants']['ecc_no'][$i];
                    $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                    $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                    $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                    $plantsdata['company_id']=$edit_id;
                    $plantsdata['ecc_no']=$ecc_no;
                    $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                    $plantsdata['ecc_no_dated']=$ecc_no_dated;
                    $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                    if($plants_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);
                    }
                    else
                    {
                        $result = DB::table("tbl_plants")
                        ->where('id', $plants_id)
                        ->update($plantsdata);
                    }



                }*/
            }



            if(isset($_POST['press']['process']))
            {
                //print_r($_POST['press']);die;

                foreach($_POST['press']['process'] as $key=>$value) {


                    //echo $key;die;
                    $press_id=$_POST['press']['press_id'][$key];
                    $process=$_POST['press']['process'][$key];
                    $basicmachine=$_POST['press']['basicmachine'][$key];
                    $alternativemachine=$_POST['press']['alternativemachine'][$key];
                    $qc=$_POST['press']['qc'][$key];

                    $press_data['product_id']=$edit_id;
                    $press_data['process']=$process;
                    $press_data['basicmachine']=$basicmachine;
                    $press_data['alternativemachine']=$alternativemachine;
                    $press_data['qc']=$qc;



                    if($press_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_product_press")->insert($press_data);
                    }
                    else
                    {
                        $result = DB::table("tbl_product_press")
                        ->where('id', $press_id)
                        ->update($press_data);
                    }

                }

            }



            if(isset($_POST['postpress']['process']))
            {
                //print_r($_POST['press']);die;

                foreach($_POST['postpress']['process'] as $key=>$value) {


                    //echo $key;die;
                    //var_dump($_POST['postpress']['press_id']);die;
                    $press_id=$_POST['postpress']['press_id'][$key];

                    //echo $press_id;die;
                    $process=$_POST['postpress']['process'][$key];
                    $basicmachine=$_POST['postpress']['basicmachine'][$key];
                    $alternativemachine=$_POST['postpress']['alternativemachine'][$key];
                    $qc=$_POST['postpress']['qc'][$key];

                    $postpress_data['product_id']=$edit_id;
                    $postpress_data['process']=$process;
                    $postpress_data['basicmachine']=$basicmachine;
                    $postpress_data['alternativemachine']=$alternativemachine;
                    $postpress_data['qc']=$qc;



                    if($press_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_product_post_press")->insert($postpress_data);
                    }
                    else
                    {
                        $result = DB::table("tbl_product_post_press")
                        ->where('id', $press_id)
                        ->update($postpress_data);
                    }

                }

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


    function submitneft(Request $request)
    {

        //print_r($_POST);die;
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $company_id=$request->request->get('company_id');
        $edit_id=$request->request->get('edit_id');

        //echo $company_id;die;

        if($edit_id=="0")
        {

            $tbl_rtgs_neftdata = array();
            $tbl_rtgs_neftdata['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $tbl_rtgs_neftdata['addedddttm']= $date;



            if(isset($_POST['neft']['bank_name']))
            {
                //die("here");

                foreach($_POST['neft']['bank_name'] as $key=>$value) {
                    // do stuff

                    /*echo $key;
                    echo "<br/>";
                    echo $value;
                    echo "<br/>";*/

                    $neft_id=$_POST['neft']['neft_id'][$key];
                    $bank_name=$_POST['neft']['bank_name'][$key];
                    $account_no=$_POST['neft']['account_no'][$key];
                    $branch_name=$_POST['neft']['branch_name'][$key];
                    $cost_center=$_POST['neft']['cost_center'][$key];
                    $account_name=$_POST['neft']['account_name'][$key];
                    $email_id=$_POST['neft']['email_id'][$key];
                    $mobile_number=$_POST['neft']['mobile_number'][$key];
                    $ifsc_code=$_POST['neft']['ifsc_code'][$key];
                    $account_type=$_POST['neft']['account_type'][$key];
                    $address_of_remitter=$_POST['neft']['address_of_remitter'][$key];
                    $template=$_POST['neft']['template'][$key];

                    $tbl_rtgs_neftdata['company_id']=$company_id;
                    $tbl_rtgs_neftdata['bank_name']=$bank_name;
                    $tbl_rtgs_neftdata['account_no']=$account_no;
                    $tbl_rtgs_neftdata['branch_name']=$branch_name;
                    $tbl_rtgs_neftdata['cost_center']=$cost_center;
                    $tbl_rtgs_neftdata['account_name']=$account_name;
                    $tbl_rtgs_neftdata['email_id']=$email_id;
                    $tbl_rtgs_neftdata['mobile_number']=$mobile_number;
                    $tbl_rtgs_neftdata['ifsc_code']=$ifsc_code;
                    $tbl_rtgs_neftdata['account_type']=$account_type;
                    $tbl_rtgs_neftdata['address_of_remitter']=$address_of_remitter;
                    $tbl_rtgs_neftdata['template']=$template;

                    $tbl_rtgs_neft_insert = DB::table("tbl_rtgs_neft")->insert($tbl_rtgs_neftdata);
                }
                /*die;
                $totalplants=sizeof($_POST['plants']['ecc_no']);

                for($i=1;$i<=$totalplants;$i++)
                {
                    $plants_id=$_POST['plants']['plants_id'][$i];
                    $ecc_no=$_POST['plants']['ecc_no'][$i];
                    $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                    $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                    $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                    $plantsdata['company_id']=$inserted_company_id;
                    $plantsdata['ecc_no']=$ecc_no;
                    $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                    $plantsdata['ecc_no_dated']=$ecc_no_dated;
                    $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                    $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);

                }*/
            }


            $message="Record inserted successfully.";
            $alert_type="succ";
            $mode="add";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));

        }
        else
        {

            $date=date("Y/m/d h:m:s");



            if(isset($_POST['neft']['bank_name']))
            {

                foreach($_POST['neft']['bank_name'] as $key=>$value) {


                    $neft_id=$_POST['neft']['neft_id'][$key];
                    $bank_name=$_POST['neft']['bank_name'][$key];
                    $account_no=$_POST['neft']['account_no'][$key];
                    $branch_name=$_POST['neft']['branch_name'][$key];
                    $cost_center=$_POST['neft']['cost_center'][$key];
                    $account_name=$_POST['neft']['account_name'][$key];
                    $email_id=$_POST['neft']['email_id'][$key];
                    $mobile_number=$_POST['neft']['mobile_number'][$key];
                    $ifsc_code=$_POST['neft']['ifsc_code'][$key];
                    $account_type=$_POST['neft']['account_type'][$key];
                    $address_of_remitter=$_POST['neft']['address_of_remitter'][$key];
                    $template=$_POST['neft']['template'][$key];


                    $tbl_rtgs_neftdata['company_id']=$company_id;
                    $tbl_rtgs_neftdata['bank_name']=$bank_name;
                    $tbl_rtgs_neftdata['account_no']=$account_no;
                    $tbl_rtgs_neftdata['branch_name']=$branch_name;
                    $tbl_rtgs_neftdata['cost_center']=$cost_center;
                    $tbl_rtgs_neftdata['account_name']=$account_name;
                    $tbl_rtgs_neftdata['email_id']=$email_id;
                    $tbl_rtgs_neftdata['mobile_number']=$mobile_number;
                    $tbl_rtgs_neftdata['ifsc_code']=$ifsc_code;
                    $tbl_rtgs_neftdata['account_type']=$account_type;
                    $tbl_rtgs_neftdata['address_of_remitter']=$address_of_remitter;
                    $tbl_rtgs_neftdata['template']=$template;

                    if($neft_id==0)
                    {
                        $tbl_rtgs_neft_insert = DB::table("tbl_rtgs_neft")->insert($tbl_rtgs_neftdata);
                    }
                    else
                    {
                        $result = DB::table("tbl_rtgs_neft")
                        ->where('id', $neft_id)
                        ->update($tbl_rtgs_neftdata);
                    }

                }
                //die("here");
                /*$totalplants=sizeof($_POST['plants']['ecc_no']);

                for($i=1;$i<=$totalplants;$i++)
                {
                    $plants_id=$_POST['plants']['plants_id'][$i];
                    $ecc_no=$_POST['plants']['ecc_no'][$i];
                    $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                    $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                    $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                    $plantsdata['company_id']=$edit_id;
                    $plantsdata['ecc_no']=$ecc_no;
                    $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                    $plantsdata['ecc_no_dated']=$ecc_no_dated;
                    $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                    if($plants_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);
                    }
                    else
                    {
                        $result = DB::table("tbl_plants")
                        ->where('id', $plants_id)
                        ->update($plantsdata);
                    }



                }*/
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

    function editneft(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_rtgs_neft where id=$edit_id");


        foreach($tbldata as $tbldata){
            $neft_id=$tbldata->id;
            $neft_company_id=$tbldata->company_id;
            $bank_name=$tbldata->bank_name;
            $account_no=$tbldata->account_no;
            $branch_name=$tbldata->branch_name;
            $cost_center=$tbldata->cost_center;
            $account_name=$tbldata->account_name;
            $email_id=$tbldata->email_id;
            $mobile_number=$tbldata->mobile_number;
            $ifsc_code=$tbldata->ifsc_code;
            $account_type=$tbldata->account_type;
            $address_of_remitter=$tbldata->address_of_remitter;
            $template=$tbldata->template;


        }
        echo json_encode(array('neft_id'=>$neft_id,'company_id' => $neft_company_id,'bank_name'=>$bank_name,'account_no'=>$account_no,'branch_name'=>$branch_name,'cost_center'=>$cost_center,'account_name'=>$account_name,'email_id'=>$email_id,'mobile_number'=>$mobile_number,'ifsc_code'=>$ifsc_code,'account_type'=>$account_type,'address_of_remitter'=>$address_of_remitter,'template'=>$template,'message'=>''));
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

    public function productWiseDesc(Request $request){
    //    echo "ABC00";
    //     exit();

        $desc = DB::table('tbl_product')->where('id', $request->id)->select('description_id')->get();
        $desc_id = explode(",", $desc[0]->description_id);
        $description = DescriptionMaster::whereIn('id', $desc_id)->select('id', 'text')->orderBy('id', 'asc')->get();
        $result = array();
        $content = "";
        foreach($description as $key => $item){
            $sub_menu = SubMenu::where('menu_id', $item->id)->select('id', 'menu_id', 'text')->orderBy('id', 'asc')->get();
            $count = $key + 1;
            $content .= $count . ". " . $item->text . " <br>\n";

            if ($sub_menu->count()) {
                foreach($sub_menu as $key1 =>  $item1){
                    $menu_item = MenuItem::where('sub_menu_id', $item1->id)->select('id', 'sub_menu_id', 'text')->orderBy('id', 'asc')->get();
                    $count1 = $key1 + 1;
                    $content .= " $count.$count1. " . $item1->text . " <br>\n";
                    if ($menu_item->count()) {
                        foreach($menu_item as $key2 => $item2){
                            $count2 = $key2 + 1;
                            $content .= "  $count.$count1.$count2. " . $item2->text . " <br>\n";
                            $value = $item2->text;
                            $result[$key][$key1][$key2]['item']=$value;
                        }
                    }
                }
            }
        }
        return $content;
    }

}
