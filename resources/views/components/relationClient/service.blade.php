<!-- Section Nos Services avec titre stylé -->
<section class="relative bg-gray-50 py-8 overflow-hidden ">
    <!-- Background decorative elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-r from-blue-500/5 to-cyan-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-32 right-20 w-80 h-80 bg-gradient-to-r from-emerald-500/5 to-teal-500/5 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 ">
        <!-- Titre stylé centré -->
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                    Nos services
                </span>
                <br>
                <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                    en Solution BPO
                </span>
            </h2>
        <div class="w-32 h-1 bg-gradient-to-r from-cyan-700 to-purple-500 mx-auto rounded-full"></div>
            
        </div>

        <!-- Grid des services avec style cohérent -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-32 max-w-7xl mx-auto px-6" data-aos="fade-up" data-aos-delay="150">
            @php
            $bpo_services = [
                ['title'=>'Gestion multicanale','desc'=>'Prise en charge complète de vos interactions client sur tous les canaux de communication.','icon'=>'📞','color'=>'from-emerald-400 to-teal-500','hover_color'=>'from-emerald-300 to-teal-400','border'=>'border-emerald-500/20'],
                ['title'=>'Service client 24/7','desc'=>'Disponibilité permanente pour répondre aux besoins de vos clients à tout moment.','icon'=>'⏰','color'=>'from-teal-500 to-cyan-500','hover_color'=>'from-teal-400 to-cyan-400','border'=>'border-teal-500/20'],
                ['title'=>'Téléprospection & génération de leads','desc'=>'Identification et conversion de prospects qualifiés pour développer votre business.','icon'=>'📈','color'=>'from-cyan-500 to-blue-500','hover_color'=>'from-cyan-400 to-blue-400','border'=>'border-cyan-500/20'],
                ['title'=>'Gestion des back-office','desc'=>'Délégation des tâches administratives pour optimiser votre productivité.','icon'=>'🗂️','color'=>'from-blue-500 to-purple-500','hover_color'=>'from-blue-400 to-purple-400','border'=>'border-blue-500/20'],
                ['title'=>'Enquêtes & études de marché','desc'=>'Collecte de données qualitatives et quantitatives pour éclairer vos décisions.','icon'=>'📊','color'=>'from-purple-500 to-pink-500','hover_color'=>'from-purple-400 to-pink-400','border'=>'border-purple-500/20'],
                ['title'=>'Support technique spécialisé','desc'=>'Assistance technique experte pour résoudre les problèmes de vos clients.','icon'=>'🛠️','color'=>'from-pink-500 to-red-500','hover_color'=>'from-pink-400 to-red-400','border'=>'border-pink-500/20']
            ];
            @endphp

            @foreach($bpo_services as $service)
            <div class="group relative transform transition-all duration-700 hover:scale-105 hover:-translate-y-4 wow animate__animated animate__fadeInUp"
                 data-wow-duration="0.9s">
                <!-- Glow effect -->
                <div class="absolute inset-0 bg-gradient-to-r {{ $service['color'] }} rounded-3xl blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700 scale-110"></div>
                
                <!-- Card avec style cohérent -->
                <div class="relative bg-white shadow-xl rounded-3xl p-8 border border-gray-200 group-hover:border-gray-300 group-hover:shadow-2xl transition-all duration-500 h-full">
                    <!-- Icon avec style amélioré -->
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-r {{ $service['color'] }} rounded-2xl flex items-center justify-center text-3xl shadow-2xl transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                            {{ $service['icon'] }}
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-r {{ $service['hover_color'] }} rounded-2xl blur-xl opacity-0 group-hover:opacity-50 transition-all duration-500"></div>
                    </div>
                    
                    <!-- Content avec style cohérent -->
                    <div class="space-y-4">
                        <h4 class="text-2xl font-bold text-gray-800 group-hover:text-gray-900 transition-all duration-300">
                            {{ $service['title'] }}
                        </h4>
                        <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            {{ $service['desc'] }}
                        </p>
                    </div>
                    
                    <!-- Hover indicator amélioré -->
                    <div class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r {{ $service['color'] }} rounded-b-3xl group-hover:w-full transition-all duration-500"></div>
                    <div class="absolute inset-0 bg-gradient-to-br {{ $service['color'] }} opacity-0 group-hover:opacity-5 rounded-3xl transition-all duration-500"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>