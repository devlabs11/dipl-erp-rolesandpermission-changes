<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use DB;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {


      $value = ["0" => 'tester2@scube.net.in', '1' => 'dev12@scube.net.in'];
      $count = sizeof($value);

      $keys = array_keys($value);

      for($i = 0; $i < $count; $i++) {

         echo "$value[$i]";
         echo "<br/>";
         //$commonValues[] = $keys[$i];
         //$message->to("$keys[$i]", 'Devharsh Infotech');

     }
     die;


      $todays_date=date("Y-m-d");
      $todays_date_dispay=date("d-m-Y");

      $quotation_data_count = DB::select("select count(*) as totalcount from tbl_quotation where DATE(addedddttm)='$todays_date'");
      $totalcount=0;
      foreach($quotation_data_count as $quotation_data_count)
      {
        $totalcount=$quotation_data_count->totalcount;
      }


      $quotation_data = DB::select("select * from tbl_quotation where DATE(addedddttm)='$todays_date'");

    //


      //var_dump($quote_type_data);die;

      $data = array('name'=>"Devharsh Infotech",'quotation_data'=>$quotation_data,'totalcount'=>$totalcount);
      $subjectdata = array('todays_date'=>$todays_date_dispay,'totalcount'=>$totalcount);
      //echo $totalcount;die;

      //echo $todays_date;die;
      $subject=$totalcount." quotation generated on ".$todays_date;

      //echo $subject

      Mail::send('mail', $data, function($message)use ($subjectdata) {
         $message->to('tester2@scube.net.in', 'Tutorials Point');
         $message->subject($subjectdata['totalcount']." quotation generated on ".$subjectdata['todays_date']);
         //$message->subject("10 quotation generated on 28-08-2022");
         $message->from('support@devharshinfotech.com','Devharsh Infotech');
         $message->cc('dev12@scube.net.in','Devharsh Infotech');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
?>
