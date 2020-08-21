<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportToClient extends Mailable
{
    use Queueable, SerializesModels;

    public $top10;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($top10)
    {
        $this->top10 = $top10;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('STARDRINK COMPETITION REPORT')->view('emails.sendReport');
    }
}
