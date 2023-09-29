<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

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
     *  Get the messege Envelop
     */

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'EmailNotification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this
        ->from('arefinrahman.dany@gmail.com')
        ->subject('you are getting test notification')
        ->view('backend.mail.email');

    }
}
