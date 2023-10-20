<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Models\SalesContract;
use App\Mail\AutoWeeklySalesContractMail;

class AutoWeeklySalesContract extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:weeklySCMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Weekly Sales Contract report';

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

        $weeklyRecords = SalesContract::whereBetween('created_at', [$startDate, $endDate])->get();
        if (config('app.env') == 'local') {
            Mail::mailer('smtp')->to('dev5@scube.net.in')
                                //  ->cc(['tester2@scube.net.in', 'software@scube.net.in'])
                                ->send(new AutoWeeklySalesContractMail($weeklyRecords,$startDate,$endDate));
        } else {
            Mail::mailer('smtp2')->to('admin@scube.net.in')
                                ->cc(['software@scube.net.in','rakeshshah900@gmail.com','ceo@devharshinfotech.com'])
                                 ->bcc('dev5@scube.net.in')
                                 ->send(new AutoWeeklySalesContractMail($weeklyRecords,$startDate,$endDate));
        }
    }
}
