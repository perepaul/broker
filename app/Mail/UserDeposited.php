<?php

namespace App\Mail;

use App\Deposits;
use App\User;
use App\Withdrawal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserDeposited extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $deposit;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Deposits $deposit)
    {
        $this->user = $user;
        $this->deposit = $deposit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.deposit.deposited');
    }
}
