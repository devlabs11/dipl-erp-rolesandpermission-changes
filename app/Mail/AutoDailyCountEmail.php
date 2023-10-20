<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AutoDailyCountEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $counts ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($counts)
    {
       $this->counts = $counts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $currentDate = \Carbon\Carbon::now()->format('d-m-Y');
        $subject = "ERP Module wise Entry Count Summary | $currentDate";

        return $this->subject($subject)
        ->from('support@devharshinfotech.com','DIPL ERP')
        ->view('mail.dailyCountMail');
    }
}
