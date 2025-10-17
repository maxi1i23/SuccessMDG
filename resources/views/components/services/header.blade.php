<!-- Section Services avec Nouvelle Image de Fond - Même Taille que A-Propos -->
<section class="relative overflow-hidden bg-white">
    <!-- Image d'arrière-plan très visible -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?auto=format&fit=crop&w=1470&q=80" 
             alt="Services Success MDG"
             class="w-full h-full object-cover">
        <!-- Overlay léger pour la lisibilité du texte -->
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <!-- Contenu principal -->
    <div class="relative z-10 py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-3xl">
                <!-- Badge -->
                <div class="inline-block mb-16">
                    <span class="px-6 py-3 bg-white/90 border-2 border-blue-200 rounded-full text-sm font-bold text-blue-700 shadow-lg backdrop-blur-md">
                        🔧 Nos Solutions
                    </span>
                </div>

                <!-- Titre à gauche -->
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black mb-8 leading-tight">
                    <span class="block text-white drop-shadow-2xl animate-fade-in-up">
                        Découvrez nos
                    </span>
                    <span class="block bg-gradient-to-r from-blue-400 via-cyan-400 to-teal-400 bg-clip-text text-transparent drop-shadow-2xl animate-fade-in-up delay-200">
                        Services
                    </span>
                    <span class="block relative animate-fade-in-up delay-400">
                        <span class="text-white drop-shadow-2xl">
                            Success MDG
                        </span>
                        <div class="absolute -bottom-3 left-0 w-0 h-1 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full animate-expand-width shadow-lg"></div>
                    </span>
                </h2>
            </div>
        </div>
    </div>

    <!-- Wave shape en bordure du dessous -->
    <div class="absolute bottom-0 left-0 right-0 z-30">
        <svg viewBox="0 0 1440 120" class="w-full h-32 block" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,32 C200,120 400,120 720,64 C1040,8 1240,0 1440,48 L1440 120 L0 120 Z"
                  fill="#ffffff"/>
        </svg>
    </div>

    <!-- Particules flottantes subtiles -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute w-2 h-2 bg-white/40 rounded-full animate-ping" style="top: 20%; left: 15%; animation-delay: 0ms; animation-duration: 3000ms;"></div>
        <div class="absolute w-1.5 h-1.5 bg-blue-300/60 rounded-full animate-ping" style="top: 60%; left: 80%; animation-delay: 1000ms; animation-duration: 2500ms;"></div>
        <div class="absolute w-2 h-2 bg-cyan-300/50 rounded-full animate-ping" style="top: 80%; left: 25%; animation-delay: 2000ms; animation-duration: 3500ms;"></div>
        <div class="absolute w-1.5 h-1.5 bg-teal-300/60 rounded-full animate-ping" style="top: 40%; left: 70%; animation-delay: 1500ms; animation-duration: 4000ms;"></div>
    </div>
</section>

<!-- CSS personnalisé pour les animations -->
<style>
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes expand-width {
    from {
        width: 0;
    }
    to {
        width: 12rem;
    }
}

.animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out forwards;
}

.animate-expand-width {
    animation: expand-width 1.5s ease-out 1s forwards;
}

.delay-200 {
    animation-delay: 0.2s;
}

.delay-400 {
    animation-delay: 0.4s;
}

.delay-600 {
    animation-delay: 0.6s;
}
</style>