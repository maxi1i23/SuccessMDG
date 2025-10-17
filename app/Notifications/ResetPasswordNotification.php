<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;

class ResetPasswordNotification extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    protected function resetUrl($notifiable)
    {
        // Génère une URL signée ou standard ; ici simple route avec token + email query
        return url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ], false));
    }

    public function toMail($notifiable)
    {
        $url = $this->resetUrl($notifiable);

        return (new MailMessage)
            ->subject('Réinitialisation du mot de passe')
            ->greeting('Bonjour !')
            ->line("Vous avez demandé la réinitialisation de votre mot de passe.")
            ->action('Réinitialiser mon mot de passe', $url)
            ->line('Ce lien expire dans ' . config('auth.passwords.' . config('auth.defaults.passwords') . '.expire') . ' minutes.')
            ->line('Si vous n’avez pas demandé ce changement, ignorez cet e-mail.');
    }
}
