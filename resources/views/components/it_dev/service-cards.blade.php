<section class="relative bg-gray-50 text-gray-900 py-20 overflow-hidden">
    <!-- Titre de la section -->
    <div class="text-center mb-6" data-aos="fade-up">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">
            <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                Nos principaux services
            </span>
            <br>
            <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                en IT & Développement technologique
            </span>
        </h2>
        <div class="w-32 h-1 bg-gradient-to-r from-cyan-700 to-purple-500 mx-auto rounded-full"></div>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto px-6" data-aos="fade-up" data-aos-delay="200">
    @php
    $services = [
        ['title' => 'Développement de logiciels personnalisés','desc' => 'Transformez vos idées en solutions fonctionnelles : applications mobiles, outils internes, logiciels SaaS.','icon' => '💻','color' => 'from-blue-500 to-purple-500','hover_color' => 'from-blue-400 to-purple-400'],
        ['title' => 'Création et gestion de sites web','desc' => 'Sites vitrines, e-commerce et plateformes complexes avec design moderne et SEO optimisé.','icon' => '🌐','color' => 'from-pink-500 to-red-500','hover_color' => 'from-pink-400 to-red-400'],
        ['title' => 'Services Cloud et DevOps','desc' => 'Optimisation de vos opérations cloud, maintenance et collaboration DevOps efficace.','icon' => '☁️','color' => 'from-indigo-500 to-blue-500','hover_color' => 'from-indigo-400 to-blue-400'],
        ['title' => 'Sécurité informatique & maintenance','desc' => 'Protection des données sensibles et maintenance proactive de vos infrastructures IT.','icon' => '🛡️','color' => 'from-yellow-500 to-orange-500','hover_color' => 'from-yellow-400 to-orange-400'],
        ['title' => 'Intelligence artificielle & Big Data','desc' => 'Exploitez vos données pour des décisions éclairées avec IA et analyse prédictive.','icon' => '🤖','color' => 'from-green-400 to-teal-500','hover_color' => 'from-green-300 to-teal-400'],
        ['title' => 'Consultation & Stratégie IT','desc' => 'Accompagnement stratégique pour optimiser votre transformation digitale et vos investissements technologiques.','icon' => '📊','color' => 'from-purple-500 to-pink-500','hover_color' => 'from-purple-400 to-pink-400']
    ];
    @endphp

    @foreach($services as $index => $service)
    <div class="group relative transform transition-all duration-700 hover:scale-105 hover:-translate-y-4 wow animate__animated animate__fadeInUp" 
         data-wow-delay="{{ $index * 0.1 }}s" data-wow-duration="0.9s">
        <div class="absolute inset-0 bg-gradient-to-r {{ $service['color'] }} rounded-3xl blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700 scale-110"></div>
        <div class="relative bg-white shadow-xl rounded-3xl p-8 border border-gray-200 group-hover:border-gray-300 group-hover:shadow-2xl transition-all duration-500 h-full">
            <div class="relative mb-8">
                <div class="flex items-center justify-center w-24 h-24 rounded-2xl bg-gradient-to-r {{ $service['color'] }} shadow-2xl transition-all duration-500 group-hover:scale-110 group-hover:rotate-6 text-4xl">
                    {{ $service['icon'] }}
                </div>
                <div class="absolute inset-0 bg-gradient-to-r {{ $service['hover_color'] }} rounded-2xl blur-xl opacity-0 group-hover:opacity-50 transition-all duration-500"></div>
            </div>
            <div class="space-y-4">
                <h4 class="text-2xl font-bold text-gray-800 transition-all duration-300">
                    {{ $service['title'] }}
                </h4>
                <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                    {{ $service['desc'] }}
                </p>
            </div>
            <div class="absolute inset-0 bg-gradient-to-br {{ $service['color'] }} opacity-0 group-hover:opacity-5 rounded-3xl transition-all duration-500"></div>
        </div>
    </div>
    @endforeach
</div>
</section>