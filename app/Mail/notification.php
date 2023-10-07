<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mailer\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class notification extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;


    // Add a constructor with the required arguments
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }


    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this
        ->from('sayemtimecenter.naviforce@gmail.com')
        ->subject('We Collect your passport')
        ->view('backend.mail.email');
    }
}
