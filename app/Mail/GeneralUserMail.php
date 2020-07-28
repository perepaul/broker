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

    public $user, $sub, $messageText, $files;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $subject, $message,$attachment)
    {
        $this->user = $user;
        $this->sub = $subject;
        $this->messageText = $message;
        $this->files = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject($this->sub)->markdown('emails.general.mail');
        if(!empty($this->attachments)){
            foreach($this->files['attachment'] as $attachment){
                // dd(config('constants.email_attachment_dir').$attachment);
                $mail->attachFromStorage(config('constants.email_attachment_dir').$attachment);
            }
        }
        return $mail;
    }
}
