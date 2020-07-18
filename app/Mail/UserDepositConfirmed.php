<?php

namespace App\Mail;

use App\User;
use App\Deposits;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserDepositConfirmed extends Mailable
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
        return $this->markdown('emails.deposit.deposit-confirmed');
    }
}
