<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email confirmé</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg text-center max-w-md">
        <h1 class="text-2xl font-bold text-green-600 mb-4">✅ Email confirmé !</h1>
        <p class="text-gray-700 mb-6">
            Merci <strong>{{ $contact->prenom }} {{ $contact->nom }}</strong> d’avoir confirmé votre adresse email.
        </p>
        <p class="text-gray-600">
            Votre message a bien été enregistré et transmis à notre équipe.
        </p>
        <a href="{{ url('/') }}" class="inline-block mt-6 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Retour à l’accueil
        </a>
    </div>
</body>
</html>
