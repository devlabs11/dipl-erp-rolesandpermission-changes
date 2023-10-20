<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Mail;
use DB;

class quotationofthedayemail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quotationoftheday:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email of daily created quotations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
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
         $message->to('ceo@devharshinfotech.com', 'CEO');
         $message->to('Rakeshshah900@gmail.com', 'Rakeshshah900');
         $message->subject($subjectdata['totalcount']." quotation generated on ".$subjectdata['todays_date']);
         //$message->subject("10 quotation generated on 28-08-2022");
         $message->from('support@devharshinfotech.com','Devharsh Infotech');//support@devharshinfotech.com'
         $message->cc('software@scube.net.in','Software');
         $message->cc('rakesh@scube.net.in','Rakesh');
      });
      //echo "Basic Email Sent. Check your inbox.";
      $this->info('Send email of daily created quotations');
    }

}
