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

    public $user, $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $email)
    {
        $this->user = $user;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject($this->email->subject)->markdown('emails.general.mail');
        if(!is_null($this->email->attachment)){
            foreach($this->email->attachment as $media)
            {
                $mail->attach(public_path(config('constants.email_attachment_dir').$media));
            }
        }
        return $mail;
    }
}
