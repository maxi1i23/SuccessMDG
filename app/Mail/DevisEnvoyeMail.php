<?php

namespace App\Mail;

use App\Models\Devis;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DevisEnvoyeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $devis;

    /**
     * Create a new message instance.
     */
    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Nouvelle demande de devis')
                    ->view('emails.devis_envoye');
    }
}
