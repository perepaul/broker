<?php

namespace App\Mail;

use App\User;
use App\Document;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DocumentUpload extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $document;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Document $document)
    {
        $this->user = $user;
        $this->document = $document;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.documents.upload');
    }
}
