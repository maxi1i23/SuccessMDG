<!-- Section Madagascar Avantages -->
<section class="relative py-16 bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50 overflow-hidden">
    <!-- Background effects -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-r from-purple-500/10 to-indigo-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-r from-blue-500/8 to-pink-500/8 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Title -->
        <div class="text-center mb-6">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                    Les Avantages de notre Stratégie Digitale
                </span>
            </h2>
            <div class="w-32 h-1 bg-gradient-to-r from-cyan-700 to-purple-500 mx-auto rounded-full"></div>
        </div>

        <!-- Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch">
            @php
            $madagascar_advantages = [
                ['title' => 'Coût compétitif', 'desc' => 'Des services de conseil et d\'accompagnement de qualité internationale à un prix particulièrement abordable.', 'icon' => '💎', 'color' => 'from-indigo-500 to-blue-500'],
                ['title' => 'Expertise locale', 'desc' => 'Une connaissance approfondie du marché local combinée à une vision internationale des affaires.', 'icon' => '🎯', 'color' => 'from-blue-500 to-purple-500'],
                ['title' => 'Portée internationale', 'desc' => 'Une expérience éprouvée avec des entreprises du monde entier et une compréhension des enjeux globaux.', 'icon' => '🌍', 'color' => 'from-purple-500 to-pink-500'],
                ['title' => 'Souplesse et réactivité', 'desc' => 'Une capacité d\'adaptation rapide à vos besoins et une réactivité optimale dans nos interventions.', 'icon' => '⚡', 'color' => 'from-pink-500 to-rose-500']
            ];
            @endphp

            @foreach($madagascar_advantages as $index => $advantage)
            <div class="group relative flex wow animate__animated animate__zoomIn" data-wow-delay="{{ $index * 0.2 }}s">
                <!-- Glow -->
                <div class="absolute inset-0 bg-gradient-to-r {{ $advantage['color'] }} rounded-3xl blur-2xl opacity-0 group-hover:opacity-25 transition-all duration-700 scale-110"></div>
                
                <!-- Card -->
                <div class="relative bg-white/90 backdrop-blur-xl rounded-3xl p-8 border border-white/40 shadow-2xl hover:shadow-3xl transform hover:scale-105 hover:-translate-y-3 transition-all duration-700 group-hover:bg-white/95 h-full flex flex-col justify-between">
                    
                    <!-- Icon -->
                    <div>
                        <div class="w-20 h-20 bg-gradient-to-r {{ $advantage['color'] }} rounded-3xl flex items-center justify-center text-3xl shadow-2xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 mx-auto relative overflow-hidden mb-6">
                            <div class="absolute inset-0 bg-gradient-to-r {{ $advantage['color'] }} opacity-20 blur-xl"></div>
                            <span class="relative">{{ $advantage['icon'] }}</span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl font-black mb-4 text-center">
                            <span class="bg-gradient-to-r {{ $advantage['color'] }} bg-clip-text text-transparent">
                                {{ $advantage['title'] }}
                            </span>
                        </h3>
                        
                        <!-- Description -->
                        <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-all duration-300 text-base text-center">
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
