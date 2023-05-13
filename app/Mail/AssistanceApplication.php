<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AssistanceApplication extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $detail;
    public function __construct($detail)

    {

        $this->detail = $detail;

    }

  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Assistance Application')
        ->view('email.application');
    }
}
