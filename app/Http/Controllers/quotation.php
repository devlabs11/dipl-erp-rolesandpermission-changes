<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class quotation extends Controller
{
    function index()
    {

        // $data['acces_management'] = $this->acces_management;
        // $data['module_id'] = '11.0';
        $list = \Helper::getPermission('old-quotations-list') ? 1 : 0;
        if($list == 1){
            return view('quotation.index');
        }else{
            return redirect('/dashboard');
        }
    }


    public function quotationdata()
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
            $search_string="where tq.unique_id LIKE '%$search_value%' or tq.attention_of LIKE '%$search_value%' or tq.addedddttm LIKE '%$search_value%' or tu.fullname LIKE '%$search_value%' or tq.id LIKE '%$search_value%' or tq.sales_person LIKE '%$search_value%' or tq.comp_name_add LIKE '%$search_value%' or tq.quotation_date LIKE '%$search_value%' or tq.subject LIKE '%$search_value%' ";
            $tbldata = DB::select("select tq.unique_id as unique_id,tq.attention_of as attention_of,tq.addedddttm as addedddttm,tq.quote_type as quote_type,tu.fullname as createdbyname,tq.id as quotationid,tq.sales_person as sales_person,tq.comp_name_add as comp_name_add,tq.quotation_date as quotation_date,tq.subject as subject from tbl_quotation tq left join tbl_user tu on tu.id=tq.addeddby $search_string order by tq.id desc limit $start,$length");

            $user_count = DB::select("select count(*) as totalcount from tbl_quotation tq left join tbl_user tu on tu.id=tq.addeddby $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select tq.unique_id as unique_id,tq.attention_of as attention_of,tq.addedddttm as addedddttm,tq.quote_type as quote_type,tu.fullname as createdbyname,tq.id as quotationid,tq.sales_person as sales_person,tq.comp_name_add as comp_name_add,tq.quotation_date as quotation_date,tq.subject as subject from tbl_quotation tq left join tbl_user tu on tu.id=tq.addeddby order by tq.id desc limit $start,$length");
            $user_count = DB::select("select count(*) as totalcount from tbl_quotation");
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

        foreach($tbldata as $tbldata) {

            //var_dump($tbldata);die;
            $id=$tbldata->quotationid;
            $unique_id=$tbldata->unique_id;
            //$sales_person=$tbldata->sales_person;
            $createdbyname=$tbldata->createdbyname;
            $comp_name_add=$tbldata->comp_name_add;
            $quotation_date=$tbldata->quotation_date;
            $subject=$tbldata->subject;
            $quote_type=$tbldata->quote_type;

            $attention_of=$tbldata->attention_of;
            $addedddttm=$tbldata->addedddttm;
            $addedddttm=date_create($addedddttm);
            $addedddttm=date_format($addedddttm,"m-d-Y");


            if($quote_type=="1")
            {
                $quote_type_name="OLD";
            }
            if($quote_type=="2")
            {
                $quote_type_name="Export";
            }
            if($quote_type=="3")
            {
                $quote_type_name="Local";
            }
            if($quote_type=="4")
            {
                $quote_type_name="AMC";
            }
            //$quote_type_name=$tbldata->quote_type_name;


            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $unique_id;
            $row[] = $addedddttm;
            $row[] = $comp_name_add;
            $row[] = $subject;
            $row[] = $attention_of;
            $row[] = $createdbyname;





            // <a href="'.$duplicate_url.'" class="menu-link flex-stack px-3">DUPLICATE</a><br/>
            $action="";

            $edit = \Helper::getPermission('old-quotations-edit') ? 1 : 0;
            $delete = \Helper::getPermission('old-quotations-delete') ? 1 : 0;
            // $view = \Helper::getPermission('jc-view') ? 1 : 0;
            $duplicate = \Helper::getPermission('old-quotations-duplicate') ? 1 : 0;
            $pdfHF = \Helper::getPermission('old-quotations-pdf') ? 1 : 0;
            $pdf = \Helper::getPermission('old-quotations-view') ? 1 : 0;
            //var_dump($acces_management);die;
            if ($edit == 1 || $delete == 1 || $duplicate == 1 ||  $pdfHF == 1 || $pdf == 1)
            {
                if($edit == 1)
                {
                    $edit_url  = url("/quotationaddedit/{$id}");
                    $action.='<a href="'.$edit_url.'" title="Edit" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                }
                if($delete == 1)
                {
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" title="Delete" style="cursor: pointer;font-weight:normal !important;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }
                if( $pdfHF == 1 || $pdf == 1)
                {
                    if($pdf == 1 && $pdfHF == 1 )
                    {
                        $pdf_url  = url("/generatePDF/{$id}");
                        $hfpdf_url  = url("/generatePDFwithhf/{$id}");
                        $action.='<a href="'.$pdf_url.'" title="Print" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-print"></i></a>
                        <a href="'.$hfpdf_url.'" class="menu-link flex-stack px-3" title="Print With HF" style="font-weight:normal !important;"><i class="fa fa-file-pdf-o"></i></a>';
                    }
                    else if($pdf == 1)
                    {
                        $pdf_url  = url("/generatePDF/{$id}");
                        //$hfpdf_url  = url("/generatePDFwithhf/{$id}");
                        $action.='<a href="'.$pdf_url.'" title="Print" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-print" ></i></a>';
                    }
                    else
                    {
                        //$pdf_url  = url("/generatePDF/{$id}");
                        $hfpdf_url  = url("/generatePDFwithhf/{$id}");
                        $action.='<a href="'.$hfpdf_url.'" title="Print With HF" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-file-pdf-o" ></i></a>';
                    }
                }
                if($duplicate == 1)
                {
                    $duplicate_url  = url("/quotationduplicate/{$id}");
                    $action.='<a href="'.$duplicate_url.'" title="Duplicate" class="menu-link flex-stack px-3" style="font-weight:normal !important;"><i class="fa fa-copy" ></i></a>';
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
        $edit = \Helper::getPermission('old-quotations-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }
        $id=$request->request->get('id');

        DB::table("tbl_quotation")->delete($id);
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
                    DB::table("tbl_quotation")->delete($id);
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

        //die("here");
        $max_id_result=DB::table('tbl_quotation')->max('id');
        $max_id_result=$max_id_result+1;
        $unique_reference="CUS/RS/".$max_id_result."/PR";

        $year = date('y');
		$year1 = date('y')+1;
		$unique_id="QU/$year-$year1/$max_id_result";


        $edit_id=$request->request->get('edit_id');
        $sales_person=$request->request->get('sales_person');
        $company=$request->request->get('company');
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
        $data['company']= $company;
        $data['unique_id']= $unique_id;

        $data['unique_reference']= $unique_reference;
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
        //$data['rows']= $rows;
        $data['rows']= sizeof($_POST['data']);
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

                    if($quote_type=="5")
                    {

                        $keyItem=trim($keyItem,"'");
                        $key=trim($key,"'");
                        $detailsdata['column_id']= $keyItem;
                        $detailsdata['row_id']= $key;

                        // if(strpos("'", $keyItem) > 0 )
                        // {


                        //     $newkeyitem=substr($keyItem, 1, -1);
                        //     $detailsdata['column_id']= trim(substr($newkeyitem, 1, -1),"'");

                        //     $newkey=substr($key, 1, -1);
                        //     $detailsdata['row_id']= trim(substr($newkey, 1, -1),"'");
                        // }
                        // else
                        // {
                        //     $detailsdata['column_id']= $keyItem;
                        //     $detailsdata['row_id']= $key;
                        // }

                    }
                    else
                    {
                        $keyItem=trim($keyItem,"'");
                        $key=trim($key,"'");
                        $detailsdata['column_id']= $keyItem;
                        $detailsdata['row_id']= $key;
                        // if(strpos("'", $keyItem) > 0 OR strpos('"', $keyItem) > 0)
                        // {
                        //     $newkeyitem=substr($keyItem, 1, -1);
                        //     $detailsdata['column_id']= trim(substr($newkeyitem, 1, -1),"'");

                        //     $newkey=substr($key, 1, -1);
                        //     $detailsdata['row_id']= trim(substr($newkey, 1, -1),"'");
                        // }
                        // else
                        // {
                        //     $detailsdata['column_id']= $keyItem;
                        //     $detailsdata['row_id']= $key;
                        // }
                    }



                    $detailsdata['description']= $details;

                    //var_dump($detailsdata);die;

                    $query_insert = DB::table("quotation_invoice_details")->insert($detailsdata);
                    //echo $keyItem ." : ".$valKey."</br>";
                }

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

    function submitquotation(Request $request)
    {


        $edit_id=$request->request->get('edit_id');
        $company=$request->request->get('company');
        $sales_person=$request->request->get('sales_person');
        $comp_name_add=$request->request->get('comp_name_add');
        $attention_of=$request->request->get('attention_of');
        $quotation_date=$request->request->get('quotation_date');
        $subject=$request->request->get('subject');
        $reference=$request->request->get('reference');
        $quote_type=$request->request->get('quote_type');
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();



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

        //echo $columns;die;

        //$tbl='state';


        $data = array();
        $data['sales_person']= $sales_person;
        $data['company']= $company;
        //$data['unique_reference']= $unique_reference;

        //$data['unique_id']= $unique_id;

        //var_dump($data);die;


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

        $data['tds']= $tds;
        $data['tds_checkbox']= $tds_checkbox;

        $data['othercharges']= $othercharges;
        $data['othercharges_checkbox']= $othercharges_checkbox;

        $data['note']= $note;
        $data['reference']= $reference;
        $data['quote_type']= $quote_type;
        //$data['rows']= $rows;
        $data['rows']=sizeof($_POST['data']);
        $data['columns']= $columns;

        if($edit_id=="0")
        {

            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_quotation")->insert($data);


            //echo $query_insert;die;

            if($query_insert==true)
            {
                $lastInsertId = DB::getPdo()->lastInsertId();

                //$max_id_result=DB::table('tbl_quotation')->max('id');
                //$max_id_result=$max_id_result+1;



                $year = date('y');
                $year1 = date('y')+1;
                $unique_id="QU/$year-$year1/$lastInsertId";

                $unique_reference="CUS/RS/".$lastInsertId."/PR";


                $result = DB::table("tbl_quotation")
                ->where('id', $lastInsertId)
                ->update([
                    'unique_id'=> $unique_id,
                    'unique_reference'=> $unique_reference
                ]);


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

                    $quotation_width_mapping = DB::table("quotation_width_mapping")->insert($widthdata);

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


                foreach($_POST['data'] as $key=>$value) {

                    //echo $key;
                    //echo "<br/>";
                    foreach( $value as $keyItem => $valKey)
                    {
                        $details=$valKey;

                        $detailsdata['quotation_id']= $quotation_id;
                        $detailsdata['column_id']= $keyItem;
                        $detailsdata['row_id']= $key;
                        $detailsdata['description']= $details;

                        //var_dump($widthdata);die;

                        $query_insert = DB::table("quotation_invoice_details")->insert($detailsdata);
                        //echo $keyItem ." : ".$valKey."</br>";
                    }
                    //echo "<br/>";
                }
                //die;


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
        else
        {
            $date=date("Y/m/d h:m:s");
            $result = DB::table("tbl_quotation")
            ->where('id', $edit_id)
            ->update([
                //'fullname'=>$fullname,
                'modifiedby'=>$user_id,
                'modifieddttm'=>$date,
                'sales_person'=> $sales_person,
                'company'=> $company,
                'comp_name_add'=> $comp_name_add,
                'attention_of'=> $attention_of,
                'quotation_date'=> $quotation_date,
                'subject'=> $subject,
                'discharge_point_term'=> $discharge_point_term,
                'installation_charge'=> $installation_charge,
                'warranty'=> $warranty,
                'training'=> $training,
                'bank_charges'=> $bank_charges,
                'sampling_charges'=> $sampling_charges,
                'lchandling_charges'=> $lchandling_charges,
                'cancellation_of_order_charge'=> $cancellation_of_order_charge,
                'delivery_point'=> $delivery_point,
                'packing'=> $packing,
                'payment_term'=> $payment_term,
                'validity_of_quotation'=> $validity_of_quotation,
                'documents'=> $documents,
                'jurisdiction'=> $jurisdiction,
                'statutory_clause'=> $statutory_clause,
                'tax'=> $tax,
                'excise'=> $excise,
                'lbt'=> $lbt,
                'freight'=> $freight,
                'delivery'=> $delivery,
                'prices'=> $prices,
                'tds'=> $tds,
                'othercharges'=> $othercharges,
                'discharge_point_term_checkbox'=> $discharge_point_term_checkbox,
                'installation_charge_checkbox'=> $installation_charge_checkbox,
                'warranty_checkbox'=> $warranty_checkbox,
                'training_checkbox'=> $training_checkbox,
                'bank_charges_checkbox'=> $bank_charges_checkbox,
                'sampling_charges_checkbox'=> $sampling_charges_checkbox,
                'lchandling_charges_checkbox'=> $lchandling_charges_checkbox,
                'cancellation_of_order_charge_checkbox'=> $cancellation_of_order_charge_checkbox,
                'delivery_point_checkbox'=> $delivery_point_checkbox,
                'packing_checkbox'=> $packing_checkbox,
                'payment_term_checkbox'=> $payment_term_checkbox,
                'validity_of_quotation_checkbox'=> $validity_of_quotation_checkbox,
                'documents_checkbox'=> $documents_checkbox,
                'jurisdiction_checkbox'=> $jurisdiction_checkbox,
                'statutory_clause_checkbox'=> $statutory_clause_checkbox,
                'tax_checkbox'=> $tax_checkbox,
                'excise_checkbox'=> $excise_checkbox,
                'lbt_checkbox'=> $lbt_checkbox,
                'freight_checkbox'=> $freight_checkbox,
                'delivery_checkbox'=> $delivery_checkbox,
                'prices_checkbox'=> $prices_checkbox,
                'tds_checkbox'=> $tds_checkbox,
                'othercharges_checkbox'=> $othercharges_checkbox,
                'note'=> $note,
                'reference'=> $reference,
                'quote_type'=> $quote_type,
                'rows'=> $rows,
                'columns'=> $columns
            ]);


            //echo $columns;die;


            if($quote_type!="5")
            {
                for ($i = 0; $i < $columns; $i++)
                {
                    //echo 'td_width_'.$i;die;
                    $width=$request->request->get('td_width_'.$i);
                    $mapping_id=$request->request->get('td_mapping_id_'.$i);

                    //echo $width;

                    //echo "  ".$mapping_id;die;
                    //$column_id=$i;
                    //$quotation_id=$edit_id;

                    $result = DB::table("quotation_width_mapping")
                        ->where('id', $mapping_id)
                        ->update([
                            'width'=> $width
                        ]);



                }
            }
            else
            {
                DB::table('quotation_width_mapping')->where('quotation_id', $edit_id)->delete();

                for ($i = 0; $i < $columns; $i++)
                {

                        //echo 'td_width_'.$i;die;
                        $width=$request->request->get('td_width_'.$i);

                        //$width.=$width;
                        $column_id=$i;
                        //$quotation_id=$lastInsertId;

                        $widthdata['quotation_id']= $edit_id;
                        $widthdata['column_id']= $column_id;
                        $widthdata['width']= $width;

                        //var_dump($widthdata);die;

                        $quotation_width_mapping = DB::table("quotation_width_mapping")->insert($widthdata);

                }
            }







            //die("here");

            if($quote_type!="5")
            {
                foreach($_POST['data'] as $key=>$value) {

                    foreach( $value as $keyItem => $valKey)
                    {

                        $details_id=$_POST['data_id'][$key][$keyItem];

                        $details=$valKey;

                        if($details_id==0)
                        {

                            $detailsdata['quotation_id']= $edit_id;
                            $detailsdata['column_id']= $keyItem;
                            $detailsdata['row_id']= $key;
                            $detailsdata['description']= $details;
                            $query_insert = DB::table("quotation_invoice_details")->insert($detailsdata);
                        }
                        else
                        {
                            $result = DB::table("quotation_invoice_details")
                                                ->where('id', $details_id)
                                                ->update([
                                                    'description'=> $details
                                                ]);
                        }
                        //echo $keyItem ." : ".$valKey."</br>";
                    }
                    //echo "<br/>";
                }
            }
            else
            {
                DB::table('quotation_invoice_details')->where('quotation_id', $edit_id)->delete();
                foreach($_POST['data'] as $key=>$value)
                {
                    foreach( $value as $keyItem => $valKey)
                    {
                        $details=$valKey;

                        $detailsdata['quotation_id']= $edit_id;
                        $detailsdata['column_id']= $keyItem;
                        $detailsdata['row_id']= $key;
                        $detailsdata['description']= $details;

                        //var_dump($widthdata);die;

                        $query_insert = DB::table("quotation_invoice_details")->insert($detailsdata);
                        //echo $keyItem ." : ".$valKey."</br>";
                    }
                }
            }




            /*for ($i = 0; $i < $rows; $i++)
                {
                    for ($j = 0; $j < $columns; $j++)
                    {
                        $details=$request->request->get('data_'.$i.$j);
                        $details_id=$request->request->get('data_id_'.$i.$j);
                        //$column_id=$j;
                        //$row_id=$i;

                        // $detailsdata['quotation_id']= $quotation_id;
                        // $detailsdata['column_id']= $j;
                        // $detailsdata['row_id']= $i;
                        // $detailsdata['description']= $details;

                        if($details_id==0)
                        {
                             $detailsdata['quotation_id']= $edit_id;
                             $detailsdata['column_id']= $j;
                             $detailsdata['row_id']= $i;
                             $detailsdata['description']= $details;

                            //var_dump($widthdata);die;

                            $query_insert = DB::table("quotation_invoice_details")->insert($detailsdata);
                        }
                        else
                        {
                            $result = DB::table("quotation_invoice_details")
                                            ->where('id', $details_id)
                                            ->update([
                                                'description'=> $details
                                            ]);
                        }
                    }
                }*/

            //echo $edit_id;die;

            //DB::table('quotation_width_mapping')->where('quotation_id', $edit_id)->delete();

            //die("here");

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


}
