<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\DailyQuotationMail;
use App\Models\QuotationMaster;

class AutoDailyQuotationMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:dailyQuotationMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To send Daily Report of Quotation Generated';

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

        $quotations = QuotationMaster::whereDate('created_at', now()->today())->get();
        $email_cc = 'ceo@devharshinfotech.com,rakeshshah900@gmail.com,software@scube.net.in';
        $cc = explode(',', $email_cc);
        if(config('app.env') == 'local'){
            Mail::mailer('smtp')->to('dev5@scube.net.in')->cc('tester2@scube.net.in')->send(new DailyQuotationMail($quotations));
        }else{
            Mail::mailer('smtp2')->to('ankit@scube.net.in')->cc($cc)->bcc('dev5@scube.net.in')->send(new DailyQuotationMail($quotations));
        }
        return 0;
    }
}
