<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.quotationCreate')
                    ->subject('New Quotation Generated')
                    ->from('support@devharshinfotech.com','DIPL ERP')
                    ->with([
                        'id'     => $this->data[0]['uniqid'],
                        'company'     => $this->data[0]['company'],
                        'subject' => $this->data[0]['subject'],
                        'sales_person'	=> $this->data[0]['sales_person'],
                        'generated_by'	=> $this->data[0]['generated_by'],
                        'view' => $this->data[0]['view'],
                    ]);

        // return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
        //             ->subject("this subject")
                    // ->markdown('mail.quotationCreate');
    }
}
