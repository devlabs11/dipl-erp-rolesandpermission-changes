<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MonthlyQuotationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $quotations;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quotations)
    {
        $this->quotations = $quotations;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Monthly Quotation Report')
                    ->from('support@devharshinfotech.com','DIPL ERP')
                    ->view('mail.monthlyQuotationMail');
    }
}
