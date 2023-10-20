<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\AutoDailyCountEmail;
use App\Models\QuotationMaster;
use App\Models\ProformaInvoice;
use App\Models\SalesContract;
use App\Models\JobCardModel;
use App\Models\SaleWorkOrder;
use App\Models\FgEntry;
use Illuminate\Support\Facades\Log;

class AutoDailyCountMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:dailyCountMail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To send Daily Count';

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
        Log::info('auto:dailyCountMail command executed.');
        $counts = [
            'Quotations' => 0,
            'Proforma Invoice' => 0,
            'Sales Contract' => 0,
            'Job Card' => 0,
            'Sale Work Order' => 0,
            'Finished Goods' => 0,
        ];

        $counts['Quotations'] = QuotationMaster::whereDate('created_at', now()->today())->count();
        $counts['Proforma Invoice'] = ProformaInvoice::whereDate('created_at', now()->today())->count();
        $counts['Sales Contract'] = SalesContract::whereDate('created_at', now()->today())->count();
        $counts['Job Card'] = JobCardModel::whereDate('addedddttm', now()->today())->count();
        $counts['Sale Work Order'] = SaleWorkOrder::whereDate('addedddttm', now()->today())->count();
        $counts['Finished Goods'] = FgEntry::whereDate('created_at', now()->today())->count();

        if (config('app.env') == 'local') {
            Mail::mailer('smtp')->to('dev5@scube.net.in')
                                //  ->cc(['tester2@scube.net.in', 'software@scube.net.in'])
                                ->send(new AutoDailyCountEmail($counts));
        } else {
            Mail::mailer('smtp2')->to('ceo@devharshinfotech.com')
                                 ->cc(['software@scube.net.in','rakeshshah900@gmail.com'])
                                 ->bcc('dev5@scube.net.in')
                                 ->send(new AutoDailyCountEmail($counts));
        }
        return 0;
    }
}
