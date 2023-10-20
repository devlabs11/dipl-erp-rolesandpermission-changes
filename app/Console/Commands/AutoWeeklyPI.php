<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Models\ProformaInvoice;
use App\Mail\AutoWeeklyPIMail;

class AutoWeeklyPI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:weeklyPIMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Weekly PI';

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

        $weeklyRecords = ProformaInvoice::whereBetween('created_at', [$startDate, $endDate])->get();
        if (config('app.env') == 'local') {
            Mail::mailer('smtp')->to('dev5@scube.net.in')
                                //  ->cc(['tester2@scube.net.in', 'software@scube.net.in'])
                                ->send(new AutoWeeklyPIMail($weeklyRecords,$startDate,$endDate));
        } else {
            Mail::mailer('smtp2')->to(['ankit@scube.net.in','accounts1@devharshinfotech.com'])
                                ->cc(['software@scube.net.in','rakeshshah900@gmail.com','ceo@devharshinfotech.com'])
                                 ->bcc('dev5@scube.net.in')
                                 ->send(new AutoWeeklyPIMail($weeklyRecords,$startDate,$endDate));
        }
    }
}
