<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Models\QuotationMaster;
use App\Mail\MonthlyQuotationMail;

class AutoMonthlyQuotationMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:monthlyQuotationMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To send Monthly Report of Quotation Generated';

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
        $quotations = QuotationMaster::whereMonth('created_at', date('m'))->get();
        $email_cc = 'rakeshshah900@gmail.com,software@scube.net.in';
        $cc = explode(',', $email_cc);
        if(config('app.env') == 'local'){
            // Mail::mailer('smtp2')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new MonthlyQuotationMail($quotations));
        }else{
            // Mail::mailer('smtp2')->to('ceo@devharshinfotech.com')->cc($cc)->bcc('dev5@scube.net.in')->send(new MonthlyQuotationMail($quotations));
        }
        return 0;
    }
}
