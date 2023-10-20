<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class customer extends Controller
{

    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('customer');

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
        // $data['module_id'] = '60.0';
        $list = \Helper::getPermission('customer-list') ? 1 : 0;
        if($list){
            return view('customer.index');
        }else{
            Redirect::to('dashboard')->send();
        }
    }


    public function customerdata()
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
            $search_string="where tc.unique_id LIKE '%$search_value%' or tc.id LIKE '%$search_value%' or tc.customer_name LIKE '%$search_value%' or tc.customer_no LIKE '%$search_value%' or comp.name LIKE '%$search_value%' or tc.post_box_no LIKE '%$search_value%' ";
            //echo "select tc.id as cid,tc.customer_name as customer_name,tc.customer_no as customer_no,tc.company as company,comp.name as companyname from tbl_customer_general tc left join tbl_company comp on comp.id=tc.company $search_string order by tc.id desc limit $start,$length";die;

            //select tc.id as cid,tc.customer_name as customer_name,tc.customer_no as customer_no,tc.company as company,comp.name as companyname from tbl_customer_general tc left join tbl_company comp on comp.id=tc.company where tc.id LIKE '%tes%' or tc.customer_name LIKE '%tes%' or tc.customer_no LIKE '%tes%' or comp.name LIKE '%tes%'  order by tc.id desc limit 0,10
            $tbldata = DB::select("select tc.id as cid,tc.unique_id as unique_id,tc.customer_name as customer_name,tc.customer_no as customer_no,tc.company as company,tc.post_box_no as post_box_no,comp.name as companyname from tbl_customer_general tc left join tbl_company comp on comp.id=tc.company $search_string order by tc.id desc limit $start,$length");
            //echo $tbldata;die;
            $process_count = DB::select("select count(*) as totalcount from tbl_customer_general tc left join tbl_company comp on comp.id=tc.company  $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select tc.id as cid,tc.unique_id as unique_id,tc.customer_name as customer_name,tc.customer_no as customer_no,tc.company as company,tc.post_box_no as post_box_no,comp.name as companyname from tbl_customer_general tc left join tbl_company comp on comp.id=tc.company order by tc.id desc limit $start,$length");
            $process_count = DB::select("select count(*) as totalcount from tbl_customer_general tc ");
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
        $edit = \Helper::getPermission('customer-edit') ? 1 : 0;
        $delete = \Helper::getPermission('customer-delete') ? 1 : 0;


        foreach($tbldata as $tbldata) {

            $id=$tbldata->cid;
            $unique_id=$tbldata->unique_id;
            $customer_name=$tbldata->customer_name;

            $customer_no=$tbldata->customer_no;
            $company=$tbldata->company;
            $companyname=$tbldata->companyname;
            $post_box_no=$tbldata->post_box_no;




            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $unique_id;
            $row[] = $customer_no;
            $row[] = $customer_name;
            $row[] = $companyname;
            $row[] = $post_box_no;



            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';
            $action="";
            if ($edit OR $delete)
            {
                if($edit)
                {
                    $edit_url  = url("/customeraddedit/{$id}/general");
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;" ></i></a>';
                }
                if($delete)
                {
                    $edit_url  = url("/customeraddedit/{$id}/general");
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

    function export($type,$id)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Delivery Location');
        $sheet->setCellValue('C1', 'Delivery GST No');
        $sheet->setCellValue('D1', 'Active Inactive');

        $rows = 2;


        $delivery_location_count=0;


        $tbl_customer_delivery_location_count = DB::select("select count(*) as totalcount from tbl_customer_delivery_location where customer_id='".$id."' ");
        foreach($tbl_customer_delivery_location_count as $tbl_customer_delivery_location_count)
        {
            //var_dump($tbl_plants_count);die;
            $delivery_location_count=$tbl_customer_delivery_location_count->totalcount;
        }

        if($delivery_location_count!=0)
        {

            $tbl_customer_delivery_location = DB::select("select * from tbl_customer_delivery_location where customer_id=$id");
				//var_dump($tbl_customer_delivery_location);die;
            foreach($tbl_customer_delivery_location as $tbl_customer_delivery_location){

                $delivery_location_id=$tbl_customer_delivery_location->id;

                //echo $delivery_location_id;die;
                $delivery_location=$tbl_customer_delivery_location->delivery_location;
                $delivery_location_gst_no=$tbl_customer_delivery_location->delivery_location_gst_no;
                $delivery_location_status=$tbl_customer_delivery_location->delivery_location_status;

                if($delivery_location_status=="1")
                {
                    $delivery_location_status_name="Active";
                }
                else
                {
                    $delivery_location_status_name="In Active";
                }




                $sheet->setCellValue('A' . $rows, $delivery_location_id);
                $sheet->setCellValue('B' . $rows, $delivery_location);
                $sheet->setCellValue('C' . $rows, $delivery_location_gst_no);
                $sheet->setCellValue('D' . $rows, $delivery_location_status_name);
                $rows++;

            }
        }


        $fileName = "Customer_Location_Report.".$type;

        if($type == 'xlsx')
        {
            $writer = new Xlsx($spreadsheet);
        }
         else if($type == 'xls')
        {
            $writer = new Xls($spreadsheet);
        }

        //echo url('/')."/export/".$fileName;
        $writer->save("export/".$fileName);
        header("Content-Type: application/vnd.ms-excel");
        return redirect(url('/')."/export/".$fileName);
    }


    function delete(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('customer-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_company")->delete($id);
        DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteplants(Request $request)
    {
        //die("here");
        $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('customer-edit') ? 1 : 0;
        if($edit !=1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_plants")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function deletedeliverylocation(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('customer-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_customer_delivery_location")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deletecommunication(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('customer-edit') ? 1 : 0;
        if($edit !=1 )
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_customer_communication")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function deletecustomer(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('customer-edit') ? 1 : 0;
        if($edit !=1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_customer_general")->delete($id);
        DB::table('tbl_customer_delivery_location')->where('customer_id', $id)->delete();
        DB::table('tbl_customer_communication')->where('customer_id', $id)->delete();
        DB::table('tbl_customer_invoicing')->where('customer_id', $id)->delete();
        DB::table('tbl_customer_payment')->where('customer_id', $id)->delete();
        DB::table('tbl_customer_shipping')->where('customer_id', $id)->delete();
        DB::table('tbl_customer_shipping_agent')->where('customer_id', $id)->delete();
        DB::table('tbl_customer_export_trade')->where('customer_id', $id)->delete();
        DB::table('tbl_customer_tax_information')->where('customer_id', $id)->delete();


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
            $edit = \Helper::getPermission('customer-edit') ? 1 : 0;
            if($edit!=1)
            {
                $Success=0;
                $Msg="You have no access rights to delete, Contact Administrator for access rights";
                echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
            }
                foreach($id as $id) {
                    DB::table("tbl_customer_general")->delete($id);
                    DB::table('tbl_customer_delivery_location')->where('customer_id', $id)->delete();
                    DB::table('tbl_customer_communication')->where('customer_id', $id)->delete();
                    DB::table('tbl_customer_invoicing')->where('customer_id', $id)->delete();
                    DB::table('tbl_customer_payment')->where('customer_id', $id)->delete();
                    DB::table('tbl_customer_shipping')->where('customer_id', $id)->delete();
                    DB::table('tbl_customer_shipping_agent')->where('customer_id', $id)->delete();
                    DB::table('tbl_customer_export_trade')->where('customer_id', $id)->delete();
                    DB::table('tbl_customer_tax_information')->where('customer_id', $id)->delete();
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }



    function submitcustomer(Request $request){

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('edit_id');


        $customer_name=$request->request->get('customer_name');
        $customer_no=$request->request->get('customer_no');
        $company=$request->request->get('company');
        $vender_code=$request->request->get('vender_code');
        $customer_address=$request->request->get('customer_address');
        $city=$request->request->get('city');
        $post_box_no=$request->request->get('post_box_no');
        $state_code=$request->request->get('state_code');
        $country_code=$request->request->get('country_code');
        $sales_person=$request->request->get('sales_person');
        $office_assistant=$request->request->get('office_assistant');
        $co_ordinator=$request->request->get('co_ordinator');
        $attention=$request->request->get('attention');

        if($edit_id=="0")
        {

            $data = array();
            $data['customer_name']= $customer_name;
            $data['customer_no']= $customer_no;
            $data['company']= $company;
            $data['vender_code']= $vender_code;
            $data['customer_address']= $customer_address;
            $data['city']= $city;
            $data['post_box_no']= $post_box_no;
            $data['state_code']= $state_code;
            $data['country_code']= $country_code;
            $data['sales_person']= $sales_person;
            $data['office_assistant']= $office_assistant;
            $data['co_ordinator']= $co_ordinator;
            $data['attention']= $attention;


            $data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_customer_general")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();

                 $unique_id="CU/$inserted_general_id";

                 $result = DB::table("tbl_customer_general")
                 ->where('id', $inserted_general_id)
                 ->update([
                     'unique_id'=> $unique_id
                 ]);



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$inserted_general_id));
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

            $data['customer_name']= $customer_name;
            $data['customer_no']= $customer_no;
            $data['company']= $company;
            $data['vender_code']= $vender_code;
            $data['customer_address']= $customer_address;
            $data['city']= $city;
            $data['post_box_no']= $post_box_no;
            $data['state_code']= $state_code;
            $data['country_code']= $country_code;
            $data['sales_person']= $sales_person;
            $data['office_assistant']= $office_assistant;
            $data['co_ordinator']= $co_ordinator;
            $data['attention']= $attention;


            $data['modifiedby']= $user_id;
            $data['modifieddttm']= $date;

            $result = DB::table("tbl_customer_general")
            ->where('id', $edit_id)
            ->update($data);






            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$edit_id));


        }


    }


    function submitdeliverylocation(Request $request)
    {
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('delivery_location_id');

       //echo $edit_id;die;


        $delivery_location_general_id=$request->request->get('delivery_location_general_id');
        $delivery_location=$request->request->get('delivery_location');
        $delivery_location_gst_no=$request->request->get('delivery_location_gst_no');
        $delivery_location_status=$request->request->get('delivery_location_status');



        if($edit_id=="0")
        {

            $data = array();
            $data['customer_id']= $delivery_location_general_id;
            $data['delivery_location']= $delivery_location;
            $data['delivery_location_gst_no']= $delivery_location_gst_no;
            $data['delivery_location_status']= $delivery_location_status;


            //$data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            //$data['addedddttm']= $date;


            if($delivery_location=="" && $delivery_location_gst_no=="")
            {

                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$delivery_location_general_id));
            }
            else
            {
                $query_insert = DB::table("tbl_customer_delivery_location")->insert($data);

                if($query_insert==true)
                {

                    $inserted_general_id = DB::getPdo()->lastInsertId();

                    $message="Record inserted successfully.";
                    $alert_type="succ";
                    $mode="add";
                    $url="";
                    echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$delivery_location_general_id));
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




        }
        else
        {


            $date=date("Y/m/d h:m:s");

            $data['delivery_location']= $delivery_location;
            $data['delivery_location_gst_no']= $delivery_location_gst_no;
            $data['delivery_location_status']= $delivery_location_status;

            //$data['modifiedby']= $user_id;
            //$data['modifieddttm']= $date;

            $result = DB::table("tbl_customer_delivery_location")
            ->where('id', $edit_id)
            ->update($data);


            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$delivery_location_general_id));


        }


    }


    function submitcommunication(Request $request)
    {
        //die("here there");
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('communication_id');
        $communication_general_id=$request->request->get('communication_general_id');







        if($communication_general_id=="0")
        {
            $tbl_communication_data = array();
            $tbl_communication_data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $tbl_communication_data['addedddttm']= $date;

            if(isset($_POST['communication']['communication_name']))
            {
                //die("here");

                foreach($_POST['communication']['communication_name'] as $key=>$value) {
                    // do stuff

                    /*echo $key;
                    echo "<br/>";
                    echo $value;
                    echo "<br/>";*/

                    $communication_name=$_POST['communication']['communication_name'][$key];
                    $communication_id=$_POST['communication']['communication_id'][$key];
                    $communication_phone_no=$_POST['communication']['communication_phone_no'][$key];
                    $communication_email=$_POST['communication']['communication_email'][$key];
                    $communication_fax_no=$_POST['communication']['communication_fax_no'][$key];
                    $communication_set_as_default=$_POST['communication']['communication_set_as_default'][$key];
                    $communication_designation=$_POST['communication']['communication_designation'][$key];
                    $communication_department=$_POST['communication']['communication_department'][$key];

                    $tbl_communication_data['communication_name']=$communication_name;
                    $tbl_communication_data['customer_id']=$communication_general_id;
                    $tbl_communication_data['communication_phone_no']=$communication_phone_no;
                    $tbl_communication_data['communication_email']=$communication_email;
                    $tbl_communication_data['communication_fax_no']=$communication_fax_no;
                    $tbl_communication_data['communication_set_as_default']=$communication_set_as_default;
                    $tbl_communication_data['communication_designation']=$communication_designation;
                    $tbl_communication_data['communication_department']=$communication_department;

                    $tbl_rtgs_neft_insert = DB::table("tbl_customer_communication")->insert($tbl_communication_data);

                    $inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();

                    // $unique_id="CB/$inserted_rtgs_neft_id";

                    // $result = DB::table("tbl_rtgs_neft")
                    // ->where('id', $inserted_rtgs_neft_id)
                    // ->update([
                    //     'unique_id'=> $unique_id
                    // ]);
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

            // if($query_insert==true)
            // {




                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$communication_general_id));
            // }
            // else
            // {
            //     $message="Error, While you are trying to insert record.";
            //     $alert_type="err";
            //     $mode="add";
            //     $url="";
            //     echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
            // }
        }
        else
        {




            if(isset($_POST['communication']['communication_name']))
            {

                foreach($_POST['communication']['communication_name'] as $key=>$value) {


                    $communication_name=$_POST['communication']['communication_name'][$key];
                    $communication_id=$_POST['communication']['communication_id'][$key];

                    //echo $communication_id;die;
                    $communication_phone_no=$_POST['communication']['communication_phone_no'][$key];
                    $communication_email=$_POST['communication']['communication_email'][$key];
                    $communication_fax_no=$_POST['communication']['communication_fax_no'][$key];
                    $communication_set_as_default=$_POST['communication']['communication_set_as_default'][$key];
                    $communication_designation=$_POST['communication']['communication_designation'][$key];
                    $communication_department=$_POST['communication']['communication_department'][$key];

                    if($communication_id=="0")
                    {
                        $tbl_communication_data['communication_name']=$communication_name;
                        $tbl_communication_data['customer_id']=$communication_general_id;
                        $tbl_communication_data['communication_phone_no']=$communication_phone_no;
                        $tbl_communication_data['communication_email']=$communication_email;
                        $tbl_communication_data['communication_fax_no']=$communication_fax_no;
                        $tbl_communication_data['communication_set_as_default']=$communication_set_as_default;
                        $tbl_communication_data['communication_designation']=$communication_designation;
                        $tbl_communication_data['communication_department']=$communication_department;

                        if($communication_name=="" && $communication_phone_no=="" && $communication_email=="" && $communication_fax_no=="" && $communication_designation=="" && $communication_department=="")
                        {
                            $message="Record inserted successfully.";
                            $alert_type="succ";
                            $mode="edit";
                            $url="";
                            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$communication_general_id));

                        }
                        else
                        {
                            $tbl_rtgs_neft_insert = DB::table("tbl_customer_communication")->insert($tbl_communication_data);

                            $inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();

                            $message="Record inserted successfully.";
                            $alert_type="succ";
                            $mode="edit";
                            $url="";
                            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$communication_general_id));
                        }




                    }
                    else
                    {


                        $tbl_communication_data['communication_name']=$communication_name;
                        $tbl_communication_data['communication_phone_no']=$communication_phone_no;
                        $tbl_communication_data['communication_email']=$communication_email;
                        $tbl_communication_data['communication_fax_no']=$communication_fax_no;
                        $tbl_communication_data['communication_set_as_default']=$communication_set_as_default;
                        $tbl_communication_data['communication_designation']=$communication_designation;
                        $tbl_communication_data['communication_department']=$communication_department;


                        $result = DB::table("tbl_customer_communication")
                        ->where('id', $communication_id)
                        ->update($tbl_communication_data);


                        $message="Record updated successfully.";
                        $alert_type="succ";
                        $mode="edit";
                        $url="";
                        echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$communication_general_id));


                    }



                }

            }












        }


    }


    function submitshippingagent(Request $request)
    {
        //die("here there");
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('shipping_agent_id');
        $shipping_agent_general_id=$request->request->get('shipping_agent_general_id');
        $shipping_agent_name=$request->request->get('shipping_agent_name');
        $shipping_agent_address=$request->request->get('shipping_agent_address');



        if($shipping_agent_general_id=="0")
        {

            $data = array();
            $data['customer_id']= $shipping_agent_general_id;
            $data['shipping_agent_name']= $shipping_agent_name;
            $data['shipping_agent_address']= $shipping_agent_address;

            $query_insert = DB::table("tbl_customer_shipping_agent")->insert($data);





            if($query_insert==true)
            {
                $tbl_shipping_agent_data = array();
                //$tbl_shipping_agent_data['addeddby']= $user_id;
                $date=date("Y/m/d h:m:s");
                //$tbl_shipping_agent_data['addedddttm']= $date;


                if(isset($_POST['contact']['contact_person_name']))
                {
                    //die("here");

                    foreach($_POST['contact']['contact_person_name'] as $key=>$value) {
                        // do stuff

                        /*echo $key;
                        echo "<br/>";
                        echo $value;
                        echo "<br/>";*/

                        $contact_person_name=$_POST['contact']['contact_person_name'][$key];
                        $contact_position=$_POST['contact']['contact_position'][$key];
                        $contact_email=$_POST['contact']['contact_email'][$key];
                        $contact_mobile=$_POST['contact']['contact_mobile'][$key];
                        $contact_set_as_default=$_POST['contact']['contact_set_as_default'][$key];

                        $tbl_shipping_agent_data['customer_id']=$shipping_agent_general_id;
                        $tbl_shipping_agent_data['contact_person_name']=$contact_person_name;
                        $tbl_shipping_agent_data['contact_position']=$contact_position;
                        $tbl_shipping_agent_data['contact_email']=$contact_email;
                        $tbl_shipping_agent_data['contact_mobile']=$contact_mobile;
                        $tbl_shipping_agent_data['contact_is_default']=$contact_set_as_default;

                        $tbl_rtgs_neft_insert = DB::table("tbl_customer_shipping_agent_contact")->insert($tbl_shipping_agent_data);

                        $inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();

                        // $unique_id="CB/$inserted_rtgs_neft_id";

                        // $result = DB::table("tbl_rtgs_neft")
                        // ->where('id', $inserted_rtgs_neft_id)
                        // ->update([
                        //     'unique_id'=> $unique_id
                        // ]);
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
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$shipping_agent_general_id));
            }
            else
            {

                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$shipping_agent_general_id));

            }

        }
        else
        {


            $data = array();
            $data['customer_id']= $shipping_agent_general_id;

            //echo $shipping_agent_address;die;
            $data['shipping_agent_name']= $shipping_agent_name;
            $data['shipping_agent_address']= $shipping_agent_address;



            $tbldata = DB::select("select count(*) as found from tbl_customer_shipping_agent where customer_id='".$shipping_agent_general_id."' ");


            foreach($tbldata as $tbldata){
                $found=$tbldata->found;
            }

            if($found>0)
            {
                $result = DB::table("tbl_customer_shipping_agent")
                ->where('customer_id', $shipping_agent_general_id)
                ->update($data);
            }
            else
            {
                $query_insert = DB::table("tbl_customer_shipping_agent")->insert($data);
            }







            if(isset($_POST['contact']['contact_person_name']))
            {

                foreach($_POST['contact']['contact_person_name'] as $key=>$value) {

                    $contact_id=$_POST['contact']['contact_id'][$key];
                    $contact_person_name=$_POST['contact']['contact_person_name'][$key];
                    $contact_position=$_POST['contact']['contact_position'][$key];
                    $contact_email=$_POST['contact']['contact_email'][$key];
                    $contact_mobile=$_POST['contact']['contact_mobile'][$key];
                    $contact_set_as_default=$_POST['contact']['contact_set_as_default'][$key];



                    if($contact_id=="0")
                    {
                        $tbl_shipping_agent_data['customer_id']=$shipping_agent_general_id;
                        $tbl_shipping_agent_data['contact_person_name']=$contact_person_name;
                        $tbl_shipping_agent_data['contact_position']=$contact_position;
                        $tbl_shipping_agent_data['contact_email']=$contact_email;
                        $tbl_shipping_agent_data['contact_mobile']=$contact_mobile;
                        $tbl_shipping_agent_data['contact_is_default']=$contact_set_as_default;

                        if($contact_person_name!="" && $contact_position!="" && $contact_email!="" && $contact_mobile!="")
                        {
                            $tbl_rtgs_neft_insert = DB::table("tbl_customer_shipping_agent_contact")->insert($tbl_shipping_agent_data);
                        }
                        //$inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();


                    }
                    else
                    {


                        $tbl_shipping_agent_data['contact_person_name']=$contact_person_name;
                        $tbl_shipping_agent_data['contact_position']=$contact_position;
                        $tbl_shipping_agent_data['contact_email']=$contact_email;
                        $tbl_shipping_agent_data['contact_mobile']=$contact_mobile;
                        $tbl_shipping_agent_data['contact_is_default']=$contact_set_as_default;


                        $result = DB::table("tbl_customer_shipping_agent_contact")
                        ->where('id', $contact_id)
                        ->update($tbl_shipping_agent_data);


                        // $message="Record updated successfully.";
                        // $alert_type="succ";
                        // $mode="edit";
                        // $url="";
                        // echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$communication_general_id));


                    }

                    $message="Record updated successfully.";
                    $alert_type="succ";
                    $mode="edit";
                    $url="";
                    echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$shipping_agent_general_id));



                }

            }












        }


    }






    function submitinvoicing(Request $request)
    {
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('invoicing_edit_id');
        $invoicing_general_id=$request->request->get('invoicing_general_id');


        $bill_to_customer_no=$request->request->get('bill_to_customer_no');
        $gen_bus_posting_group=$request->request->get('gen_bus_posting_group');
        $vat_bus_posting_group=$request->request->get('vat_bus_posting_group');
        $excise_bus_posting_group=$request->request->get('excise_bus_posting_group');
        $customer_posting_group=$request->request->get('customer_posting_group');



        if($edit_id=="0")
        {

            $data = array();
            $data['bill_to_customer_no']= $bill_to_customer_no;
            $data['gen_bus_posting_group']= $gen_bus_posting_group;
            $data['vat_bus_posting_group']= $vat_bus_posting_group;
            $data['excise_bus_posting_group']= $excise_bus_posting_group;
            $data['customer_posting_group']= $customer_posting_group;
            $data['customer_id']= $invoicing_general_id;



            $query_insert = DB::table("tbl_customer_invoicing")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();

                // $unique_id="CO/$inserted_company_id";

                // $result = DB::table("tbl_company")
                // ->where('id', $inserted_general_id)
                // ->update([
                //     'unique_id'=> $unique_id
                // ]);



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$invoicing_general_id));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$invoicing_general_id));
            }
        }
        else
        {


            $data['bill_to_customer_no']= $bill_to_customer_no;
            $data['gen_bus_posting_group']= $gen_bus_posting_group;
            $data['vat_bus_posting_group']= $vat_bus_posting_group;
            $data['excise_bus_posting_group']= $excise_bus_posting_group;
            $data['customer_posting_group']= $customer_posting_group;


            $result = DB::table("tbl_customer_invoicing")
            ->where('id', $edit_id)
            ->update($data);

            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$invoicing_general_id));


        }


    }

    function submitpayment(Request $request)
    {
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('payment_edit_id');
        $payment_general_id=$request->request->get('payment_general_id');


        $payment_term_code=$request->request->get('payment_term_code');
        $payment_method_code=$request->request->get('payment_method_code');
        $credit_limit=$request->request->get('credit_limit');
        $bank_name=$request->request->get('bank_name');
        $bank_branch=$request->request->get('bank_branch');
        $bank_acc_no=$request->request->get('bank_acc_no');



        if($edit_id=="0")
        {

            $data = array();
            $data['payment_term_code']= $payment_term_code;
            $data['payment_method_code']= $payment_method_code;
            $data['credit_limit']= $credit_limit;
            $data['bank_name']= $bank_name;
            $data['bank_branch']= $bank_branch;
            $data['bank_acc_no']= $bank_acc_no;
            $data['customer_id']= $payment_general_id;



            $query_insert = DB::table("tbl_customer_payment")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();

                // $unique_id="CO/$inserted_company_id";

                // $result = DB::table("tbl_company")
                // ->where('id', $inserted_general_id)
                // ->update([
                //     'unique_id'=> $unique_id
                // ]);



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$payment_general_id));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$payment_general_id));
            }
        }
        else
        {


            $data['payment_term_code']= $payment_term_code;
            $data['payment_method_code']= $payment_method_code;
            $data['credit_limit']= $credit_limit;
            $data['bank_name']= $bank_name;
            $data['bank_branch']= $bank_branch;
            $data['bank_acc_no']= $bank_acc_no;


            $result = DB::table("tbl_customer_payment")
            ->where('id', $edit_id)
            ->update($data);

            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$payment_general_id));


        }


    }


    function submitshipping(Request $request)
    {
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('shipping_edit_id');
        $shipping_general_id=$request->request->get('shipping_general_id');


        $shipping_method_code=$request->request->get('shipping_method_code');


        if($edit_id=="0")
        {

            $data = array();
            $data['shipping_method_code']= $shipping_method_code;
            $data['customer_id']= $shipping_general_id;



            $query_insert = DB::table("tbl_customer_shipping")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();

                // $unique_id="CO/$inserted_company_id";

                // $result = DB::table("tbl_company")
                // ->where('id', $inserted_general_id)
                // ->update([
                //     'unique_id'=> $unique_id
                // ]);



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$shipping_general_id));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$shipping_general_id));
            }
        }
        else
        {


            $data['shipping_method_code']= $shipping_method_code;



            $result = DB::table("tbl_customer_shipping")
            ->where('id', $edit_id)
            ->update($data);

            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$shipping_general_id));


        }


    }

    function submitexporttrade(Request $request)
    {
        //die("here there");
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('export_trade_edit_id');

        //echo $edit_id;die;
        $export_trade_general_id=$request->request->get('export_trade_general_id');


        //$customer_id=$request->request->get('customer_id');
        $currency_code=$request->request->get('currency_code');
        $vat_registration_no=$request->request->get('vat_registration_no');
        $company_name=$request->request->get('company_name');
        $name_of_party=$request->request->get('name_of_party');
        $product=$request->request->get('product');
        $box_no=$request->request->get('box_no');
        $size=$request->request->get('size');
        $country=$request->request->get('country');


        if($export_trade_general_id=="0")
        {

            $data = array();
            $data['customer_id']= $export_trade_general_id;
            $data['currency_code']= $currency_code;
            $data['vat_registration_no']= $vat_registration_no;
            $data['company_name']= $company_name;
            $data['name_of_party']= $name_of_party;
            $data['product']= $product;
            $data['box_no']= $box_no;
            $data['size']= $size;
            $data['country']= $country;



            $query_insert = DB::table("tbl_customer_export_trade")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();

                // $unique_id="CO/$inserted_company_id";

                // $result = DB::table("tbl_company")
                // ->where('id', $inserted_general_id)
                // ->update([
                //     'unique_id'=> $unique_id
                // ]);



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$export_trade_general_id));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$export_trade_general_id));
            }
        }
        else
        {

            $data['customer_id']= $export_trade_general_id;
            $data['currency_code']= $currency_code;
            $data['vat_registration_no']= $vat_registration_no;
            $data['company_name']= $company_name;
            $data['name_of_party']= $name_of_party;
            $data['product']= $product;
            $data['box_no']= $box_no;
            $data['size']= $size;
            $data['country']= $country;


            $tbldata = DB::select("select count(*) as found from tbl_customer_export_trade where customer_id='".$export_trade_general_id."' ");


            foreach($tbldata as $tbldata){
                $found=$tbldata->found;
            }

            if($found>0)
            {
                $result = DB::table("tbl_customer_export_trade")
                ->where('id', $edit_id)
                ->update($data);
            }
            else
            {
                $query_insert = DB::table("tbl_customer_export_trade")->insert($data);
            }







            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$export_trade_general_id));


        }


    }


    function submittaxinformation(Request $request)
    {
        //die("here there");
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('tax_information_edit_id');

        //echo $edit_id;die;
        $tax_information_general_id=$request->request->get('tax_information_general_id');


        //$customer_id=$request->request->get('customer_id');
        $gst_no=$request->request->get('gst_no');
        $arn_no=$request->request->get('arn_no');
        $lst_no=$request->request->get('lst_no');
        $lst_no_dated=$request->request->get('lst_no_dated');
        $cst_no=$request->request->get('cst_no');
        $cst_no_dated=$request->request->get('cst_no_dated');
        $lbt_no=$request->request->get('lbt_no');


        $lbt_no_dated=$request->request->get('lbt_no_dated');
        $ecc_no=$request->request->get('ecc_no');
        $range=$request->request->get('range');
        $collectorate=$request->request->get('collectorate');
        $pan_no=$request->request->get('pan_no');
        $pan_status=$request->request->get('pan_status');


        $pan_references_no=$request->request->get('pan_references_no');
        $vat_no=$request->request->get('vat_no');
        $vat_no_dated=$request->request->get('vat_no_dated');
        $tin_no=$request->request->get('tin_no');
        $export_or_deemed_export=$request->request->get('export_or_deemed_export');
        $vat_exempted=$request->request->get('vat_exempted');
        $nature_of_service=$request->request->get('nature_of_service');

        //echo $edit_id;die;


        if($tax_information_general_id=="0")
        {

            $data = array();
            $data['customer_id']= $tax_information_general_id;
            $data['gst_no']= $gst_no;
            $data['arn_no']= $arn_no;
            $data['lst_no']= $lst_no;
            $data['lst_no_dated']= $lst_no_dated;
            $data['cst_no']= $cst_no;
            $data['cst_no_dated']= $cst_no_dated;
            $data['lbt_no']= $lbt_no;


            $data['lbt_no_dated']= $lbt_no_dated;
            $data['ecc_no']= $ecc_no;
            $data['range']= $range;
            $data['collectorate']= $collectorate;
            $data['pan_no']= $pan_no;
            $data['pan_status']= $pan_status;
            $data['pan_references_no']= $pan_references_no;
            $data['vat_no']= $vat_no;
            $data['vat_no_dated']= $vat_no_dated;
            $data['tin_no']= $tin_no;
            $data['export_or_deemed_export']= $export_or_deemed_export;
            $data['vat_exempted']= $vat_exempted;
            $data['nature_of_service']= $nature_of_service;

           //var_dump($data);die;



            $query_insert = DB::table("tbl_customer_tax_information")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();

                // $unique_id="CO/$inserted_company_id";

                // $result = DB::table("tbl_company")
                // ->where('id', $inserted_general_id)
                // ->update([
                //     'unique_id'=> $unique_id
                // ]);



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$tax_information_general_id));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$export_trade_general_id));
            }
        }
        else
        {

            $data['customer_id']= $tax_information_general_id;
            $data['gst_no']= $gst_no;
            $data['arn_no']= $arn_no;
            $data['lst_no']= $lst_no;
            $data['lst_no_dated']= $lst_no_dated;
            $data['cst_no']= $cst_no;
            $data['cst_no_dated']= $cst_no_dated;
            $data['lbt_no']= $lbt_no;


            $data['lbt_no_dated']= $lbt_no_dated;
            $data['ecc_no']= $ecc_no;
            $data['range']= $range;
            $data['collectorate']= $collectorate;
            $data['pan_no']= $pan_no;
            $data['pan_status']= $pan_status;
            $data['pan_references_no']= $pan_references_no;
            $data['vat_no']= $vat_no;
            $data['vat_no_dated']= $vat_no_dated;
            $data['tin_no']= $tin_no;
            $data['export_or_deemed_export']= $export_or_deemed_export;
            $data['vat_exempted']= $vat_exempted;
            $data['nature_of_service']= $nature_of_service;

            //var_dump($data);die;


            $tbldata = DB::select("select count(*) as found from tbl_customer_tax_information where customer_id='".$tax_information_general_id."' ");


            foreach($tbldata as $tbldata){
                $found=$tbldata->found;
            }

            if($found>0)
            {
                $result = DB::table("tbl_customer_tax_information")
                ->where('id', $edit_id)
                ->update($data);
            }
            else
            {
                $query_insert = DB::table("tbl_customer_tax_information")->insert($data);
            }







            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$tax_information_general_id));


        }


    }








    function editdeliverylocation(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_customer_delivery_location where id=$edit_id");


        foreach($tbldata as $tbldata){
            $delivery_location_id=$tbldata->id;
            $delivery_location=$tbldata->delivery_location;
            $delivery_location_gst_no=$tbldata->delivery_location_gst_no;
            $delivery_location_status=$tbldata->delivery_location_status;
        }
        echo json_encode(array('delivery_location_id'=>$delivery_location_id,'delivery_location' => $delivery_location,'delivery_location_gst_no'=>$delivery_location_gst_no,'delivery_location_status'=>$delivery_location_status,'message'=>''));
    }


    function editdcommunication(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_customer_communication where id=$edit_id");


        foreach($tbldata as $tbldata){
            $communication_id=$tbldata->id;
            $communication_name=$tbldata->communication_name;
            $communication_phone_no=$tbldata->communication_phone_no;
            $communication_email=$tbldata->communication_email;
            $communication_fax_no=$tbldata->communication_fax_no;
            $communication_set_as_default=$tbldata->communication_set_as_default;
            $communication_designation=$tbldata->communication_designation;
            $communication_department=$tbldata->communication_department;
        }
        echo json_encode(array('communication_id'=>$communication_id,'communication_name' => $communication_name,'communication_phone_no'=>$communication_phone_no,'communication_email'=>$communication_email,'communication_fax_no'=>$communication_fax_no,'communication_set_as_default'=>$communication_set_as_default,'communication_designation'=>$communication_designation,'communication_department'=>$communication_department,'message'=>''));
    }


    function editdcontact(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_customer_shipping_agent_contact where id=$edit_id");


        foreach($tbldata as $tbldata){
            $contact_id=$tbldata->id;
            $contact_person_name=$tbldata->contact_person_name;
            $contact_position=$tbldata->contact_position;
            $contact_email=$tbldata->contact_email;
            $contact_mobile=$tbldata->contact_mobile;
            $contact_is_default=$tbldata->contact_is_default;
        }
        echo json_encode(array('contact_id'=>$contact_id,'contact_person_name' => $contact_person_name,'contact_position'=>$contact_position,'contact_email'=>$contact_email,'contact_mobile'=>$contact_mobile,'contact_is_default'=>$contact_is_default,'message'=>''));
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

                    $inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();

                    $unique_id="CB/$inserted_rtgs_neft_id";

                    $result = DB::table("tbl_rtgs_neft")
                    ->where('id', $inserted_rtgs_neft_id)
                    ->update([
                        'unique_id'=> $unique_id
                    ]);
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
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'new_inserted_comp_id'=>$company_id));

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
                        $inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();

                        $unique_id="CB/$inserted_rtgs_neft_id";

                        $result = DB::table("tbl_rtgs_neft")
                        ->where('id', $inserted_rtgs_neft_id)
                        ->update([
                            'unique_id'=> $unique_id
                        ]);
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
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'new_inserted_comp_id'=>$company_id));

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


}
