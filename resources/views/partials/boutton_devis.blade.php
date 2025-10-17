<!-- Floating Quote Request Button -->
<div class="fixed bottom-8 right-8 z-50">
    <div class="relative group">
        <!-- Glowing background -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/40 to-pink-600/40 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500 scale-110 animate-pulse"></div>
        
        <div class="relative">
            <button onclick="openPopup()"
                class="group/btn relative overflow-hidden bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white font-bold py-4 px-8 rounded-full shadow-2xl hover:shadow-purple-500/50 transform hover:scale-110 transition-all duration-500 animate-float">
                
                <!-- Animated overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-gray-600 via-purple-600 to-blue-600 translate-x-full group-hover/btn:translate-x-0 transition-transform duration-700"></div>

                <div class="relative flex items-center space-x-3">
                    <!-- First Icon -->
                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center group-hover/btn:rotate-12 transition-transform duration-300">
                        <span class="text-xl animate-pulse">💰</span>
                    </div>

                    <!-- Button Text -->
                    <span class="text-lg font-black tracking-wide">Demande de devis</span>

                    <!-- Second Icon -->
                    <div class="transform group-hover/btn:translate-x-2 transition-transform duration-300 from-green-600">
                        <span class="text-xl animate-bounce">✓</span>
                    </div>
                </div>
            </button>
        </div>
    </div>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    25% { transform: translateY(-10px) rotate(1deg); }
    50% { transform: translateY(-5px) rotate(0deg); }
    75% { transform: translateY(-15px) rotate(-1deg); }
}
.animate-float { animation: float 4s ease-in-out infinite; }
</style>
