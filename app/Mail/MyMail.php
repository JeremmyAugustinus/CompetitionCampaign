<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailId;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailId)
    {
        $this->mailId = $mailId;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('STARDRINK POSTER')->view('emails.sendMail');
    }
}
