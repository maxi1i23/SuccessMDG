<section class="px-16 mb-12 mt-16 animate-fadeInUp" id="featured">
    <div class="max-w-6xl mx-auto">
        <div class="relative bg-gradient-to-r from-blue-50 via-purple-50 to-indigo-50 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500 group">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 via-purple-400 to-indigo-400 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute inset-[2px] bg-white rounded-3xl"></div>
            
            <div class="relative grid md:grid-cols-2 gap-0">
                <!-- Image -->
                <div class="relative h-64 md:h-full overflow-hidden">
                    <img id="featuredImage" alt="Article en vedette" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent"></div>
                    <div class="absolute top-6 left-6">
                        <span class="bg-gradient-to-r from-green-600 to-cyan-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg backdrop-blur-sm">
                            <span class="relative z-10">À LA UNE</span>
                        </span>
                    </div>
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white/10 rounded-full backdrop-blur-sm flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Texte -->
                <div class="relative p-8 md:p-12 flex flex-col justify-center bg-gradient-to-br from-white to-gray-50">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-purple-900 rounded-full"></div>
                        <span class="text-sm text-gray-600 font-medium tracking-wider uppercase">
                            25 Septembre 2025
                        </span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight bg-gradient-to-r from-gray-900 via-blue-800 to-purple-900 bg-clip-text text-transparent">
                        Découvrez les articles exclusifs de Success
                    </h2>
                    
                    <p class="text-gray-600 text-lg leading-relaxed mb-8 relative">
                        Nos experts partagent leurs analyses, tendances et conseils pour booster votre transformation digitale. 
                        Inspirez-vous dès aujourd’hui avec nos publications de référence.
                        <span class="absolute -left-4 top-0 w-1 h-full bg-gradient-to-b from-blue-400 to-purple-400 rounded-full"></span>
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center shadow-lg">
                                    <span class="text-white font-semibold">S</span>
                                </div>
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-400 rounded-full border-2 border-white"></div>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Success MDG</div>
                                <div class="text-sm text-gray-500">Expert en Solutions Digitales</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS pour images -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const businessImages = [
        'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=600&h=400&fit=crop&crop=center',
        'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop&crop=center',
        'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&h=400&fit=crop&crop=center',
        'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=600&h=400&fit=crop&crop=center'
    ];
    const imageElement = document.getElementById('featuredImage');
    const randomIndex = Math.floor(Math.random() * businessImages.length);
    imageElement.src = businessImages[randomIndex];
});
</script>

<!-- Styles -->
<style>
.shadow-3xl { box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25); }

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fadeInUp {
  animation: fadeInUp 1.2s ease-out;
}

html {
  scroll-behavior: smooth;
}
</style>
