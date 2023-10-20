<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use PDF;
use DB;
use Redirect;

class PDFController extends Controller
{
    //
    public function htmlPDF()
    {
        ini_set('memory_limit','44M');

        //return view('simplehtmlPDF');
        $pdf = PDF::loadView('simplehtmlPDF');
        return $pdf->download('test'.'.pdf');

    }

    public function generatePDF($quotation_id)
    {

       ini_set('memory_limit','44M');
        $data = ['quotation_id' => $quotation_id];


        $pdf = PDF::loadView('htmlPDF', $data);
        return $pdf->download('quotation_'.$quotation_id.'.pdf');
    }

    public function generatePDFwithhf($quotation_id)
    {

        ini_set('memory_limit','128M');

        try {


        $tbldata = DB::select("select tc.header_image as header_image,tc.footer_image as footer_image from tbl_quotation tq left join tbl_company tc on tq.company=tc.id where tq.id=$quotation_id");


        $header_image="";
        $footer_image="";

        foreach($tbldata as $tbldata){
            $header_image=$tbldata->header_image;
            $footer_image=$tbldata->footer_image;
        }

        //$header_image="Scube_header.jpg";
        $path = config('app.url').'/assets/uploadimage/company/'.$header_image;
       // exit;
        //$path=base_path('/assets/uploadimage/company/'.$header_image);
        //$path="http://devharshinfotech.com/assets/images/logo.png";
        //$path="http://erp.devharshinfotech.com/assets/uploadimage/company/Scube_header.jpg";
        //echo $path;die;
        $type=pathinfo($path,PATHINFO_EXTENSION);
        //echo $path;die;
        $data=file_get_contents($path);
        //exit;

        $pic='data:image/'.$type.';base64,'.base64_encode($data);

        //$fpath=base_path('DIPL_Footer.png');
        //$fpath=base_path('/assets/uploadimage/company/'.$footer_image);
        $fpath = config('app.url').'/assets/uploadimage/company/'.$footer_image;
        //$fpath="http://devharshinfotech.com/assets/images/logo.png";
        //$fpath="http://erp.devharshinfotech.com/assets/uploadimage/company/Scube_header.jpg";
        $ftype=pathinfo($fpath,PATHINFO_EXTENSION);
        $fdata=file_get_contents($fpath);
        $fpic='data:image/'.$ftype.';base64,'.base64_encode($fdata);

        $data = ['quotation_id' => $quotation_id];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('htmlPDFwithhf', compact('pic','quotation_id','fpic'));
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        return $pdf->download('quotation_'.$quotation_id.'.pdf');
    }

    public function generatePDFwithhf_old($quotation_id)
    {
       ini_set('memory_limit','44M');

        $path=base_path('DIPL_letter_head.png');
        $type=pathinfo($path,PATHINFO_EXTENSION);
        $data=file_get_contents($path);
        $pic='data:image/'.$type.';base64,'.base64_encode($data);

        $fpath=base_path('DIPL_Footer.png');
        $ftype=pathinfo($fpath,PATHINFO_EXTENSION);
        $fdata=file_get_contents($fpath);
        $fpic='data:image/'.$ftype.';base64,'.base64_encode($fdata);


        $data =array("quotation_id" => $quotation_id, "pic" => $pic,"fpic" => $fpic);
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('htmlPDFwithhf', compact('pic','quotation_id','fpic'));
        //return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('htmlPDFwithhf', $data)->stream();
        return $pdf->download('quotation_'.$quotation_id.'.pdf');
        //return $pdf->stream();
    }
    public function generatejobcardPDF($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::loadView('jobcardhtmlPDF', $data);
        return $pdf->stream();
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }
    public function generatejobcardPDFwithhf($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $path=base_path('DIPL_letter_head.png');
        $type=pathinfo($path,PATHINFO_EXTENSION);
        $data=file_get_contents($path);
        $pic='data:image/'.$type.';base64,'.base64_encode($data);

        $fpath=base_path('DIPL_Footer.png');
        $ftype=pathinfo($fpath,PATHINFO_EXTENSION);
        $fdata=file_get_contents($fpath);
        $fpic='data:image/'.$ftype.';base64,'.base64_encode($fdata);

        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('jobcardhtmlPDFwithhf', compact('pic','jobcard_id','fpic'));
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }

    public function thermalgeneratejobcardPDF($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::loadView('thermaljobcardhtmlPDF', $data);
        return $pdf->stream();
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }
    public function thermalgeneratejobcardPDFwithhf($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $path=base_path('DIPL_letter_head.png');
        $type=pathinfo($path,PATHINFO_EXTENSION);
        $data=file_get_contents($path);
        $pic='data:image/'.$type.';base64,'.base64_encode($data);

        $fpath=base_path('DIPL_Footer.png');
        $ftype=pathinfo($fpath,PATHINFO_EXTENSION);
        $fdata=file_get_contents($fpath);
        $fpic='data:image/'.$ftype.';base64,'.base64_encode($fdata);

        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('thermaljobcardhtmlPDFwithhf', compact('pic','jobcard_id','fpic'));
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }

    public function csgeneratejobcardPDF($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::loadView('csjobcardhtmlPDF', $data);
        return $pdf->stream();
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }
    public function csgeneratejobcardPDFwithhf($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $path=base_path('DIPL_letter_head.png');
        $type=pathinfo($path,PATHINFO_EXTENSION);
        $data=file_get_contents($path);
        $pic='data:image/'.$type.';base64,'.base64_encode($data);

        $fpath=base_path('DIPL_Footer.png');
        $ftype=pathinfo($fpath,PATHINFO_EXTENSION);
        $fdata=file_get_contents($fpath);
        $fpic='data:image/'.$ftype.';base64,'.base64_encode($fdata);

        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('csjobcardhtmlPDFwithhf', compact('pic','jobcard_id','fpic'));
        return $pdf->stream();
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }

    public function chequegeneratejobcardPDF($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::loadView('chequejobcardhtmlPDF', $data);
        return $pdf->stream();
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }
    public function chequegeneratejobcardPDFwithhf($jobcard_id)
    {
        ini_set('memory_limit','44M');
        $path=base_path('DIPL_letter_head.png');
        $type=pathinfo($path,PATHINFO_EXTENSION);
        $data=file_get_contents($path);
        $pic='data:image/'.$type.';base64,'.base64_encode($data);

        $fpath=base_path('DIPL_Footer.png');
        $ftype=pathinfo($fpath,PATHINFO_EXTENSION);
        $fdata=file_get_contents($fpath);
        $fpic='data:image/'.$ftype.';base64,'.base64_encode($fdata);

        $data = ['jobcard_id' => $jobcard_id];
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('chequejobcardhtmlPDFwithhf',compact('pic','jobcard_id','fpic'));
        return $pdf->stream();
        return $pdf->download('Job_Card_'.$jobcard_id.'.pdf');
    }


    public function deliverylocationPDF($customer_id)
    {
        ini_set('memory_limit','44M');
        $data = ['customer_id' => $customer_id];
        $pdf = PDF::loadView('deliverylocationPDF', $data);
        return $pdf->stream();
        return $pdf->download('Delivery_Location_'.$customer_id.'.pdf');
    }

    public function generatePDFsalesworkorder($sales_work_order)
    {
        ini_set('memory_limit','44M');
        set_time_limit(300);
        $data = ['sales_work_order' => $sales_work_order];
        $pdf = PDF::loadView('htmlPDFsalesworkorder', $data);
        // return $pdf->download('Bill_Of_Material'.$sales_work_order.'.pdf');
        return $pdf->stream();
        return view('htmlPDFsalesworkorder',compact('sales_work_order','data'));
    }

    public function generatePDFSaleWorkOderCosting($sales_work_order)
    {
        ini_set('memory_limit','44M');
        $path = '';
        $data = ['sales_work_order' => $sales_work_order];
        $pdf = PDF::loadView('sales-work-order-costing', $data);
        return $pdf->stream();
        return view('sales-work-order-costing',compact('sales_work_order'));
        // return $pdf->download('sales_work_order_'.$sales_work_order.'.pdf');
    }


    public function generatePDFnewworkorder($new_work_order){
        ini_set('memory_limit','44M');
        $data = ['new_work_order' => $new_work_order];
        return view('htmlPDFnewworkorder',compact('data','new_work_order'));
        // $pdf = PDF::loadView('htmlPDFnewworkorder', $data);
        // return $pdf->stream();
        // return $pdf->download('new_work_order'.$new_work_order.'.pdf');
    }





}
