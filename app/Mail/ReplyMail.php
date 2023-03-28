<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMail extends Mailable
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
        $message_body = '<h3>Hi,</h4>';
        $message_body .= '<p>Thank you for contacting us! We will get back to you soon!</p>';
        $message_body .= '<p>Regards, Ayaan Tech Limited.</p>';
        $from_email = "connect2ayaantec@gmail.com";
        // return $this->view('frontend.pages.send_email');
        return $this->from($from_email, $this->inquiry['email'])
        ->subject($this->inquiry['subject'] ? $this->inquiry['subject']:' Business Inquiry' )
        ->html($message_body)
        ->replyTo($from_email);
    }
}
