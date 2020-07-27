<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GeneralUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $sub, $messageText;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $subject, $message)
    {
        $this->user = $user;
        $this->sub = $subject;
        $this->messageText = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->sub)->markdown('emails.general.mail');
    }
}
