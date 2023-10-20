<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class salesworkorder extends Controller
{

    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('manage_sales_work_order');

    //         if (!$acces_management->allow_access) {
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
            if (!$acces_management->allow_access) {
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
        // $data['module_id'] = '63.0';
        $list = \Helper::getPermission('so-list') ? 1 : 0;
        // if($list == 1){
            return view('salesworkorder.index');
        // }else{
        //     return redirect('/dashboard');
        // }
    }

    function submittransporter(Request $request)
    {

            $transporter_name=$request->request->get('transporter_name');
            $transporter_phone_no=$request->request->get('transporter_phone_no');
            $trasporter_address=$request->request->get('trasporter_address');
            $location=$request->request->get('location');

            $data = array();
            //$data['unique_id']= $unique_id;
            $data['transport_name']= $transporter_name;
            $data['transport_phone_no']= $transporter_phone_no;
            $data['transport_add']= $trasporter_address;
            $data['transport_location']= $location;

            // $user_id = Session::get('userdata')['user_id'];
            $user_id = auth()->id();
            $data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_transport")->insert($data);

            if($query_insert==true)
            {

                // $last_inserted_id=DB::getPdo()->lastInsertId();
                // $my_unique_id="TR/$last_inserted_id";

                // $result = DB::table("tbl_transport")
                // ->where('id', $last_inserted_id)
                // ->update([
                //     'unique_id'=> $my_unique_id
                // ]);


                $inserted_transporter_id = DB::getPdo()->lastInsertId();


                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'inserted_transporter_id'=>$inserted_transporter_id));
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

    public function salesworkorderdata(Request $request){
        $job_card_no = $request->input('job_card_no');
        $job_card_name = $request->input('job_card_name');
        $work_order_no = $request->input('work_order_no');
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $work_order_name = $request->input('work_order_name');
        $customer_name = $request->input('customer_name');
        $status = $request->input('status');

        $global_search = $request->input('global_search');

        $start = $request->input('start', 0);
        $length = $request->input('length', 10);
        $search_value = $request->input('search.value');
        // DB::enableQueryLog();

        $query = DB::table('tbl_salesworkorder AS ts')
            ->select(
                'tjc.job_card_no AS job_card_no',
                'ts.unique_id AS unique_id',
                'ts.id AS order_id',
                'ts.order_no AS job_order_no',
                'ts.order_name AS job_order_name',
                'tcg.customer_name AS customername',
                'ts.open AS open',
                'ts.sales_order_date AS sales_order_date',
                'ts.quantity AS quantity',
                'ts.po_quantity AS po_quantity'
            )
            ->leftJoin('tbl_customer_general AS tcg', 'tcg.id', '=', 'ts.customer_name')
            ->leftJoin('tbl_job_cart AS tjc', 'tjc.id', '=', 'ts.job_card_no');

            if ($job_card_no) {
                $query->where('tjc.job_card_no', 'LIKE', "%$job_card_no%");
            }
            if ($job_card_name) {
                $query->where('tjc.job_card_title', 'LIKE', "%$job_card_name%");
            }
            if ($work_order_no) {
                $query->where('ts.order_no', 'LIKE', "%$work_order_no%");
            }
            if ($work_order_name) {
                $query->where('ts.order_name', 'LIKE', "%$work_order_name%");
            }
            if ($customer_name) {
                $query->where('tcg.id', 'LIKE', "%$customer_name%");
            }
            if ($status === '0' || $status === '1' || $status === '2') {
                $query->where('ts.open', $status);
            }
            if ($from_date) {
                $query->whereDate('ts.sales_order_date', '>=', $from_date);
            }
            if ($to_date) {
                $query->whereDate('ts.sales_order_date', '<=', $to_date);
            }
            if ($global_search == 'Yes' && !empty($search_value)) {
                $query->orWhere('ts.unique_id', 'LIKE', "%$search_value%")
                    ->orWhere('ts.id', 'LIKE', "%$search_value%")
                    ->orWhere('ts.order_no', 'LIKE', "%$search_value%")
                    ->orWhere('tcg.id', 'LIKE', "%$search_value%")
                    ->orWhere('ts.open', 'LIKE', "%$search_value%")
                    ->orWhere('ts.sales_order_date', 'LIKE', "%$search_value%")
                    ->orWhere('ts.quantity', 'LIKE', "%$search_value%")
                    ->orWhere('ts.po_quantity', 'LIKE', "%$search_value%");
            }
        $totalCount = $query->count();

        $tbldata = $query->orderBy('ts.id', 'desc')
            ->offset($start)
            ->limit($length)
            ->get();

            // dd(DB::getQueryLog());

        $output = [
            "iTotalRecords" => 10,
            "iTotalDisplayRecords" => $totalCount,
            "aaData" => [],
        ];

        // $acces_management = $this->acces_management;

        foreach ($tbldata as $row) {
            $id = $row->order_id;
            $unique_id = $row->unique_id;
            $job_order_no = $row->job_order_no;
            $job_order_name = $row->job_order_name;
            $customername = $row->customername;
            $open = $row->open;
            $sales_order_date = $row->sales_order_date;
            $quantity = $row->quantity;
            $po_quantity = $row->po_quantity;
            $job_card_no = $row->job_card_no;

            if ($open == "1") {
                $open = "Open";
            } else {
                $open = "";
            }

            $rowData = [
                '<div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" name="id[]" value="' . $id . '" />
                </div>',
                $unique_id,
                $job_card_no,
                $job_order_no,
                $job_order_name,
                $customername,
                $open,
                $sales_order_date,
                $quantity,
                $po_quantity,
                "",
            ];

            $action = "";
            $edit = \Helper::getPermission('so-edit') ? 1 : 0;
            $delete = \Helper::getPermission('so-delete') ? 1 : 0;
            if ( $edit == 1 || $delete == 1) {
                if ( $edit == 1) {
                    $edit_url = url("/salesworkorderaddedit/{$id}/general");
                    $action .= '<a href="' . $edit_url . '" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit">
                        <i class="fa fa-edit" style="font-weight:normal !important;"></i>
                    </a>';
                }
                if ($delete == 1) {
                    $action .= '<a onclick="LoadDeleteDialog(' . $id . ')" style="cursor: pointer;font-weight:normal !important;" title="Delete"  class="menu-link flex-stack px-3">
                        <i class="fa fa-trash" style="color:red;"></i>
                    </a>';
                }
            } else {
                // $action .= '<button class="btn btn-sm btn-primary" type="button" aria-expanded="false">
                //     Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                // </button>';
            }

            $rowData[] = $action;
            $output['aaData'][] = $rowData;
        }


        return response()->json($output);
    }

    public function salesworkorderataformdata(Request $request)
    {
        //die("here");
        $jo_card_no=$request->request->get('jo_card_no');
        //echo $jo_card_no;die;
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

            $search_string="where ts.unique_id LIKE '%$search_value%' or ts.id LIKE '%$search_value%' or ts.order_no LIKE '%$search_value%' or tcg.customer_name LIKE '%$search_value%' or ts.open LIKE '%$search_value%' or ts.sales_order_date LIKE '%$search_value%' or ts.quantity LIKE '%$search_value%' or ts.po_quantity LIKE '%$search_value%'";
            $tbldata = DB::select("select ts.unique_id as unique_id,ts.id as order_id,ts.order_no as job_order_no,ts.order_name as job_order_name,tcg.customer_name as customername,ts.open as open,ts.sales_order_date as sales_order_date,ts.quantity as quantity,ts.po_quantity as po_quantity from tbl_salesworkorder ts left join tbl_customer_general tcg on tcg.id=ts.customer_name $search_string order by ts.id desc limit $start,$length");

            $process_count = DB::select("select count(*) as totalcount from tbl_salesworkorder ts left join tbl_customer_general tcg on tcg.id=ts.customer_name $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select ts.unique_id as unique_id,ts.id as order_id,ts.order_no as job_order_no,ts.order_name as job_order_name,tcg.customer_name as customername,ts.open as open,ts.sales_order_date as sales_order_date,ts.quantity as quantity,ts.po_quantity as po_quantity from tbl_salesworkorder ts left join tbl_customer_general tcg on tcg.id=ts.customer_name order by ts.id desc limit $start,$length");
            $process_count = DB::select("select count(*) as totalcount from tbl_salesworkorder ts");
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

        foreach($tbldata as $tbldata) {

            $id=$tbldata->order_id;
            $unique_id=$tbldata->unique_id;
            $job_order_no=$tbldata->job_order_no;
            $job_order_name=$tbldata->job_order_name;
            $customername=$tbldata->customername;
            $open=$tbldata->open;
            $sales_order_date=$tbldata->sales_order_date;
            $quantity=$tbldata->quantity;
            $po_quantity=$tbldata->po_quantity;

            if($open=="1")
            {
                $open="Open";
            }
            else
            {
                $open="";
            }




            //$company_id=$tbldata->company_id;
            //$name=$tbldata->company_name;

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
            $row[] = $unique_id;
            $row[] = $job_order_no;
            $row[] = $job_order_name;
            $row[] = $customername;
            $row[] = $open;
            $row[] = $sales_order_date;
            $row[] = $quantity;
            $row[] = $po_quantity ;
            $row[] = "";



            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';
            $action="";
            $edit = \Helper::getPermission('so-edit') ? 1 : 0;
            $delete = \Helper::getPermission('so-delete') ? 1 : 0;
            if ($edit == 1 || $delete == 1)
            {
                if($edit == 1)
                {
                    $edit_url  = url("/salesworkorderaddedit/{$id}/general");
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;" ></i></a>';
                }
                if($delete == 1)
                {
                    //$edit_url  = url("/companyaddedit/{$id}");
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;font-weight:normal !important;" title="Delete"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>';
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
        $edit = \Helper::getPermission('so-edit') ? 1 : 0;
        // $delete = \Helper::getPermission('so-delete') ? 1 : 0;
        // $acces_management = $this->acces_management;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_salesworkorder")->delete($id);
        DB::table('tbl_salesworkorder_labeling')->where('general_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteplants(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('so-edit') ? 1 : 0;
        if($edit != 1)
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


    function deleteneft(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('so-edit') ? 1 : 0;
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
            $edit = \Helper::getPermission('so-edit') ? 1 : 0;
            if($edit != 1)
            {
                $Success=0;
                $Msg="You have no access rights to delete, Contact Administrator for access rights";
                echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
            }
                foreach($id as $id) {
                    DB::table("tbl_salesworkorder")->delete($id);
                    DB::table('tbl_salesworkorder_labeling')->where('general_id', $id)->delete();
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitsalesworkorder(Request $request)
    {
        //die("here there");
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('edit_id');

        //echo $edit_id;die;

        $order_no=$request->request->get('order_no');
        $order_name=$request->request->get('order_name');
        $customer_name=$request->request->get('customer_name');
        $delivery_location=$request->request->get('delivery_location');
        $transport_option=$request->request->get('transport_option');
        $transporter_location=$request->request->get('transporter_location');
        $transport_mode=$request->request->get('transport_mode');
        $tax_structure_arr=$request->request->get('tax_structure');

        if(empty($tax_structure_arr))
        {
            $tax_structure ="";
        }
        else
        {
            $tax_structure = implode(',', $tax_structure_arr);
        }


        $freight_charges=$request->request->get('freight_charges');
        $freight_charges_before_tax=$request->request->get('freight_charges_before_tax');

        $loading_packing_charge=$request->request->get('loading_packing_charge');
        $loading_packing_charge_before_tax=$request->request->get('loading_packing_charge_before_tax');

        $insurance_charge=$request->request->get('insurance_charge');
        $insurance_charge_before_tax=$request->request->get('insurance_charge_before_tax');

        $other_charges=$request->request->get('other_charges');
        $other_charge_txt1=$request->request->get('other_charge_txt1');
        $other_charge_txt2=$request->request->get('other_charge_txt2');
        $other_charge_before_tax=$request->request->get('other_charge_before_tax');


        $transport_debit_note=$request->request->get('transport_debit_note');
        $sales_order_date=$request->request->get('sales_order_date');
        $target_delivery_date=$request->request->get('target_delivery_date');
        $po_no=$request->request->get('po_no');
        $po_date=$request->request->get('po_date');
        $transaction_category=$request->request->get('transaction_category');
        $job_card_no=$request->request->get('job_card_no');
        $job_instructions=$request->request->get('job_instructions');
        $quantity=$request->request->get('quantity');
        $quantity_unit=$request->request->get('quantity_unit');
        $po_quantity=$request->request->get('po_quantity');
        $po_quantity_unit=$request->request->get('po_quantity_unit');
        $po_qty_unit_diff_frm_so=$request->request->get('po_qty_unit_diff_frm_so');
        $width=$request->request->get('width');
        $width_unit=$request->request->get('width_unit');
        $height_length=$request->request->get('height_length');
        $height_lenght_unit=$request->request->get('height_lenght_unit');
        $unit_price=$request->request->get('unit_price');
        $unit_price_unit=$request->request->get('unit_price_unit');
        $numbers_from=$request->request->get('numbers_from');
        $numbers_to=$request->request->get('numbers_to');
        $open=$request->request->get('open');
        $dispatch_invoice_instructions=$request->request->get('dispatch_invoice_instructions');
        $discount = $request->discount;




        if($edit_id=="0")
        {

            $data = array();
            $data['order_no']= $order_no;
            $data['order_name']= $order_name;
            $data['customer_name']= $customer_name;
            $data['delivery_location']= $delivery_location;
            $data['transporter_option']= $transport_option;
            $data['transporter_location']= $transporter_location;
            $data['transporter_mode']= $transport_mode;
            $data['tax_structure']= $tax_structure;
            $data['freight_charges']= $freight_charges;
            $data['freight_charges_before_tax']= $freight_charges_before_tax;


            $data['loading_packing_charges']= $loading_packing_charge;
            $data['loading_packing_charges_before_tax']= $loading_packing_charge_before_tax;
            $data['insurance_charges']= $insurance_charge;
            $data['insurance_charges_before_tax']= $insurance_charge_before_tax;
            $data['other_charges']= $other_charges;
            $data['other_charge_before_tax']= $other_charge_before_tax;
            $data['other_charge_txt1']= $other_charge_txt1;
            $data['other_charge_txt2']= $other_charge_txt2;
            $data['transport_debit_note']= $transport_debit_note;
            $data['sales_order_date']= $sales_order_date;



            $data['target_delivery_date']= $target_delivery_date;
            $data['po_no']= $po_no;
            $data['po_date']= $po_date;
            $data['transaction_category']= $transaction_category;
            $data['job_card_no']= $job_card_no;
            $data['job_instruction']= $job_instructions;
            $data['quantity']= $quantity;
            $data['quantity_unit']= $quantity_unit;
            $data['discount'] = $discount;

            $data['po_quantity']= $po_quantity;
            $data['po_quantity_unit']= $po_quantity_unit;


            $data['po_qty_unit_diff_frm_so']= $po_qty_unit_diff_frm_so;




            $data['width']= $width;
            $data['width_unit']= $width_unit;
            $data['height_length']= $height_length;


            $data['height_length_unit']= $height_lenght_unit;
            $data['unit_price']= $unit_price;
            $data['unit_price_unit']= $unit_price_unit;


            $data['numbers_from']= $numbers_from;
            $data['numbers_to']= $numbers_to;
            $data['open']= $open;
            $data['dispatch_invoice_instructions']= $dispatch_invoice_instructions;

            $data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;



            $img_to_upload="";

            $destinationPath =base_path()."/assets/uploadimage/salesworkorder/";

            if(isset($_FILES['img']))
            {
                $img = $request->file('img');

                if($request->hasFile('img'))
                {

                    //if($file_title!="")
                    //{
                    //    $file_ext = $img->getClientOriginalExtension();

                    //    $file_size = $img->getSize();
                    //    $img_to_upload=$file_title.".".$file_ext;
                    //}
                    //else
                    //{
                        $img_to_upload=time()."_".$img->getClientOriginalName();
                        $img_to_upload_arr=explode(".",$img_to_upload);
                        $file_title=$img_to_upload_arr['0'];
                        //$img_to_upload=$general_details_id."_".$img->getClientOriginalName();
                    //}

                    $upload_success = $img->move($destinationPath, $img_to_upload);

                }

                $data['customer_order_email']= $img_to_upload;

            }

            //var_dump($data);die;


            $query_insert = DB::table("tbl_salesworkorder")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();


                $year = date('y');
                $year1 = date('y')+1;
                $unique_id="WO/$year-$year1/$inserted_general_id";

                //$unique_reference="CUS/RS/".$lastInsertId."/PR";


                //$unique_id="WO/$inserted_general_id";

                $result = DB::table("tbl_salesworkorder")
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
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$inserted_general_id));
            }
        }
        else
        {

            //echo $edit_id;die;

            $date=date("Y/m/d h:m:s");

            //var_dump($data);die;


            $data['order_no']= $order_no;
            $data['order_name']= $order_name;
            $data['customer_name']= $customer_name;
            $data['delivery_location']= $delivery_location;
            $data['transporter_option']= $transport_option;
            $data['transporter_location']= $transporter_location;
            $data['transporter_mode']= $transport_mode;
            $data['tax_structure']= $tax_structure;
            $data['freight_charges']= $freight_charges;
            $data['freight_charges_before_tax']= $freight_charges_before_tax;


            $data['loading_packing_charges']= $loading_packing_charge;
            $data['loading_packing_charges_before_tax']= $loading_packing_charge_before_tax;
            $data['insurance_charges']= $insurance_charge;
            $data['insurance_charges_before_tax']= $insurance_charge_before_tax;
            $data['other_charges']= $other_charges;
            $data['other_charge_before_tax']= $other_charge_before_tax;
            $data['other_charge_txt1']= $other_charge_txt1;
            $data['other_charge_txt2']= $other_charge_txt2;
            $data['transport_debit_note']= $transport_debit_note;
            $data['sales_order_date']= $sales_order_date;



            $data['target_delivery_date']= $target_delivery_date;
            $data['po_no']= $po_no;
            $data['po_date']= $po_date;
            $data['transaction_category']= $transaction_category;
            $data['job_card_no']= $job_card_no;
            $data['job_instruction']= $job_instructions;
            $data['quantity']= $quantity;
            $data['quantity_unit']= $quantity_unit;
            $data['discount'] = $discount;


            $data['po_quantity']= $po_quantity;
            $data['po_quantity_unit']= $po_quantity_unit;


            $data['po_qty_unit_diff_frm_so']= $po_qty_unit_diff_frm_so;




            $data['width']= $width;
            $data['width_unit']= $width_unit;
            $data['height_length']= $height_length;


            $data['height_length_unit']= $height_lenght_unit;
            $data['unit_price']= $unit_price;
            $data['unit_price_unit']= $unit_price_unit;


            $data['numbers_from']= $numbers_from;
            $data['numbers_to']= $numbers_to;
            $data['open']= $open;
            $data['dispatch_invoice_instructions']= $dispatch_invoice_instructions;


            $data['modifiedby']= $user_id;
            $data['modifieddttm']= $date;


            $img_to_upload="";

            $destinationPath =base_path()."/assets/uploadimage/salesworkorder/";

            if(isset($_FILES['img']))
            {
                $img = $request->file('img');

                if($request->hasFile('img'))
                {

                    //if($file_title!="")
                    //{
                    //    $file_ext = $img->getClientOriginalExtension();

                    //    $file_size = $img->getSize();
                    //    $img_to_upload=$file_title.".".$file_ext;
                    //}
                    //else
                    //{
                        $img_to_upload=time()."_".$img->getClientOriginalName();
                        $img_to_upload_arr=explode(".",$img_to_upload);
                        $file_title=$img_to_upload_arr['0'];
                        //$img_to_upload=$general_details_id."_".$img->getClientOriginalName();
                    //}

                    $upload_success = $img->move($destinationPath, $img_to_upload);

                }

                $data['customer_order_email']= $img_to_upload;
            }




            //var_dump($data);die;

            $result = DB::table("tbl_salesworkorder")
            ->where('id', $edit_id)
            ->update($data);





            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$edit_id));

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


    function submitlabeling(Request $request)
    {

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $general_id=$request->request->get('general_id');

        //echo $general_id;die;
        $edit_id=$request->request->get('edit_id');

        //echo $edit_id;die;


        $company_name=$request->request->get('company_name');
        $print_for=$request->request->get('print_for');
        $item=$request->request->get('item');
        $inline_text=$request->request->get('inline_text');
        $special_instruction=$request->request->get('special_instruction');

        //echo $company_id;die;

        if($edit_id=="0")
        {
            $data = array();
            $data['general_id']= $general_id;
            $data['company_name']= $company_name;
            $data['print_for']= $print_for;
            $data['item']= $item;
            $data['inline_text']= $inline_text;
            $data['special_instruction']= $special_instruction;




            // $data['addeddby']= $user_id ;
            // $date=date("Y/m/d h:m:s");
            // $data['addedddttm']= $date;


            //var_dump($data);die;


            $query_insert = DB::table("tbl_salesworkorder_labeling")->insert($data);

            if($query_insert==true)
            {

                $inserted_general_id = DB::getPdo()->lastInsertId();

                // $unique_id="swo/$inserted_company_id";

                // $result = DB::table("tbl_salesworkorder")
                // ->where('id', $inserted_company_id)
                // ->update([
                //     'unique_id'=> $unique_id
                // ]);



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
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$inserted_general_id));
            }

        }
        else
        {

            $date=date("Y/m/d h:m:s");

            $data['company_name']= $company_name;
            $data['print_for']= $print_for;
            $data['item']= $item;
            $data['inline_text']= $inline_text;
            $data['special_instruction']= $special_instruction;



            // $data['modifiedby']= $user_id;
            // $data['modifieddttm']= $date;







            //var_dump($data);die;

            $result = DB::table("tbl_salesworkorder_labeling")
            ->where('id', $edit_id)
            ->update($data);



            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_id'=>$edit_id));

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
