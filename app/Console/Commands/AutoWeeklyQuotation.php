<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\AutoWeeklyQuotationMail;
use App\Models\QuotationMaster;

class AutoWeeklyQuotation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:weeklyQuotation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Weekly Quotation Report';

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
        $startDate = now()->startOfWeek();
        $endDate = now()->endOfWeek();

        $weeklyRecords = QuotationMaster::whereBetween('created_at', [$startDate, $endDate])->get();

        if (config('app.env') == 'local') {
            Mail::mailer('smtp')->to('dev5@scube.net.in')
                                 ->cc(['tester2@scube.net.in', 'software@scube.net.in'])
                                ->send(new AutoWeeklyQuotationMail($weeklyRecords,$startDate,$endDate));
        } else {
            Mail::mailer('smtp2')->to('ankit@scube.net.in')
                                ->cc(['ceo@devharshinfotech.com','rakeshshah900@gmail.com','software@scube.net.in'])
                                ->bcc('dev5@scube.net.in')
                                 ->send(new AutoWeeklyQuotationMail($weeklyRecords,$startDate,$endDate));
        }
    }
}
