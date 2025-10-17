<!-- Section Contenu avec Image Intégrée -->
<div class="relative mb-24 max-w-7xl mx-auto px-6 lg:px-8" data-aos="fade-up" data-aos-delay="100">
    <!-- Enhanced background effects -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/15 to-purple-500/15 rounded-3xl blur-2xl"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/5 to-indigo-400/5 rounded-3xl"></div>
    
    <!-- Main container -->
    <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl border border-white/30 shadow-2xl overflow-hidden">
        <div class="grid lg:grid-cols-2 items-center gap-0">
            <!-- Text content -->
            <div class="p-12 lg:p-16">
                <!-- Badge -->
                <div class="inline-block mb-6">
                    <span class="px-4 py-2 bg-gradient-to-r from-blue-500/20 to-purple-500/20 border border-blue-400/30 rounded-full text-sm font-bold text-blue-700 backdrop-blur-sm">
                        💡 Notre Vision
                    </span>
                </div>
                
                <!-- Enhanced text -->
                <p class="text-gray-700 text-lg lg:text-xl leading-relaxed mb-6">
                    Dans un monde où les données sont au cœur de chaque décision stratégique, 
                    <span class="font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Success MDG</span> 
                    se positionne comme votre partenaire clé.
                </p>
                
                <p class="text-gray-600 text-base lg:text-lg leading-relaxed">
nous offrons un service complet qui garantit la qualité et la confidentialité, tout en optimisant vos opérations                    <span class="font-semibold text-blue-600">collecter</span>, 
                    <span class="font-semibold text-purple-600">organiser</span> et 
                    <span class="font-semibold text-indigo-600">analyser ousécuriser vos données</span> à vos besoins spécifiques.
                </p>

                <!-- Stats or features -->
                <div class="flex flex-wrap gap-4 mt-8">
                    <div class="flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full">
                        <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                        <span class="text-sm font-medium text-blue-700">Solutions fiables</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-purple-50 rounded-full">
                        <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                        <span class="text-sm font-medium text-purple-700">Économiques</span>
                    </div>
                    <div class="flex items-center gap-2 px-4 py-2 bg-indigo-50 rounded-full">
                        <div class="w-2 h-2 bg-indigo-500 rounded-full"></div>
                        <span class="text-sm font-medium text-indigo-700">Sur mesure</span>
                    </div>
                </div>
            </div>

            <!-- Image section -->
            <div class="relative h-full min-h-[400px] lg:min-h-[500px]">
                <!-- Image container -->
                <div class="absolute inset-0 overflow-hidden rounded-r-3xl lg:rounded-r-3xl">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=800&q=80" 
                         alt="Traitement de données Success MDG"
                         class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700">
                    
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-l from-transparent via-blue-500/10 to-blue-500/20"></div>
                    
                    <!-- Floating elements -->
                    <div class="absolute top-8 right-8 w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    
                    <!-- Bottom badge -->
                    <div class="absolute bottom-8 left-8 px-4 py-2 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-sm font-bold text-gray-700">Données en temps réel</span>
                        </div>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full opacity-60 animate-pulse"></div>
                <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-60 animate-pulse delay-1000"></div>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced CSS -->
<style>
@keyframes pulse {
    0%, 100% { opacity: 0.6; }
    50% { opacity: 1; }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.delay-1000 {
    animation-delay: 1s;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .grid.lg\\:grid-cols-2 > div:last-child {
        order: -1;
    }
    
    .min-h-\[400px\] {
        min-height: 300px;
    }
    
    .rounded-r-3xl {
        border-radius: 1.5rem 1.5rem 0 0;
    }
}
</style>