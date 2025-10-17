<section class="relative bg-gray-50 text-gray-900 py-20 overflow-hidden">
    <div class="mb-8 max-w-7xl mx-auto px-6 lg:px-8" data-aos="fade-up" data-aos-delay="300">
    <div class="text-center mb-6" data-aos="fade-up">
        <h2 class="text-3xl md:text-5xl font-bold mb-6">
            <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                Nos  services
            </span>
            <br>
            <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                d'Accompagnement & Conseils
            </span>
        </h2>
        <div class="w-32 h-1 bg-gradient-to-r from-cyan-700 to-purple-500 mx-auto rounded-full"></div>
    </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
            $services = [
                ['title'=>'Analyse stratégique et planification','desc'=>'Nous vous aidons à évaluer vos performances actuelles et à définir une feuille de route claire.','features'=>['Diagnostic organisationnel','Élaboration de stratégies de croissance','Identification des opportunités d\'amélioration'],'icon'=>'📊','color'=>'from-emerald-500 to-teal-500'],
                ['title'=>'Gestion de projet et transformation','desc'=>'Nos experts vous accompagnent dans la mise en œuvre de projets complexes.','features'=>['Planification et coordination de projets','Formation et accompagnement des équipes','Suivi des performances et ajustements'],'icon'=>'🚀','color'=>'from-teal-500 to-cyan-500'],
                ['title'=>'Optimisation des processus métiers','desc'=>'Améliorez votre productivité et réduisez vos coûts grâce à nos recommandations.','features'=>['Audit des processus existants','Recommandations pour l\'automatisation','Implémentation des solutions proposées'],'icon'=>'⚙️','color'=>'from-cyan-500 to-blue-500'],
                ['title'=>'Conseils en transformation numérique','desc'=>'Le digital est un levier incontournable pour la croissance.','features'=>['Évaluation de vos besoins numériques','Sélection des outils technologiques adaptés','Formation et intégration des nouvelles solutions'],'icon'=>'💻','color'=>'from-blue-500 to-indigo-500'],
                ['title'=>'Accompagnement en ressources humaines','desc'=>'Renforcez votre capital humain grâce à notre expertise.','features'=>['Planification des besoins en personnel','Conseils pour le recrutement et la rétention des talents','Stratégies de formation et de développement'],'icon'=>'👥','color'=>'from-indigo-500 to-purple-500'],
                ['title'=>'Veille stratégique et études de marché','desc'=>'Nos services incluent la collecte et l\'analyse de données clés pour mieux comprendre votre marché.','features'=>['Études de marché détaillées','Veille concurrentielle','Recommandations stratégiques basées sur les tendances'],'icon'=>'🔍','color'=>'from-purple-500 to-pink-500']
            ];
            @endphp

            @foreach($services as $index => $srv)
            <div class="group relative transform transition-all duration-700 hover:scale-105 hover:-translate-y-4" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                <div class="absolute inset-0 bg-gradient-to-r {{ $srv['color'] }} rounded-3xl blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700 scale-110"></div>
                <div class="relative bg-white shadow-xl rounded-3xl p-10 border border-gray-200 group-hover:border-gray-300 group-hover:shadow-2xl transition-all duration-500 h-full">
                    <div class="relative mb-8">
                        <div class="w-24 h-24 bg-gradient-to-r {{ $srv['color'] }} rounded-2xl flex items-center justify-center text-4xl shadow-2xl transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                            {{ $srv['icon'] }}
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-r {{ $srv['color'] }} rounded-2xl blur-xl opacity-0 group-hover:opacity-50 transition-all duration-500"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-gray-800 group-hover:text-gray-900 transition-all duration-300">
                        {{ $srv['title'] }}
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6 group-hover:text-gray-700 transition-colors duration-300">
                        {{ $srv['desc'] }}
                    </p>
                    <ul class="space-y-3">
                        @foreach($srv['features'] as $feat)
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-6 h-6 bg-gradient-to-r {{ $srv['color'] }} rounded-full flex items-center justify-center text-xs text-white font-bold mr-3 mt-0.5">✓</span>
                            <span class="text-gray-600 text-sm group-hover:text-gray-700 transition-colors duration-300">{{ $feat }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="absolute inset-0 bg-gradient-to-br {{ $srv['color'] }} opacity-0 group-hover:opacity-5 rounded-3xl transition-all duration-500"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>