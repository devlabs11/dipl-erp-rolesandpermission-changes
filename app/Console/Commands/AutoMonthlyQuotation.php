<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\AutoMonthlyQuotationMail;
use App\Models\QuotationMaster;

class AutoMonthlyQuotation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:monthlyQuotation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Monthly Quotation Report';

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
        try {
            // Get the current date and time
            $currentDate = Carbon::now();

            // Calculate the previous month's year and month
            $previousMonth = $currentDate->subMonth();
            $currentYear = $previousMonth->year;
            $currentMonth = $previousMonth->month;

            $monthlyRecords = QuotationMaster::whereYear('created_at', $currentYear)
                            ->whereMonth('created_at', $currentMonth)
                            ->get();

            if (config('app.env') == 'local') {
                Mail::mailer('smtp')->to('dev5@scube.net.in')
                                    // ->cc(['tester2@scube.net.in', 'software@scube.net.in'])
                                    ->send(new AutoMonthlyQuotationMail($monthlyRecords,$currentYear,$currentMonth));
            } else {
                Mail::mailer('smtp2')->to('ankit@scube.net.in')
                                    ->cc(['ceo@devharshinfotech.com','rakeshshah900@gmail.com','software@scube.net.in'])
                                    ->bcc('dev5@scube.net.in')
                                    ->send(new AutoMonthlyQuotationMail($monthlyRecords,$currentYear,$currentMonth));
            }
        } catch (\Exception $e) {
            \Log::error("Error sending monthly quotation email: {$e->getMessage()}");
        }
    }
}
