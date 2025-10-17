<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InviteUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;

    public function __construct($user, $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    public function build()
    {
        return $this->subject("Invitation à rejoindre le site")
                    ->markdown('emails.invite-user', [
                        'url' => url("/reset-password/{$this->token}?email={$this->user->email}")
                    ]);
    }
}
