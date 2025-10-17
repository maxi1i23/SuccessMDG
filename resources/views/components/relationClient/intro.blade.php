<!-- Card large avec image et animation -->
<div class="max-w-6xl mx-auto p-6">
    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-2xl transition-all duration-500 hover:scale-[1.02] group">
        <div class="flex flex-col lg:flex-row">
            <!-- Section Image -->
            <div class="lg:w-2/5 relative overflow-hidden">
                <div class="h-64 lg:h-full bg-gradient-to-br from-cyan-100 via-gray-100 to-purple-100 flex items-center justify-center relative">
                    <!-- Image placeholder avec animation -->
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-200/50 via-gray-200/50 to-purple-200/50 animate-pulse-slow"></div>
                    
                    <!-- Icône stylée comme placeholder -->
                    <div class="relative z-10 text-center">
                        <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-cyan-500 to-yellow-500 rounded-full flex items-center justify-center shadow-lg animate-float">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <p class="text-sm font-semibold text-gray-600">Success MDG</p>
                    </div>
                    
                    <!-- Éléments décoratifs animés -->
                    <div class="absolute top-4 right-4 w-3 h-3 bg-cyan-400 rounded-full animate-ping"></div>
                    <div class="absolute bottom-6 left-6 w-2 h-2 bg-purple-400 rounded-full animate-pulse delay-300"></div>
                    <div class="absolute top-1/2 left-4 w-1 h-1 bg-gray-400 rounded-full animate-pulse delay-500"></div>
                </div>
            </div>
            
            <!-- Section Contenu -->
            <div class="lg:w-3/5 p-8 lg:p-10">
                <!-- Header -->
                <div class="mb-6">
                    <h2 class="text-2xl lg:text-3xl font-bold text-gray-800 mb-4 group-hover:translate-x-1 transition-transform duration-300">
                        <span class="bg-gradient-to-r from-cyan-700 via-green-700 to-orange-700 bg-clip-text text-transparent">
                            Optimisez vos interactions client avec Success MDG
                        </span>
                    </h2>
                    
                    <!-- Ligne décorative animée -->
                    <div class="w-0 group-hover:w-20 h-1 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full transition-all duration-500 ease-out"></div>
                </div>
                
                <!-- Contenu -->
                <div class="space-y-4 mb-8">
                    <p class="text-gray-600 leading-relaxed text-lg group-hover:text-gray-700 transition-colors duration-300">
                        Dans un monde où la relation client est au cœur de la stratégie des entreprises, 
                        <span class="font-semibold text-gray-800">Success MDG</span> se positionne comme un partenaire de choix 
                        pour l'externalisation de vos processus métiers (BPO) et de vos services de relation client.
                    </p>
                    
                    <p class="text-gray-600 leading-relaxed text-lg group-hover:text-gray-700 transition-colors duration-300">
                        Basés à <span class="font-semibold text-cyan-700">Madagascar</span>, nous mettons à votre disposition 
                        une expertise locale reconnue et des solutions adaptées aux besoins des entreprises internationales.
                    </p>
                    
                    <p class="text-gray-600 leading-relaxed text-lg group-hover:text-gray-700 transition-colors duration-300">
                        Que vous souhaitiez améliorer la satisfaction client, optimiser vos coûts ou gérer un volume croissant 
                        d'interactions, nos services BPO offrent des 
                        <span class="font-semibold text-purple-700">résultats mesurables</span> et une 
                        <span class="font-semibold text-gray-800">flexibilité sans égale</span>.
                    </p>
                </div>
                
                <!-- Footer avec éléments décoratifs -->
                <div class="flex items-center justify-between">
                    <div class="flex space-x-3">
                        <div class="w-3 h-3 bg-cyan-500 rounded-full animate-bounce delay-0"></div>
                        <div class="w-3 h-3 bg-gray-500 rounded-full animate-bounce delay-100"></div>
                        <div class="w-3 h-3 bg-orange-500 rounded-full animate-bounce delay-200"></div>
                    </div>
                    
                    <!-- Badge avec animation -->
                    <div class="bg-gradient-to-r from-cyan-50 to-purple-50 px-4 py-2 rounded-full border border-gray-200 group-hover:border-cyan-300 transition-colors duration-300">
                        <span class="text-sm font-semibold bg-gradient-to-r from-cyan-700 to-orange-700 bg-clip-text text-transparent">
                            BPO Excellence
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles CSS -->
<style>
/* Animations personnalisées */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes pulse-slow {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 0.6; }
}

@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
}

@keyframes ping {
    75%, 100% { 
        transform: scale(2); 
        opacity: 0; 
    }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 3s ease-in-out infinite;
}

.animate-bounce {
    animation: bounce 2s infinite;
}

.animate-ping {
    animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
}

.delay-0 { animation-delay: 0s; }
.delay-100 { animation-delay: 0.1s; }
.delay-200 { animation-delay: 0.2s; }
.delay-300 { animation-delay: 0.3s; }
.delay-500 { animation-delay: 0.5s; }

/* Transitions */
.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.duration-300 { transition-duration: 300ms; }
.duration-500 { transition-duration: 500ms; }

.ease-out {
    transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}

/* Responsive */
@media (max-width: 1024px) {
    .lg\:flex-row {
        flex-direction: column;
    }
    
    .lg\:w-2\/5, .lg\:w-3\/5 {
        width: 100%;
    }
    
    .lg\:h-full {
        height: 16rem;
    }
}

@media (max-width: 768px) {
    .text-2xl { font-size: 1.5rem; }
    .text-3xl { font-size: 1.875rem; }
    .text-lg { font-size: 1rem; }
}
</style>