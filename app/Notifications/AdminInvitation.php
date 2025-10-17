<?php

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AdminInvitation extends Notification
{
    public function __construct(protected string $token) {}

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $url = url("/reset-password/{$this->token}?email={$notifiable->email}");

        return (new MailMessage)
            ->subject('Invitation à rejoindre l’administration 🎉')
            ->greeting("Bonjour {$notifiable->name},")
            ->line("Un compte administrateur a été créé pour vous.")
            ->action('Définir mon mot de passe', $url)
            ->line("Ce lien expirera dans 60 minutes.");
    }
}
