<section class="relative bg-gray-100 text-gray-900 py-24 overflow-hidden">
    <div class="mb-8 max-w-7xl mx-auto px-6 lg:px-8" data-aos="fade-up" data-aos-delay="300">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">
                <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                    Nos services
                </span>
                <br>
                <span class="bg-gradient-to-r from-cyan-700 via-gray-700 to-purple-600 bg-clip-text text-transparent">
                    en Traitement de Donnée
                </span>
            </h2>
        <div class="w-32 h-1 bg-gradient-to-r from-cyan-700 to-purple-500 mx-auto rounded-full"></div>            
    </div>

     <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $services = [
                ['title' => 'Saisie et organisation', 'desc' => 'Transformation des données brutes en formats exploitables avec précision et efficacité.', 'icon' => '📝', 'color' => 'from-cyan-500 to-blue-500'],
                ['title' => 'Nettoyage & validation', 'desc' => 'Correction et cohérence des bases de données pour une qualité optimale.', 'icon' => '🧹', 'color' => 'from-blue-500 to-indigo-500'],
                ['title' => 'Analyse & reporting', 'desc' => 'Extraction d\'insights pertinents et rapports détaillés pour vos décisions.', 'icon' => '📊', 'color' => 'from-indigo-500 to-purple-500'],
                ['title' => 'Digitalisation & archivage', 'desc' => 'Conversion papier → numérique et archivage sécurisé pour l\'avenir.', 'icon' => '💾', 'color' => 'from-purple-500 to-pink-500'],
                ['title' => 'Extraction web (scraping)', 'desc' => 'Données stratégiques collectées en ligne avec respect des réglementations.', 'icon' => '🌐', 'color' => 'from-pink-500 to-rose-500'],
                ['title' => 'Conversion de données', 'desc' => 'Compatibilité parfaite entre tous formats (CSV, XML, Excel, JSON...).', 'icon' => '🔄', 'color' => 'from-rose-500 to-orange-500'],
            ];
            @endphp

            @foreach($services as $index => $service)
            <div class="group relative transform transition-all duration-700 hover:scale-105 hover:-translate-y-4" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                <div class="absolute inset-0 bg-gradient-to-r {{ $service['color'] }} rounded-3xl blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700 scale-110"></div>
                <div class="relative bg-white shadow-xl rounded-3xl p-8 border border-gray-200 group-hover:border-gray-300 group-hover:shadow-2xl transition-all duration-500 h-full">
                    <div class="relative mb-8">
                        <div class="w-20 h-20 bg-gradient-to-r {{ $service['color'] }} rounded-2xl flex items-center justify-center text-3xl shadow-2xl transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                            {{ $service['icon'] }}
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-r {{ $service['color'] }} rounded-2xl blur-xl opacity-0 group-hover:opacity-50 transition-all duration-500"></div>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-2xl font-bold text-gray-800 group-hover:text-gray-900 transition-all duration-300">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                            {{ $service['desc'] }}
                        </p>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br {{ $service['color'] }} opacity-0 group-hover:opacity-5 rounded-3xl transition-all duration-500"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>