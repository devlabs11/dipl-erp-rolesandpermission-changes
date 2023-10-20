<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class material extends Controller
{
    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('material');
    //         //var_dump($acces_management);die;

    //         if (!$acces_management->allow_access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    // }

    function index()
    {

        //$state = DB::select("select *,tc.status as citystatus,tc.id as cityid,tc.description as citydescription,mc.description as countrydescription,ts.description as statedescription from tbl_city tc left join mst_country mc on mc.id=tc.state left join tbl_state ts on ts.id=tc.state");
        //$title = DB::table('master')->where('id' ,$id)->value('title');
        //var_dump($state);die;
        // $data['acces_management'] = $this->acces_management;
        // $data['module_id'] = '34.0';
        $list = \Helper::getPermission('mm-list') ? 1 : 0;
        if($list == 1){
            return view('material.index');
        }else{
            Redirect::to('dashboard')->send();
        }

    }


    public function materialdata()
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
            $search_string="where tm.id LIKE '%$search_value%' or tm.unique_id LIKE '%$search_value%' or tm.name LIKE '%$search_value%' or tm.description LIKE '%$search_value%' or mu.description LIKE '%$search_value%' or tpc.name LIKE '%$search_value%' or tc.name LIKE '%$search_value%'";
            $tbldata = DB::select("select tm.id as material_id,tm.unique_id as material_unique_id,tm.name as material_name,tm.description as material_description,mu.description as unit_name,tpc.name as product_category_name,tc.name as category_name from tbl_material tm left join mst_unit mu on mu.id=tm.unit left join tbl_rm_product_category tpc on tpc.id=tm.rm_product_category left join tbl_rm_category tc on tc.id=tm.rm_category $search_string order by tm.id desc limit $start,$length");

            $user_count = DB::select("select count(*) as totalcount from tbl_material tm left join mst_unit mu on mu.id=tm.unit left join tbl_rm_product_category tpc on tpc.id=tm.rm_product_category left join tbl_rm_category tc on tc.id=tm.rm_category $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select tm.id as material_id,tm.unique_id as material_unique_id,tm.name as material_name,tm.description as material_description,mu.description as unit_name,tpc.name as product_category_name,tc.name as category_name from tbl_material tm left join mst_unit mu on mu.id=tm.unit left join tbl_rm_product_category tpc on tpc.id=tm.rm_product_category left join tbl_rm_category tc on tc.id=tm.rm_category order by tm.id desc limit $start,$length");
            $user_count = DB::select("select count(*) as totalcount from tbl_material tm left join mst_unit mu on mu.id=tm.unit left join tbl_rm_product_category tpc on tpc.id=tm.rm_product_category left join tbl_rm_category tc on tc.id=tm.rm_category");
        }




        foreach($user_count as $user_count) {
            $totalcount=$user_count->totalcount;
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
        $create = \Helper::getPermission('mm-create') ? 1 : 0;
        $edit = \Helper::getPermission('mm-edit') ? 1 : 0;
        $delete = \Helper::getPermission('mm-delete') ? 1 : 0;
        foreach($tbldata as $tbldata) {

            //var_dump($tbldata);die;
            $id=$tbldata->material_id;
            $material_unique_id=$tbldata->material_unique_id;

            //$sales_person=$tbldata->sales_person;
            $rm_category=$tbldata->category_name;
            $rm_product_category=$tbldata->product_category_name;
            $name=$tbldata->material_name;
            $description=$tbldata->material_description;
            $unit=$tbldata->unit_name;
            //$opening_balance=$tbldata->opening_balance;
            //$hs_code=$tbldata->hs_code;
            //$addedddttm=date_create($addedddttm);
            //$addedddttm=date_format($addedddttm,"m-d-Y");


            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $id;
            $row[] = $material_unique_id;
            $row[] = $rm_category;
            $row[] = $rm_product_category;
            $row[] = $name;
            $row[] = $description;
            $row[] = $unit;





            // <a href="'.$duplicate_url.'" class="menu-link flex-stack px-3">DUPLICATE</a><br/>
            $action="";

            //var_dump($acces_management);die;
            if ($edit OR $delete OR $create)
            {
                if($edit)
                {
                    $edit_url  = url("/materialaddedit/{$id}");
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" title="Edit" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
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
        // $create = \Helper::getPermission('mm-create') ? 1 : 0;
        // $edit = \Helper::getPermission('mm-edit') ? 1 : 0;
        $delete = \Helper::getPermission('mm-delete') ? 1 : 0;
        if( $delete != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }
        $id=$request->request->get('id');

        DB::table("tbl_material")->delete($id);
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

                $result = DB::table('tbl_quotation')
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

                $result = DB::table('tbl_quotation')
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
                    DB::table("tbl_material")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }


    function duplicatequotation(Request $request)
    {

        $edit_id=$request->request->get('edit_id');
        $sales_person=$request->request->get('sales_person');
        $comp_name_add=$request->request->get('comp_name_add');
        $attention_of=$request->request->get('attention_of');
        $quotation_date=$request->request->get('quotation_date');
        $subject=$request->request->get('subject');
        $reference=$request->request->get('reference');
        $quote_type=$request->request->get('quote_type');
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        //echo $user_id;die;



        $discharge_point_term=$request->request->get('discharge_point_term');

        $discharge_point_term_checkbox=0;
        if(isset($_POST['discharge_point_term_checkbox']))
        {
            $discharge_point_term_checkbox=$request->request->get('discharge_point_term_checkbox');
        }

        $installation_charge=$request->request->get('installation_charge');

        $installation_charge_checkbox=0;
        if(isset($_POST['installation_charge_checkbox']))
        {
            $installation_charge_checkbox=$request->request->get('installation_charge_checkbox');
        }

        $warranty=$request->request->get('warranty');

        $warranty_checkbox=0;
        if(isset($_POST['warranty_checkbox']))
        {
            $warranty_checkbox=$request->request->get('warranty_checkbox');
        }

        $training=$request->request->get('training');


        $training_checkbox=0;
        if(isset($_POST['training_checkbox']))
        {
            $training_checkbox=$request->request->get('training_checkbox');
        }

        $bank_charges=$request->request->get('bank_charges');

        $bank_charges_checkbox=0;
        if(isset($_POST['bank_charges_checkbox']))
        {
            $bank_charges_checkbox=$request->request->get('bank_charges_checkbox');
        }

        $sampling_charges=$request->request->get('sampling_charges');

        $sampling_charges_checkbox=0;
        if(isset($_POST['sampling_charges_checkbox']))
        {
            $sampling_charges_checkbox=$request->request->get('sampling_charges_checkbox');
        }

        $lchandling_charges=$request->request->get('lchandling_charges');

        $lchandling_charges_checkbox=0;
        if(isset($_POST['lchandling_charges_checkbox']))
        {
            $lchandling_charges_checkbox=$request->request->get('lchandling_charges_checkbox');
        }

        $cancellation_of_order_charge=$request->request->get('cancellation_of_order_charge');

        $cancellation_of_order_charge_checkbox=0;
        if(isset($_POST['cancellation_of_order_charge_checkbox']))
        {
            $cancellation_of_order_charge_checkbox=$request->request->get('cancellation_of_order_charge_checkbox');
        }

        $delivery_point=$request->request->get('delivery_point');

        $delivery_point_checkbox=0;
        if(isset($_POST['delivery_point_checkbox']))
        {
            $delivery_point_checkbox=$request->request->get('delivery_point_checkbox');
        }

        $packing=$request->request->get('packing');

        $packing_checkbox=0;
        if(isset($_POST['packing_checkbox']))
        {
            $packing_checkbox=$request->request->get('packing_checkbox');
        }

        $payment_term=$request->request->get('payment_term');

        $payment_term_checkbox=0;
        if(isset($_POST['payment_term_checkbox']))
        {
            $payment_term_checkbox=$request->request->get('payment_term_checkbox');
        }

        $validity_of_quotation=$request->request->get('validity_of_quotation');

        $validity_of_quotation_checkbox=0;
        if(isset($_POST['validity_of_quotation_checkbox']))
        {
            $validity_of_quotation_checkbox=$request->request->get('validity_of_quotation_checkbox');
        }

        $documents=$request->request->get('documents');

        $documents_checkbox=0;
        if(isset($_POST['documents_checkbox']))
        {
            $documents_checkbox=$request->request->get('documents_checkbox');
        }

        $jurisdiction=$request->request->get('jurisdiction');

        $jurisdiction_checkbox=0;
        if(isset($_POST['jurisdiction_checkbox']))
        {
            $jurisdiction_checkbox=$request->request->get('jurisdiction_checkbox');
        }

        $statutory_clause=$request->request->get('statutory_clause');

        $statutory_clause_checkbox=0;
        if(isset($_POST['statutory_clause_checkbox']))
        {
            $statutory_clause_checkbox=$request->request->get('statutory_clause_checkbox');
        }

        $tax=$request->request->get('tax');

        $tax_checkbox=0;
        if(isset($_POST['tax_checkbox']))
        {
            $tax_checkbox=$request->request->get('tax_checkbox');
        }

        $excise=$request->request->get('excise');

        $excise_checkbox=0;
        if(isset($_POST['excise_checkbox']))
        {
            $excise_checkbox=$request->request->get('excise_checkbox');
        }

        $lbt=$request->request->get('lbt');

        $lbt_checkbox=0;
        if(isset($_POST['lbt_checkbox']))
        {
            $lbt_checkbox=$request->request->get('lbt_checkbox');
        }

        $freight=$request->request->get('freight');

        $freight_checkbox=0;
        if(isset($_POST['freight_checkbox']))
        {
            $freight_checkbox=$request->request->get('freight_checkbox');
        }

        $delivery=$request->request->get('delivery');

        $delivery_checkbox=0;
        if(isset($_POST['delivery_checkbox']))
        {
            $delivery_checkbox=$request->request->get('delivery_checkbox');
        }

        $prices=$request->request->get('prices');

        $prices_checkbox=0;
        if(isset($_POST['prices_checkbox']))
        {
            $prices_checkbox=$request->request->get('prices_checkbox');
        }



        $othercharges=$request->request->get('othercharges');

        $othercharges_checkbox=0;
        if(isset($_POST['othercharges_checkbox']))
        {
            $othercharges_checkbox=$request->request->get('othercharges_checkbox');
        }



        $tds=$request->request->get('tds');

        $tds_checkbox=0;
        if(isset($_POST['tds_checkbox']))
        {
            $tds_checkbox=$request->request->get('tds_checkbox');
        }



        $note=$request->request->get('note');

        $rows=$request->request->get('rows');

        //echo $rows;die;
        $columns=$request->request->get('columns');


        //$tbl='state';


        $data = array();
        $data['sales_person']= $sales_person;
        $data['comp_name_add']= $comp_name_add;
        $data['attention_of']= $attention_of;
        $data['quotation_date']= $quotation_date;
        $data['subject']= $subject;

        $data['discharge_point_term']= $discharge_point_term;
        $data['discharge_point_term_checkbox']= $discharge_point_term_checkbox;

        $data['installation_charge']= $installation_charge;
        $data['installation_charge_checkbox']= $installation_charge_checkbox;

        $data['warranty']= $warranty;
        $data['warranty_checkbox']= $warranty_checkbox;

        $data['training']= $training;
        $data['training_checkbox']= $training_checkbox;

        $data['bank_charges']= $bank_charges;
        $data['bank_charges_checkbox']= $bank_charges_checkbox;

        $data['sampling_charges']= $sampling_charges;
        $data['sampling_charges_checkbox']= $sampling_charges_checkbox;

        $data['lchandling_charges']= $lchandling_charges;
        $data['lchandling_charges_checkbox']= $lchandling_charges_checkbox;

        $data['cancellation_of_order_charge']= $cancellation_of_order_charge;
        $data['cancellation_of_order_charge_checkbox']= $cancellation_of_order_charge_checkbox;

        $data['delivery_point']= $delivery_point;
        $data['delivery_point_checkbox']= $delivery_point_checkbox;

        $data['packing']= $packing;
        $data['packing_checkbox']= $packing_checkbox;

        $data['payment_term']= $payment_term;
        $data['payment_term_checkbox']= $payment_term_checkbox;

        $data['validity_of_quotation']= $validity_of_quotation;
        $data['validity_of_quotation_checkbox']= $validity_of_quotation_checkbox;

        $data['documents']= $documents;
        $data['documents_checkbox']= $documents_checkbox;

        $data['jurisdiction']= $jurisdiction;
        $data['jurisdiction_checkbox']= $jurisdiction_checkbox;

        $data['statutory_clause']= $statutory_clause;
        $data['statutory_clause_checkbox']= $statutory_clause_checkbox;

        $data['tax']= $tax;
        $data['tax_checkbox']= $tax_checkbox;

        $data['excise']= $excise;
        $data['excise_checkbox']= $excise_checkbox;

        $data['lbt']= $lbt;
        $data['lbt_checkbox']= $lbt_checkbox;

        $data['freight']= $freight;
        $data['freight_checkbox']= $freight_checkbox;

        $data['delivery']= $delivery;
        $data['delivery_checkbox']= $delivery_checkbox;

        $data['prices']= $prices;
        $data['prices_checkbox']= $prices_checkbox;

        $data['othercharges']= $othercharges;
        $data['othercharges_checkbox']= $othercharges_checkbox;

        $data['tds']= $tds;
        $data['tds_checkbox']= $tds_checkbox;

        $data['note']= $note;
        $data['reference']= $reference;
        $data['quote_type']= $quote_type;
        $data['rows']= $rows;
        $data['columns']= $columns;



        $data['addeddby']= $user_id;
        $date=date("Y/m/d h:m:s");
        $data['addedddttm']= $date;


        $query_insert = DB::table("tbl_quotation")->insert($data);



        if($query_insert==true)
        {
            $lastInsertId = DB::getPdo()->lastInsertId();
            //$lastInsertId = DB::table('tbl_quotation')->insertGetId($data);

            //echo $lastInsertId;die;

            for ($i = 0; $i < $columns; $i++)
            {
                //echo 'td_width_'.$i;die;
                $width=$request->request->get('td_width_'.$i);

                //$width.=$width;
                $column_id=$i;
                $quotation_id=$lastInsertId;

                $widthdata['quotation_id']= $quotation_id;
                $widthdata['column_id']= $column_id;
                $widthdata['width']= $width;

                //var_dump($widthdata);die;

                $query_insert = DB::table("quotation_width_mapping")->insert($widthdata);

                /*if($query_insert==true)
                {
                    $message="Record inserted successfully.";
                    $alert_type="succ";
                    $mode="add";
                    $url="";
                    echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
                }
                else
                {
                    $message="Quotation inserted successfully but error occure while you are trying to insert width information.";
                    $alert_type="err";
                    $mode="add";
                    $url="";
                    echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
                }*/
                //var_dump($query_insert);die;
            }

            //die("here");

            //var_dump($_POST['data']);die;
            foreach($_POST['data'] as $key=>$value) {

                foreach( $value as $keyItem => $valKey)
                {
                    $details=$valKey;

                    $detailsdata['quotation_id']= $lastInsertId;
                    $detailsdata['column_id']= substr($keyItem, 1, -1);
                    $detailsdata['row_id']= substr($key, 1, -1);
                    $detailsdata['description']= $details;

                    //var_dump($detailsdata);die;

                    $query_insert = DB::table("quotation_invoice_details")->insert($detailsdata);
                    //echo $keyItem ." : ".$valKey."</br>";
                }
                //echo "<br/>";
            }

            //die("here");


            /*for ($i = 0; $i < $rows; $i++)
            {
                for ($j = 0; $j < $columns; $j++)
                {
                    $details=$request->request->get('data_'.$i.$j);



                    $detailsdata['quotation_id']= $quotation_id;
                    $detailsdata['column_id']= $j;
                    $detailsdata['row_id']= $i;
                    $detailsdata['description']= $details;

                    //var_dump($widthdata);die;

                    $query_insert = DB::table("quotation_invoice_details")->insert($detailsdata);
                    //var_dump($query_insert);die;
                }
            }*/


            //var_dump($width);die;

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

    function submitmaterial(Request $request)
    {
        //print_r($_POST);die;
        $max_id_result=DB::table("tbl_material")->max('id');
        $max_id_result=$max_id_result+1;
        $edit_id=$request->request->get('edit_id');
        $rm_category=$request->request->get('rm_category');
        $rm_product_category=$request->request->get('rm_product_category');
        $material_name=$request->request->get('material_name');
        $description=$request->request->get('description');
        $unit=$request->request->get('unit');
        $opening_balance=$request->request->get('opening_balance');
        $hs_code=$request->request->get('hs_code');

        $box_width=$request->request->get('box_width');
        $box_width_unit=$request->request->get('box_width_unit');
        $box_height=$request->request->get('box_height');
        $box_height_unit=$request->request->get('box_height_unit');
        $box_length=$request->request->get('box_length');
        $box_length_unit=$request->request->get('box_length_unit');
        $box_color=$request->request->get('box_color');
        $box_special=$request->request->get('box_special');


        $bag_width=$request->request->get('bag_width');
        $bag_width_unit=$request->request->get('bag_width_unit');
        $bag_height=$request->request->get('bag_height');
        $bag_height_unit=$request->request->get('bag_height_unit');
        $bag_color=$request->request->get('bag_color');
        $bag_special=$request->request->get('bag_special');


        $paper_width=$request->request->get('paper_width');
        $paper_width_unit=$request->request->get('paper_width_unit');
        $paper_diameter =$request->request->get('paper_diameter');
        $paper_diameter_unit=$request->request->get('paper_diameter_unit');
        $paper_special=$request->request->get('paper_special');

        $core_width=$request->request->get('core_width');
        $core_width_unit=$request->request->get('core_width_unit');
        $core_daimeter =$request->request->get('core_daimeter');
        $core_daimeter_unit=$request->request->get('core_daimeter_unit');
        $core_special=$request->request->get('core_special');


        $chemical_make=$request->request->get('chemical_make');
        $chemical_type=$request->request->get('chemical_type');
        $chemical_special=$request->request->get('chemical_special');


        $paper2_papermake=$request->request->get('paper2_papermake');
        $paper2_width=$request->request->get('paper2_width');
        $paper2_width_unit=$request->request->get('paper2_width_unit');
        $paper2_colour=$request->request->get('paper2_colour');
        $paper2_gsm=$request->request->get('paper2_gsm');
        $paper2_carbonslide=$request->request->get('paper2_carbonslide');
        $paper2_special=$request->request->get('paper2_special');
        $paper2_hs_code=$request->request->get('paper2_hs_code');
        $paper2_formate=$request->request->get('paper2_formate');

        $ink_make=$request->request->get('ink_make');

        //echo $ink_ink_make;die;

        $ink_type=$request->request->get('ink_type');
        $ink_color=$request->request->get('ink_color');
        $ink_special=$request->request->get('ink_special');


        $printed_product_height=$request->request->get('printed_product_height');
        $printed_product_height_unit=$request->request->get('printed_product_height_unit');
        $printed_product_width=$request->request->get('printed_product_width');
        $printed_product_width_unit=$request->request->get('printed_product_width_unit');
        $printed_product_part_no=$request->request->get('printed_product_part_no');


        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();



        $data = array();

        //$data['unique_id']= $unique_id;
        $data['rm_category']= $rm_category;
        $data['rm_product_category']= $rm_product_category;
        $data['name']= $material_name;
        $data['description']= $description;
        $data['unit']= $unit;
        $data['opening_balance']= $opening_balance;
        $data['hs_code']= $hs_code;

        $data['box_width']= $box_width;
        $data['box_width_unit']= $box_width_unit;
        $data['box_height']= $box_height;
        $data['box_height_unit']= $box_height_unit;
        $data['box_length']= $box_length;
        $data['box_length_unit']= $box_length_unit;
        $data['box_color']= $box_color;
        $data['box_special']= $box_special;

        $data['bag_width']= $bag_width;
        $data['bag_width_unit']= $bag_width_unit;
        $data['bag_height']= $bag_height;
        $data['bag_height_unit']= $bag_height_unit;
        $data['bag_color']= $bag_color;
        $data['bag_special']= $bag_special;


        $data['paper_width']= $paper_width;
        $data['paper_width_unit']= $paper_width_unit;
        $data['paper_diameter']= $paper_diameter;
        $data['paper_diameter_unit']= $paper_diameter_unit;
        $data['paper_special']= $paper_special;


        $data['core_width']= $core_width;
        $data['core_width_unit']= $core_width_unit;
        $data['core_daimeter']= $core_daimeter;
        $data['core_daimeter_unit']= $core_daimeter_unit;
        $data['core_special']= $core_special;


        $data['chemical_make']= $chemical_make;
        $data['chemical_type']= $chemical_type;
        $data['chemical_special']= $chemical_special;


        $data['paper2_papermake']= $paper2_papermake;
        $data['paper2_width']= $paper2_width;
        $data['paper2_width_unit']= $paper2_width_unit;
        $data['paper2_colour']= $paper2_colour;
        $data['paper2_gsm']= $paper2_gsm;
        $data['paper2_carbonslide']= $paper2_carbonslide;
        $data['paper2_special']= $paper2_special;
        $data['paper2_hs_code']= $paper2_hs_code;
        $data['paper2_formate']= $paper2_formate;

        $data['ink_make']= $ink_make;
        $data['ink_type']= $ink_type;
        $data['ink_color']= $ink_color;
        $data['ink_special']= $ink_special;

        $data['printed_product_height']= $printed_product_height;
        $data['printed_product_height_unit']= $printed_product_height_unit;
        $data['printed_product_width']= $printed_product_width;
        $data['printed_product_width_unit']= $printed_product_width_unit;
        $data['printed_product_part_no']= $printed_product_part_no;

        if($edit_id=="0")
        {

            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_material")->insert($data);


            //echo $query_insert;die;

            if($query_insert==true)
            {
                $lastInsertId = DB::getPdo()->lastInsertId();

                $unique_id="RM/$lastInsertId";

                $result = DB::table("tbl_material")
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
            $result = DB::table("tbl_material")
            ->where('id', $edit_id)
            ->update([
                'rm_category'=> $rm_category,
                'rm_product_category'=> $rm_product_category,
                'name'=> $material_name,
                'description'=> $description,
                'unit'=> $unit,
                'opening_balance'=> $opening_balance,
                'hs_code'=> $hs_code,
                'box_height'=> $box_height,
                'box_height_unit'=> $box_height_unit,
                'box_width'=> $box_width,
                'box_width_unit'=> $box_width_unit,
                'box_length'=> $box_length,
                'box_length_unit'=> $box_length_unit,
                'box_color'=> $box_color,
                'box_special'=> $box_special,
                'bag_height'=> $bag_height,
                'bag_height_unit'=> $bag_height_unit,
                'bag_width'=> $bag_width,
                'bag_width_unit'=> $bag_width_unit,
                'bag_color'=> $bag_color,
                'bag_special'=> $bag_special,
                'paper_width'=> $paper_width,
                'paper_width_unit'=> $paper_width_unit,
                'paper_diameter'=> $paper_diameter,
                'paper_diameter_unit'=> $paper_diameter_unit,
                'paper_special'=> $paper_special,
                'core_width'=> $core_width,
                'core_width_unit'=> $core_width_unit,
                'core_daimeter'=> $core_daimeter,
                'core_daimeter_unit'=> $core_daimeter_unit,
                'core_special'=> $core_special,
                'chemical_make'=> $chemical_make,
                'chemical_type'=> $chemical_type,
                'chemical_special'=> $chemical_special,
                'paper2_papermake'=> $paper2_papermake,
                'paper2_width'=> $paper2_width,
                'paper2_width_unit'=> $paper2_width_unit,
                'paper2_colour'=> $paper2_colour,
                'paper2_gsm'=> $paper2_gsm,
                'paper2_carbonslide'=> $paper2_carbonslide,
                'paper2_special'=> $paper2_special,
                'paper2_hs_code'=> $paper2_hs_code,
                'paper2_formate'=> $paper2_formate,
                'ink_make'=> $ink_make,
                'ink_type'=> $ink_type,
                'ink_color'=> $ink_color,
                'ink_special'=> $ink_special,
                'printed_product_height'=> $printed_product_height,
                'printed_product_height_unit'=> $printed_product_height_unit,
                'printed_product_width'=> $printed_product_width,
                'printed_product_width_unit'=> $printed_product_width_unit,
                'printed_product_part_no'=> $printed_product_part_no,
                'modifiedby'=>$user_id,
                'modifieddttm'=>$date,
            ]);

            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));


        }


    }

    function deletetbldata(Request $request)
    {


        $id=$request->request->get('id');
        $id = rtrim($id, ", ");
        $idarr = explode(',', $id);

        foreach($idarr as $key=>$value) {
            DB::table("quotation_invoice_details")->delete($value);
        }

        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
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

    function validateusername(Request $request)
    {
        $status = "false";

        $username=$request->request->get('username');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_user where username='".$username."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_user where username='".$username."' and id!='".$edit_id."'");
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

    function ajax_populate_rm_product_category(Request $request)
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
                $whereClause =  " name LIKE '%" . $getVar ."%' ";
                $limit = 'LIMIT '.intval($_GET['page_limit']);
            }
            elseif(isset($_GET['id']))
            {
                $getVar = strip_tags(trim($_GET['id']));
                $whereClause =  " id = $getVar ";
            }

            $query = "SELECT id,name FROM tbl_rm_product_category WHERE  $whereClause ORDER BY description $limit";
            $result = DB::select($query);
            //var_dump($result);die;
            //$output = $result->result_array();
            $resultdata = array();
            foreach ($result as $resultdata) {
                //print_r($resultdata);die;
                $row_array['id'] = $resultdata->id;
                $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->name)));
                array_push($return_arr,$row_array);
            }
        }
        else if(isset($_GET['selected_rm_category']))
        {
            $query = "SELECT id,name FROM tbl_rm_product_category WHERE rmcategory='".$_GET['selected_rm_category']."' ORDER BY name";
            $result = DB::select($query);
            //var_dump($result);die;
            //$output = $result->result_array();
            $resultdata = array();
            foreach ($result as $resultdata) {
                $row_array['id'] = $resultdata->id;
                $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->name)));
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




}
