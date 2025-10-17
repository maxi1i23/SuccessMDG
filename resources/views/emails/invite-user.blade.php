<x-mail::message>
# Bonjour {{ $user->name }}

Vous avez été invité à rejoindre notre application.  
Cliquez sur le lien ci-dessous pour définir votre mot de passe et activer votre compte.
[Definir mon mot de passe]({{ $url }})

<x-mail::button :url="$url">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

<!-- @component('mail::message')
# Bonjour {{ $user->name }}

Vous avez été invité à rejoindre notre application.  
Cliquez sur le bouton ci-dessous pour définir votre mot de passe et activer votre compte.

@component('mail::button', ['url' => $url])
Définir mon mot de passe
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent -->
