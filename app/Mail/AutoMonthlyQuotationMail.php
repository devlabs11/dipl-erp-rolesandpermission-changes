<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AutoMonthlyQuotationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $monthlyRecords;
    public $currentMonth;
    public $currentYear;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($monthlyRecords, $currentMonth, $currentYear)
    {
        $this->monthlyRecords = $monthlyRecords;
        $this->currentMonth = Carbon::parse($currentMonth)->format('F Y');
        $this->currentYear = Carbon::parse($currentYear)->format('Y');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $month = date('M-Y');
        $subject = "Monthly Quotation Report $month";

        return $this->subject($subject)
        ->from('support@devharshinfotech.com','DIPL ERP')
        ->view('mail.quotation.monthly');
    }
}
