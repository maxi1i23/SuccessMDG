{{-- Version Blade pour Laravel --}}
<section class="relative py-0 bg-white overflow-hidden mb-16">
    {{-- Background decorative elements --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-100 rounded-full opacity-20"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 bg-purple-100 rounded-full opacity-30"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-pink-100 rounded-full opacity-25"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Content Section --}}
            <div class="space-y-8">
                <div class="space-y-4">
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Pourquoi Nous 
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                            Choisir ?
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Découvrez les avantages qui nous distinguent de la concurrence
                    </p>
                </div>

                <div class="space-y-6">
                    {{-- Advantage 1 --}}
                    <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border border-blue-100 hover:shadow-lg transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Performance Exceptionnelle</h3>
                            <p class="text-gray-600 leading-relaxed">Des solutions optimisées pour une performance maximale et une expérience utilisateur fluide.</p>
                        </div>
                    </div>

                    {{-- Advantage 2 --}}
                    <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl border border-purple-100 hover:shadow-lg transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Qualité Garantie</h3>
                            <p class="text-gray-600 leading-relaxed">Un contrôle qualité rigoureux pour assurer l'excellence de chaque projet livré.</p>
                        </div>
                    </div>

                    {{-- Advantage 3 --}}
                    <div class="flex items-start space-x-4 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl border border-green-100 hover:shadow-lg transition-all duration-300">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Support Dédié</h3>
                            <p class="text-gray-600 leading-relaxed">Une équipe d'experts disponible pour vous accompagner à chaque étape de votre projet.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Image Section with Wave Shapes --}}
            <div class="relative">
                {{-- Wave shapes background --}}
                <div class="absolute inset-0 pointer-events-none">
                    {{-- Top wave --}}
                    <div class="absolute -top-10 -left-10 w-full h-32">
                        <svg viewBox="0 0 400 100" class="w-full h-full text-blue-200 opacity-60">
                            <path d="M0,50 Q100,10 200,50 T400,50 L400,100 L0,100 Z" fill="currentColor"/>
                        </svg>
                    </div>
                    
                    {{-- Bottom wave --}}
                    <div class="absolute -bottom-10 -right-10 w-full h-32">
                        <svg viewBox="0 0 400 100" class="w-full h-full text-purple-200 opacity-60 rotate-180">
                            <path d="M0,50 Q100,10 200,50 T400,50 L400,100 L0,100 Z" fill="currentColor"/>
                        </svg>
                    </div>
                    
                    {{-- Side wave --}}
                    <div class="absolute top-1/2 -right-16 w-32 h-full transform -translate-y-1/2">
                        <svg viewBox="0 0 100 400" class="w-full h-full text-pink-200 opacity-50 rotate-90">
                            <path d="M50,0 Q10,100 50,200 T50,400 L100,400 L100,0 Z" fill="currentColor"/>
                        </svg>
                    </div>
                    
                    {{-- Floating geometric shapes --}}
                    <div class="absolute top-16 right-16 w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full opacity-20 animate-pulse"></div>
                    <div class="absolute bottom-20 left-8 w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-500 transform rotate-45 opacity-25"></div>
                    <div class="absolute top-1/3 left-12 w-12 h-12 bg-gradient-to-br from-pink-400 to-pink-500 rounded-full opacity-30"></div>
                    
                    {{-- Curved lines --}}
                    <div class="absolute top-8 left-1/2 w-24 h-24 transform -translate-x-1/2">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-indigo-300 opacity-40">
                            <path d="M20,80 Q50,20 80,80" stroke="currentColor" stroke-width="3" fill="none"/>
                        </svg>
                    </div>
                </div>

                {{-- Main scrolling images container --}}
                <div class="relative z-10 group h-96 overflow-hidden rounded-3xl shadow-2xl">
                    {{-- Gradient overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 via-transparent to-purple-600/20 z-10"></div>
                    
                    {{-- Scrolling images container --}}
                    <div class="flex flex-col h-full animate-scroll-up">
                        {{-- Image 1 - Performance/Technology --}}
                        <div class="flex-shrink-0 h-96 relative">
                            <img 
                                src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1200&q=80" 
                                alt="Performance technologique exceptionnelle" 
                                class="w-full h-full object-cover"
                            />
                        </div>
                        
                        {{-- Image 2 - Quality/Team Support --}}
                        <div class="flex-shrink-0 h-96 relative">
                            <img 
                                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" 
                                alt="Équipe de support dédiée et qualité garantie" 
                                class="w-full h-full object-cover"
                            />
                        </div>
                        
                        {{-- Duplicate images for seamless loop --}}
                        <div class="flex-shrink-0 h-96 relative">
                            <img 
                                src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1200&q=80" 
                                alt="Performance technologique exceptionnelle" 
                                class="w-full h-full object-cover"
                            />
                        </div>
                        
                        <div class="flex-shrink-0 h-96 relative">
                            <img 
                                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" 
                                alt="Équipe de support dédiée et qualité garantie" 
                                class="w-full h-full object-cover"
                            />
                        </div>
                    </div>
                    
                    {{-- Decorative border --}}
                    <div class="absolute inset-0 border-4 border-white/20 rounded-3xl z-20"></div>
                </div>
                
                {{-- Floating badge --}}
                <div class="absolute bottom-4 left-4 md:-bottom-6 md:-left-6 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-2xl shadow-xl z-20">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="font-semibold">Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Custom CSS for scrolling animation --}}
    <style>
        @keyframes scroll-up {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(0);
            }
        }
        
        .animate-scroll-up {
            animation: scroll-up 8s ease-in-out infinite;
        }
        
        .animate-scroll-up:hover {
            animation-play-state: paused;
        }
    </style>
</section>