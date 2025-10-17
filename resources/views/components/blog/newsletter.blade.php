<section class="relative px-6 py-20 bg-gradient-to-br from-indigo-900 via-purple-800 to-indigo-800 overflow-hidden">
    <div class="absolute inset-0">
        <span class="absolute w-72 h-72 bg-purple-700/30 rounded-full top-[-50px] left-[-50px] animate-pulse-slow"></span>
        <span class="absolute w-60 h-60 bg-indigo-600/20 rounded-full bottom-[-40px] right-[-40px] animate-pulse-slow"></span>
    </div>

    <div class="relative max-w-4xl mx-auto text-center z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 drop-shadow-lg">
            <span class="bg-gradient-to-r from-yellow-400 via-pink-500 to-orange-800 bg-clip-text text-transparent">
                Restez informé
            </span> de nos dernières actualités
        </h2>
        <p class="text-indigo-200 text-lg md:text-xl mb-8 max-w-2xl mx-auto">
            Recevez chaque semaine nos analyses, insights et actualités directement dans votre boîte mail.
        </p>

        <form id="newsletter-form" class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input type="email" 
                   id="newsletter-email"
                   name="email"
                   placeholder="Votre adresse email" 
                   required
                   class="flex-1 px-5 py-3 rounded-xl bg-white/10 text-white placeholder-white/70 border border-white/30 focus:border-pink-400 focus:bg-white/20 focus:ring-2 focus:ring-pink-400 transition-all duration-300 outline-none">
            <button type="submit" 
                    class="px-6 py-3 rounded-xl bg-gradient-to-r from-pink-500 to-orange-800 text-white font-semibold text-lg hover:scale-105 hover:shadow-lg transition-transform duration-300">
                S'abonner
            </button>
        </form>
    </div>

    <!-- Popup de confirmation -->
    <div id="newsletter-popup" class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg opacity-0 pointer-events-none transition-opacity duration-500">
        Email envoyé avec succès !
    </div>
</section>

<script>
document.getElementById('newsletter-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêche le rechargement de la page

    const email = document.getElementById('newsletter-email').value;

    if (!email) return;

    // Ouvre le client mail
    window.location.href = `mailto:emilisandrina13@gmail.com?subject=Nouvel abonnement newsletter&body=Email: ${email}`;

    // Affiche le popup
    const popup = document.getElementById('newsletter-popup');
    popup.classList.remove('opacity-0', 'pointer-events-none');
    popup.classList.add('opacity-100');

    // Cache le popup après 3 secondes
    setTimeout(() => {
        popup.classList.add('opacity-0', 'pointer-events-none');
    }, 3000);

    // Réinitialise le champ
    document.getElementById('newsletter-email').value = '';
});
</script>

<style>
@keyframes pulse-slow {
    0%, 100% { transform: scale(1); opacity: 0.4; }
    50% { transform: scale(1.1); opacity: 0.6; }
}
.animate-pulse-slow {
    animation: pulse-slow 8s ease-in-out infinite;
}
</style>
