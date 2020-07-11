<?php

namespace App\Mail;

use App\User;
use App\Withdrawal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawalDeclined extends Mailable
{
    use Queueable, SerializesModels;
    public $withdrawal;
    public $user;
    public $reason;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Withdrawal $withdrawal,string $reason)
    {
        $this->user = $user;
        $this->reason = $reason;
        $this->withdrawal = $withdrawal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.withdrawal.declined');
    }
}
