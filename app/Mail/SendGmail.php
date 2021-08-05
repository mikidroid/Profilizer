<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendGmail extends Mailable
{
    use Queueable, SerializesModels;
public $GmailDetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($GmailDetails)
    {
        $this->GmailDetails=$GmailDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
     
        return $this->from($this->GmailDetails['sender'])->replyTo($this->GmailDetails['sender'])->subject($this->GmailDetails['subject'])->view('mail.send-gmail');
    }
}
