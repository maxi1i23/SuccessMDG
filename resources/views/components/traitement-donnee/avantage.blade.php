<!-- Section Avantages Classe avec Titre -->
<section class="relative py-10 bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50 overflow-hidden">
    <!-- Background effects -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-r from-purple-500/8 to-cyan-500/8 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Title Section -->
        <div class="text-center mb-16">
            <!-- Main Title -->
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-black mb-4 leading-tight">
                <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                    Nos Avantages
                </span>
                <br>
                <span class="relative">
                    <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                        Concurrentiels
                    </span>
                    <div class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-rfrom-cyan-700 via-gray-700 to-purple-600 rounded-full shadow-lg"></div>
                </span>
            </h2>

            <!-- Subtitle -->
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mt-8">
                Découvrez pourquoi 
                <span class="font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Success MDG</span> 
                est le partenaire idéal pour vos projets de traitement de données
            </p>
        </div>

        <!-- Advantages Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch mb-16">
            @php
            $advantages = [
                ['title' => 'Expertise reconnue', 'desc' => 'Nos équipes maîtrisent les outils récents pour un traitement précis et efficace.', 'icon' => '🎯', 'color' => 'from-cyan-500 to-blue-500'],
                ['title' => 'Confidentialité', 'desc' => 'Des protocoles stricts pour protéger vos informations sensibles.', 'icon' => '🔒', 'color' => 'from-blue-500 to-indigo-500'],
                ['title' => 'Réduction des coûts', 'desc' => 'Externaliser à Madagascar réduit vos dépenses sans perte de qualité.', 'icon' => '💰', 'color' => 'from-indigo-500 to-purple-500'],
                ['title' => 'Productivité', 'desc' => 'Concentrez-vous sur vos activités principales, on s\'occupe du reste.', 'icon' => '⚡', 'color' => 'from-purple-500 to-pink-500']
            ];
            @endphp

            @foreach($advantages as $index => $advantage)
            <div class="group relative flex wow animate__animated animate__zoomIn" data-wow-delay="{{ $index * 0.2 }}s">
                <!-- Glow -->
                <div class="absolute inset-0 bg-gradient-to-r {{ $advantage['color'] }} rounded-3xl blur-2xl opacity-0 group-hover:opacity-25 transition-all duration-700 scale-110"></div>
                
                <!-- Card -->
                <div class="relative bg-white/90 backdrop-blur-xl rounded-3xl p-8 border border-white/40 shadow-2xl hover:shadow-3xl transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 group-hover:bg-white/95 h-full flex flex-col justify-between">
                    
                    <!-- Icon -->
                    <div>
                        <div class="relative mb-6">
                            <div class="w-20 h-20 bg-gradient-to-r {{ $advantage['color'] }} rounded-3xl flex items-center justify-center text-3xl shadow-2xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 relative overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r {{ $advantage['color'] }} opacity-20 blur-xl"></div>
                                <span class="relative">{{ $advantage['icon'] }}</span>
                            </div>
                            <div class="absolute -top-2 -right-2 w-4 h-4 bg-gradient-to-r {{ $advantage['color'] }} rounded-full opacity-60 group-hover:opacity-100 group-hover:scale-125 transition-all duration-500"></div>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-black mb-4">
                            <span class="bg-gradient-to-r {{ $advantage['color'] }} bg-clip-text text-transparent">
                                {{ $advantage['title'] }}
                            </span>
                        </h3>
                        
                        <!-- Description -->
                        <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-all duration-300 text-base">
                            {{ $advantage['desc'] }}
                        </p>
                    </div>

                    <!-- Decorative line -->
                    <div class="absolute bottom-0 left-8 right-8 h-px bg-gradient-to-r {{ $advantage['color'] }} opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
