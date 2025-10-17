<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Demande Confirmée</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div id="successPopup" class="fixed inset-0 bg-black/60 backdrop-blur-md z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl shadow-2xl max-w-md w-full p-8 text-center transform scale-90 transition-all duration-300" id="successContent">
        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 animate-bounce">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-2">Demande de devis envoyée !</h3>
        <p class="text-gray-600 mb-6">Merci, votre demande a été confirmée. Nous vous contacterons sous peu.</p>
        <a href="/" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-3 px-6 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
            Retour à l'accueil
        </a>
    </div>
</div>

<script>
window.addEventListener('DOMContentLoaded', () => {
    const successContent = document.getElementById('successContent');
    successContent.classList.remove('scale-90');
    successContent.classList.add('scale-100');
});
</script>

</body>
</html>
