<section class="relative py-32 overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-50">
    <!-- Animated background elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-indigo-400/20 to-cyan-400/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <!-- Floating geometric shapes -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/6 w-4 h-4 bg-blue-400/30 rotate-45 animate-float"></div>
        <div class="absolute top-3/4 right-1/6 w-3 h-3 bg-purple-400/30 rounded-full animate-float-delayed"></div>
        <div class="absolute top-1/2 left-3/4 w-2 h-2 bg-indigo-400/40 rotate-45 animate-bounce-slow"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12 items-stretch">

            <!-- Mission Card -->
            <div class="group relative h-full">
                <!-- Glowing background effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 via-indigo-500/20 to-purple-500/20 rounded-3xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Main card -->
                <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 p-12 transform hover:scale-105 hover:-translate-y-4 transition-all duration-700 overflow-hidden h-full flex flex-col justify-between min-h-[500px]">
                    
                    <!-- Decorative corner elements -->
                    <div class="absolute top-6 right-6 w-12 h-12 border-2 border-blue-200/50 rounded-full animate-spin-slow"></div>
                    <div class="absolute bottom-6 left-6 w-8 h-8 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-lg rotate-45 group-hover:rotate-90 transition-transform duration-500"></div>
                    
                    <!-- Content wrapper -->
                    <div class="flex flex-col items-center text-center flex-grow">
                        <!-- Enhanced icon container -->
                        <div class="relative mb-8 flex justify-center">
                            <div class="relative">
                                <!-- Icon background with gradient -->
                                <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl flex items-center justify-center shadow-lg transform group-hover:rotate-12 transition-transform duration-500">
                                    <i class="fas fa-bullseye text-3xl text-white"></i>
                                </div>
                                <!-- Floating particles around icon -->
                                <div class="absolute -top-2 -right-2 w-3 h-3 bg-blue-400/60 rounded-full animate-ping"></div>
                                <div class="absolute -bottom-2 -left-2 w-2 h-2 bg-indigo-400/60 rounded-full animate-pulse"></div>
                            </div>
                        </div>

                        <!-- Enhanced title -->
                        <h3 class="text-3xl font-bold mb-6">
                            <span class="bg-gradient-to-r from-blue-700 to-indigo-700 bg-clip-text text-transparent">
                                Notre Mission
                            </span>
                        </h3>

                        <!-- Enhanced description -->
                        <div class="relative flex-grow flex items-center">
                            <!-- Quote decoration -->
                            <div class="absolute -top-4 -left-4 text-4xl text-blue-200/50 font-serif">"</div>
                            <p class="text-gray-700 text-lg leading-relaxed relative z-10 px-4 group-hover:text-gray-800 transition-colors duration-300">
                                {{ $presentation->mission ?? "Chez Success MDG, notre mission est de vous aider à optimiser vos processus métiers, à améliorer votre relation client et à tirer parti des technologies numériques pour stimuler votre croissance." }}
                            </p>
                            <div class="absolute -bottom-4 -right-4 text-4xl text-indigo-200/50 font-serif rotate-180">"</div>
                        </div>
                    </div>

                    <!-- Progress indicator -->
                    <div class="mt-8 flex justify-center">
                        <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-700 origin-center"></div>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="group relative h-full">
                <!-- Glowing background effect -->
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 via-pink-500/20 to-rose-500/20 rounded-3xl blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Main card -->
                <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/20 p-12 transform hover:scale-105 hover:-translate-y-4 transition-all duration-700 overflow-hidden h-full flex flex-col justify-between min-h-[500px]">
                    
                    <!-- Decorative corner elements -->
                    <div class="absolute top-6 right-6 w-12 h-12 border-2 border-purple-200/50 rounded-full animate-spin-slow"></div>
                    <div class="absolute bottom-6 left-6 w-8 h-8 bg-gradient-to-br from-purple-400/20 to-pink-400/20 rounded-lg rotate-45 group-hover:rotate-90 transition-transform duration-500"></div>
                    
                    <!-- Content wrapper -->
                    <div class="flex flex-col items-center text-center flex-grow">
                        <!-- Enhanced icon container -->
                        <div class="relative mb-8 flex justify-center">
                            <div class="relative">
                                <!-- Icon background with gradient -->
                                <div class="w-20 h-20 bg-gradient-to-br from-purple-600 to-pink-700 rounded-2xl flex items-center justify-center shadow-lg transform group-hover:rotate-12 transition-transform duration-500">
                                    <i class="fas fa-eye text-3xl text-white"></i>
                                </div>
                                <!-- Floating particles around icon -->
                                <div class="absolute -top-2 -right-2 w-3 h-3 bg-purple-400/60 rounded-full animate-ping"></div>
                                <div class="absolute -bottom-2 -left-2 w-2 h-2 bg-pink-400/60 rounded-full animate-pulse"></div>
                            </div>
                        </div>

                        <!-- Enhanced title -->
                        <h3 class="text-3xl font-bold mb-6">
                            <span class="bg-gradient-to-r from-purple-700 to-pink-700 bg-clip-text text-transparent">
                                Notre Vision
                            </span>
                        </h3>

                        <!-- Enhanced description -->
                        <div class="relative flex-grow flex items-center">
                            <!-- Quote decoration -->
                            <div class="absolute -top-4 -left-4 text-4xl text-purple-200/50 font-serif">"</div>
                            <p class="text-gray-700 text-lg leading-relaxed relative z-10 px-4 group-hover:text-gray-800 transition-colors duration-300">
                                {{ $presentation->vision ?? "Nous nous engageons à fournir des solutions de haute qualité qui répondent aux besoins spécifiques de chaque client. Nos valeurs fondamentales incluent l’excellence, l’innovation, la fiabilité et la transparence. Nous croyons que la confiance est la base de toute relation d’affaires réussie, et c’est pourquoi nous mettons un point d’honneur à être transparents et fiables.." }}
                            </p>
                            <div class="absolute -bottom-4 -right-4 text-4xl text-pink-200/50 font-serif rotate-180">"</div>
                        </div>
                    </div>

                    <!-- Progress indicator -->
                    <div class="mt-8 flex justify-center">
                        <div class="w-16 h-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform duration-700 origin-center"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom decorative element -->
        <div class="mt-20 flex justify-center">
            <div class="flex space-x-4">
                <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full animate-pulse"></div>
                <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full animate-pulse delay-200"></div>
            </div>
        </div>
    </div>

    <!-- Bottom wave decoration -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-0">
        <svg class="block w-full h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150" preserveAspectRatio="none">
            <defs>
                <linearGradient id="missionWaveGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#f8fafc;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#e2e8f0;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#f8fafc;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path fill="url(#missionWaveGradient)" d="M0,120 C360,0 1080,180 1440,60 L1440,150 L0,150 Z"></path>
        </svg>
    </div>
</section>

<!-- Enhanced custom CSS for animations -->
<style>
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(180deg); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px) scale(1); }
    50% { transform: translateY(-10px) scale(1.1); }
}

@keyframes bounce-slow {
    0%, 100% { transform: translateY(0px) rotate(45deg); }
    50% { transform: translateY(-8px) rotate(225deg); }
}

@keyframes spin-slow {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
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

.delay-200 {
    animation-delay: 200ms;
}

/* Ensure FontAwesome icons are properly displayed */
.fas {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
}

/* Ensure text is selectable and accessible */
.bg-clip-text {
    -webkit-background-clip: text;
    background-clip: text;
}
</style>