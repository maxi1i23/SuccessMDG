@component('mail::message')
# Confirmation de votre demande de devis

Bonjour {{ $devis->nom }},

Veuillez confirmer votre demande de devis en cliquant sur le bouton ci-dessous.

@component('mail::button', ['url' => route('devis.confirm', ['token' => $devis->verification_token])])
Confirmer ma demande
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
