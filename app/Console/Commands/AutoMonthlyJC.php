<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Models\JobCardModel;
use App\Mail\AutoMonthlyJCMail;

class AutoMonthlyJC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:monthlyJCMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Monthly Job Card report';

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
        // Get the current date and time
        $currentDate = Carbon::now();

        // Calculate the previous month's year and month
        $previousMonth = $currentDate->subMonth();
        $currentYear = $previousMonth->year;
        $currentMonth = $previousMonth->month;

        $monthlyRecords = JobCardModel::whereYear('addedddttm', $currentYear)
                        ->whereMonth('addedddttm', $currentMonth)
                        ->get();

        if (config('app.env') == 'local') {
            Mail::mailer('smtp')->to('dev5@scube.net.in')
                                //  ->cc(['tester2@scube.net.in', 'software@scube.net.in'])
                                ->send(new AutoMonthlyJCMail($monthlyRecords,$currentYear,$currentMonth));
        } else {
            Mail::mailer('smtp2')->to(['dtp@scube.net.in','yogesh@devharshinfotech.com'])
                                ->cc(['software@scube.net.in','rakeshshah900@gmail.com','ceo@devharshinfotech.com'])
                                ->bcc('dev5@scube.net.in')
                                 ->send(new AutoMonthlyJCMail($monthlyRecords,$currentYear,$currentMonth));
        }
    }
}
