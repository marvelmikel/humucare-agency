<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ServiceQuoteMail extends Mailable
{
    use Queueable, SerializesModels;


    public $mail;
    public $mailer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailer=null, $mail)
    {
        $this->mailer = $mailer;
        $this->mail = $mail;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('A new Service Quote.')
        ->view('email.service_quote');
    }


}
