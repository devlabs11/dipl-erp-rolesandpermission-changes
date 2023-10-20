<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class AutoWeeklyJCMail extends Mailable
{
    use Queueable, SerializesModels;
    public $weeklyRecords;
    public $startDate;
    public $endDate;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($weeklyRecords, $startDate, $endDate)
    {
        $this->weeklyRecords = $weeklyRecords;
        $this->startDate = Carbon::parse($startDate)->format('d-m-Y');
        $this->endDate = Carbon::parse($endDate)->format('d-m-Y');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = "Weekly Job Card Report $this->startDate to $this->endDate";

        return $this->subject($subject)
        ->from('support@devharshinfotech.com','DIPL ERP')
        ->view('mail.jc.weekly');
    }
}
