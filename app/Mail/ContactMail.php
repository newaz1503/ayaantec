<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $inquiry;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('frontend.pages.send_email');
        return $this->view('frontend.pages.send_email')
        ->from($this->inquiry['email'], $this->inquiry['email'])
        ->subject($this->inquiry['subject'] ? $this->inquiry['subject']:' Business Inquiry' )
        ->replyTo($this->inquiry['email']);
    }
}
