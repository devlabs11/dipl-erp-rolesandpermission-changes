<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Mail;
use DB;

class quotationofthemonthemail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quotationofthemonth:email';

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
        //echo date("m-d-Y");die;
        $current_month=date("m");
        $current_year=date("Y");

        //echo $current_month;die;

        
        $current_month_display=date("M");

        $last_month_to_display=date('F',strtotime($current_month_display . date('Y') . ' -1 month'));
        $last_month=date('n',strtotime($current_month_display . date('Y') . ' -1 month'));
      echo $last_month;die;
        

        //echo date('F', strtotime('-1 month'));die;

        //echo $current_month_display;die;

        //$post = "APR-2015";
        //echo strtoupper(date('m', strtotime($current_month. "-1 Month")));die;
        //echo $current_month_display;die;
        
        $quotation_data_count = DB::select("select count(*) as totalcount from tbl_quotation where MONTH(addedddttm)='$last_month'");
        $totalcount=0;
        foreach($quotation_data_count as $quotation_data_count)
        {
          $totalcount=$quotation_data_count->totalcount;
        }

        //echo $totalcount;die;
        //
        
        $quotation_data = DB::select("select * from tbl_quotation where MONTH(addedddttm)='$last_month'");

        //var_dump($quotation_data);die;
     
      //
  
       
        //var_dump($quote_type_data);die;
  
        $data = array('name'=>"Devharsh Infotech",'quotation_data'=>$quotation_data,'totalcount'=>$totalcount);
        $subjectdata = array('current_month_display'=>$last_month_to_display,'current_year'=>$current_year,'totalcount'=>$totalcount);

        //echo $subjectdata['totalcount']." quotation generated in month ".$subjectdata['current_month_display']." ".$subjectdata['current_year'];die;
        
        //$data=array();
        Mail::send('monthmail', $data, function($message)use ($subjectdata) {
           $message->to('dev12@scube.net.in', 'Tutorials Point');
           $message->subject($subjectdata['totalcount']." quotation generated in month ".$subjectdata['current_month_display']." ".$subjectdata['current_year']);
           //$message->subject("10 quotation generated on 28-08-2022");
           $message->from('support@devharshinfotech.com','Devharsh Infotech');
           $message->cc('tester2@scube.net.in','Devharsh Infotech');
        });
        //echo "Basic Email Sent. Check your inbox.";
        $this->info('Send email of monthly created quotations');
      
      
  
    }
}
