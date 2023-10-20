<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExceptionOccured extends Mailable
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
        $subject = 'Error in PMS Application';

        if (app()->environment('prod')) {
            $subject = 'Production Environment - ' . $subject;
        } elseif (app()->environment('testing')) {
            $subject = 'Staging Environment - ' . $subject;
        } else {
            $subject = 'Local Environment - ' . $subject;
        }

        return $this->markdown('mail.error')
                    ->subject($subject)
                    ->from('support@devharshinfotech.com','DIPL ERP')
                    ->with($this->data);
    }
}
