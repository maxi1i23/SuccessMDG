<!-- Section Avantages avec WOW.js -->
<section class="relative py-20 bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50 overflow-hidden">
    <!-- Effets de fond -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-r from-purple-500/8 to-cyan-500/8 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Titre principal -->
        <div class="text-center mb-20 wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                    Nos avantages concurrentiels
                </span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-cyan-700 to-purple-500 mx-auto rounded-full mb-6"></div>

            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Découvrez pourquoi 
                <span class="font-bold bg-gradient-to-r from-cyan-700 to-green-600 bg-clip-text text-transparent">Success MDG</span> 
                est le meilleur choix pour atteindre vos objectifs commerciaux.
            </p>
        </div>

        <!-- Grille des avantages -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            @php
            $advantages = [
                ['title' => 'Expertise multidisciplinaire', 'desc' => 'Notre équipe combine des compétences en stratégie, en gestion, et en technologies pour répondre à vos besoins les plus complexes.', 'icon' => '🎯', 'color' => 'from-cyan-500 to-blue-500'],
                ['title' => 'Service sur mesure', 'desc' => 'Chaque entreprise est unique. Nous analysons votre situation pour proposer des solutions adaptées à votre secteur, vos objectifs et vos ressources.', 'icon' => '🧩', 'color' => 'from-blue-500 to-indigo-500'],
                ['title' => 'Un avantage compétitif', 'desc' => 'En collaborant avec Success MDG, vous bénéficiez d’idées innovantes et de stratégies éprouvées pour rester compétitif sur le marché mondial.', 'icon' => '🚀', 'color' => 'from-indigo-500 to-purple-500'],
                ['title' => 'Approche collaborative', 'desc' => 'Nous travaillons main dans la main avec vos équipes pour garantir l’adhésion et l’efficacité de nos recommandations.', 'icon' => '🤝', 'color' => 'from-purple-500 to-pink-500']
            ];
            @endphp

            @foreach($advantages as $index => $advantage)
            <div class="group relative wow fadeInUp" data-wow-delay="{{ 0.3 + ($index * 0.2) }}s">
                <!-- Effet de halo -->
                <div class="absolute inset-0 bg-gradient-to-r {{ $advantage['color'] }} rounded-3xl blur-2xl opacity-0 group-hover:opacity-25 transition-all duration-700 scale-110"></div>
                
                <!-- Card -->
                <div class="relative flex flex-col justify-between h-full bg-white/90 backdrop-blur-xl rounded-3xl p-8 border border-white/40 shadow-2xl hover:shadow-3xl transform transition-all duration-700 hover:scale-105 hover:-translate-y-3 group-hover:bg-white/95">
                    <!-- Icône -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-r {{ $advantage['color'] }} rounded-3xl flex items-center justify-center text-3xl shadow-2xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r {{ $advantage['color'] }} opacity-20 blur-xl"></div>
                            <span class="relative">{{ $advantage['icon'] }}</span>
                        </div>
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-gradient-to-r {{ $advantage['color'] }} rounded-full opacity-60 group-hover:opacity-100 group-hover:scale-125 transition-all duration-500"></div>
                    </div>

                    <!-- Titre -->
                    <h3 class="text-2xl font-black mb-4">
                        <span class="bg-gradient-to-r {{ $advantage['color'] }} bg-clip-text text-transparent">
                            {{ $advantage['title'] }}
                        </span>
                    </h3>

                    <!-- Description -->
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-all duration-300 text-base">
                        {{ $advantage['desc'] }}
                    </p>

                    <!-- Ligne décorative -->
                    <div class="absolute bottom-0 left-8 right-8 h-px bg-gradient-to-r {{ $advantage['color'] }} opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CSS -->
<style>
@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.6; }
}

.animate-pulse {
    animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.delay-1000 {
    animation-delay: 1s;
}

.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

.wow {
    visibility: hidden;
}
</style>


