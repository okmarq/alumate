<?php

namespace App\Mail;

use App\PasswordReset;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var PasswordReset
     */
    protected $passwordReset;


    /**
     * @var User
     */
    protected $user;


    /**
     * Create a new message instance.
     *
     * @param PasswordReset $passwordReset
     * @param User $user
     */
    public function __construct(PasswordReset $passwordReset, User $user)
    {
        $this->passwordReset = $passwordReset;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->user->email)->markdown('emails.forgotPassword')
            ->with([
                'passwordReset' => $this->passwordReset,
                'user' => $this->user
            ]);
    }
}
