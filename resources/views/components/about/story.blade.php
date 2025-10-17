<!-- Section Notre Histoire - Cards Alignées et Couleurs Assorties au Hero -->
<section class="relative py-24 overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50">
    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-indigo-400/20 to-pink-400/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-cyan-400/10 to-blue-400/10 rounded-full blur-2xl animate-spin-slow"></div>
    </div>

    <!-- Floating particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-400/30 rounded-full animate-float"></div>
        <div class="absolute top-3/4 right-1/4 w-3 h-3 bg-purple-400/30 rounded-full animate-float-delayed"></div>
        <div class="absolute top-1/2 left-3/4 w-1 h-1 bg-indigo-400/40 rounded-full animate-bounce-slow"></div>
    </div>

    <!-- Main content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 items-stretch gap-8">
            <!-- Enhanced text section - Card alignée -->
            <div class="group flex">
                <div class="relative w-full">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-2xl rotate-12 group-hover:rotate-45 transition-transform duration-700"></div>
                    <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 p-8 h-full flex flex-col justify-center transform hover:scale-[1.02] transition-all duration-500 hover:shadow-3xl">
                        <!-- Glowing border effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-pink-500/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"></div>
                        
                        <!-- Title with hero colors -->
                        <h2 class="relative mb-6">
                            <span class="block text-4xl lg:text-5xl xl:text-6xl font-black mb-3">
                                <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-700 bg-clip-text text-transparent animate-gradient-x">
                                    Notre
                                </span>
                            </span>
                            <span class="block text-4xl lg:text-5xl xl:text-6xl font-black">
                                <span class="bg-gradient-to-r from-purple-600 via-pink-600 to-blue-600 bg-clip-text text-transparent animate-gradient-x-delayed">
                                    Histoire
                                </span>
                            </span>
                            <!-- Decorative underline -->
                            <div class="absolute -bottom-2 left-0 w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-700 origin-left"></div>
                        </h2>

                        <!-- Enhanced paragraph -->
                        <div class="relative">
                            <!-- Quote mark decoration -->
                            <div class="absolute -top-3 -left-3 text-5xl text-blue-200/50 font-serif">"</div>
                            <p class="text-slate-700 text-base lg:text-lg xl:text-xl leading-relaxed font-medium text-justify relative z-10 group-hover:text-slate-800 transition-colors duration-300">
                                <span class="bg-gradient-to-r from-slate-700 to-slate-800 bg-clip-text text-transparent">
                                    {{ $presentation->historique ?? 'Success MDG est une entreprise basée à Madagascar, spécialisée dans l’externalisation de services. Fondée sur des valeurs d’excellence, d’innovation et de fiabilité, notre mission est de fournir des solutions de haute qualité qui répondent aux besoins spécifiques de chaque client. Notre équipe est composée de professionnels expérimentés dans divers domaines, garantissant des services de premier ordre. Nous croyons que chaque entreprise est unique, et c’est pourquoi nous offrons des solutions personnalisées adaptées à vos besoins spécifiques.' }}
                                </span>
                            </p>
                            <div class="absolute -bottom-3 -right-3 text-5xl text-purple-200/50 font-serif rotate-180">"</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced image section - Card alignée -->
            <div class="relative group/image flex">
                <div class="relative w-full transform hover:scale-105 transition-all duration-700">
                    <!-- Glowing background -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 via-purple-500/30 to-pink-500/30 rounded-3xl blur-2xl scale-110 opacity-0 group-hover/image:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Main image container -->
                    <div class="relative bg-white/10 backdrop-blur-sm rounded-3xl p-4 shadow-2xl border border-white/20 h-full flex flex-col">
                        <!-- Image with overlay effects -->
                        <div class="relative overflow-hidden rounded-2xl flex-1">
                            <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?auto=format&fit=crop&w=800&q=80" 
                                 alt="Notre histoire" 
                                 class="w-full h-full object-cover transform group-hover/image:scale-110 transition-transform duration-700">
                            
                            <!-- Gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover/image:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Shine effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full group-hover/image:translate-x-full transition-transform duration-1000"></div>
                        </div>
                        
                        <!-- Floating badge -->
                        <div class="absolute -top-4 -right-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-3 rounded-2xl shadow-lg transform rotate-3 group-hover/image:rotate-6 transition-transform duration-300">
                            <span class="font-bold text-sm">Success MDG</span>
                        </div>
                    </div>

                    <!-- Decorative elements around image -->
                    <div class="absolute -top-8 -left-8 w-16 h-16 bg-gradient-to-br from-blue-400/30 to-purple-400/30 rounded-2xl rotate-12 group-hover/image:rotate-45 transition-transform duration-700"></div>
                    <div class="absolute -bottom-8 -right-8 w-20 h-20 bg-gradient-to-br from-purple-400/30 to-pink-400/30 rounded-2xl rotate-45 group-hover/image:rotate-90 transition-transform duration-700"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced wave decoration -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-0">
        <svg class="block w-full h-40 text-gradient" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150" preserveAspectRatio="none">
            <defs>
                <linearGradient id="waveGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#e2e8f0;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#cbd5e1;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#94a3b8;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path fill="url(#waveGradient)" d="M0,120 C360,0 1080,180 1440,60 L1440,150 L0,150 Z"></path>
        </svg>
    </div>
</section>

<!-- Required custom CSS for animations -->
<style>
@keyframes gradient-x {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

@keyframes gradient-x-delayed {
    0%, 100% { background-position: 100% 50%; }
    50% { background-position: 0% 50%; }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
}

@keyframes bounce-slow {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes spin-slow {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.animate-gradient-x {
    background-size: 200% 200%;
    animation: gradient-x 3s ease infinite;
}

.animate-gradient-x-delayed {
    background-size: 200% 200%;
    animation: gradient-x-delayed 3s ease infinite;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
}

.animate-bounce-slow {
    animation: bounce-slow 4s ease-in-out infinite;
}

.animate-spin-slow {
    animation: spin-slow 20s linear infinite;
}

.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}
</style>