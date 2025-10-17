<section class="relative w-full h-[90vh] overflow-hidden">
  <!-- Carousel Background -->
  <div id="hero-carousel" class="absolute inset-0 w-full h-full" data-carousel="slide" data-carousel-interval="4000">
    <!-- Wrapper -->
    <div class="relative h-full w-full overflow-hidden">
      <!-- Item 1 - Tech/Digital -->
      <div class="duration-1000 ease-in-out" data-carousel-item="active">
        <img src="https://images.pexels.com/photos/3184306/pexels-photo-3184306.jpeg?auto=compress&cs=tinysrgb&w=1600"
             class="absolute inset-0 w-full h-full object-cover scale-105 transition-transform duration-[4000ms]" 
             alt="Transformation digitale">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 via-purple-900/50 to-teal-900/70"></div>
      </div>
      
      <!-- Item 2 - Business/Strategy -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&cs=tinysrgb&w=1600"
             class="absolute inset-0 w-full h-full object-cover scale-105 transition-transform duration-[4000ms]" 
             alt="Stratégie business">
        <div class="absolute inset-0 bg-gradient-to-r from-teal-900/70 via-green-900/50 to-blue-900/70"></div>
      </div>
      
      <!-- Item 3 - Data/Analytics -->
      <div class="hidden duration-1000 ease-in-out" data-carousel-item>
        <img src="https://images.pexels.com/photos/590020/pexels-photo-590020.jpeg?auto=compress&cs=tinysrgb&w=1600"
             class="absolute inset-0 w-full h-full object-cover scale-105 transition-transform duration-[4000ms]" 
             alt="Analyse de données">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/70 via-orange-900/50 to-pink-900/70"></div>
      </div>
    </div>
  </div>

  <!-- Contenu centré avec animations -->
  <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white z-20">
    <!-- Badge animé -->
    <div class="animate-fade-in-down">
      <span class="inline-flex items-center px-6 py-2 rounded-full text-sm font-semibold uppercase tracking-wide bg-white/20 backdrop-blur-sm border border-white/30 shadow-lg">
        <i class="fas fa-star text-yellow-400 mr-2 animate-pulse"></i>
        Success-MDG
        <i class="fas fa-star text-yellow-400 ml-2 animate-pulse"></i>
      </span>
    </div>
    
    <!-- Titre principal avec effet gradient -->
    <h1 class="mt-6 text-4xl sm:text-6xl lg:text-7xl font-black animate-fade-in-up bg-gradient-to-r from-white via-blue-100 to-teal-200 bg-clip-text text-transparent leading-tight">
      Votre Partenaire
      <br>
      <span class="bg-gradient-to-r from-teal-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
        Digital à Madagascar
      </span>
    </h1>
    
    <!-- Description avec effet typewriter -->
    <p class="mt-8 max-w-3xl text-lg sm:text-xl text-gray-100 leading-relaxed animate-fade-in-up animation-delay-300 font-light">
      Transformez votre entreprise avec nos solutions digitales innovantes : 

    </p>
    
    <!-- Boutons CTA stylés -->
    <div class="mt-10 flex flex-col sm:flex-row gap-4 animate-fade-in-up animation-delay-600">
          <a href="/contact" 
              class="group relative overflow-hidden bg-gradient-to-r from-teal-500 to-purple-600 hover:from-teal-600 hover:to-purple-700 text-white font-bold px-8 py-4 rounded-xl shadow-2xl transform hover:scale-105 transition-all duration-300">
                <span class="relative z-10 flex items-center justify-center gap-3">
                    <i class="fas fa-rocket text-xl group-hover:animate-bounce"></i>
                    CONTACTER-NOUS
                </span>
        <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    </a>
          <a href="/services" 
            class="group bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl shadow-xl transform hover:scale-105 transition-all duration-300">
        
              <span class="flex items-center justify-center gap-3">
                  <i class="fas fa-play-circle text-xl group-hover:scale-110 transition-transform duration-300"></i>
                  DÉCOUVRIR NOS SERVICES
              </span>
    </a>

      <!-- <button class="group bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl shadow-xl transform hover:scale-105 transition-all duration-300">
        <span class="flex items-center justify-center gap-3">
          <i class="fas fa-play-circle text-xl group-hover:scale-110 transition-transform duration-300"></i>
          DÉCOUVRIR NOS SERVICES
        </span>
      </button> -->
    </div>

  <!-- Wave shape en bas (conservé) -->
  <div class="absolute bottom-0 left-0 right-0 z-30">
    <svg viewBox="0 0 1440 120" class="w-full h-32 block" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,32 C200,120 400,120 720,64 C1040,8 1240,0 1440,48 L1440 120 L0 120 Z"
            fill="#ffffff"/>
    </svg>
  </div>

  <!-- Controls stylés -->
  <button type="button" class="absolute top-1/2 left-6 z-40 transform -translate-y-1/2 group focus:outline-none" data-carousel-prev>
    <span class="flex items-center justify-center w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300 shadow-lg">
      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
      </svg>
    </span>
  </button>
  
  <button type="button" class="absolute top-1/2 right-6 z-40 transform -translate-y-1/2 group focus:outline-none" data-carousel-next>
    <span class="flex items-center justify-center w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 group-hover:bg-white/30 group-hover:scale-110 transition-all duration-300 shadow-lg">
      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
      </svg>
    </span>
  </button>

  <!-- Indicateurs de slides -->
  <div class="absolute bottom-24 left-1/2 transform -translate-x-1/2 z-40 flex space-x-3">
    <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300" data-carousel-slide-to="0"></button>
    <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300" data-carousel-slide-to="1"></button>
    <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white/80 transition-all duration-300" data-carousel-slide-to="2"></button>
  </div>
</section>

<!-- CSS pour les animations personnalisées -->
<style>
@keyframes fade-in-down {
  0% { opacity: 0; transform: translateY(-20px); }
  100% { opacity: 1; transform: translateY(0); }
}

@keyframes fade-in-up {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

.animate-fade-in-down {
  animation: fade-in-down 1s ease-out;
}

.animate-fade-in-up {
  animation: fade-in-up 1s ease-out;
}

.animation-delay-300 {
  animation-delay: 0.3s;
  animation-fill-mode: both;
}

.animation-delay-600 {
  animation-delay: 0.6s;
  animation-fill-mode: both;
}

.animation-delay-900 {
  animation-delay: 0.9s;
  animation-fill-mode: both;
}

/* Effet de zoom sur les images */
[data-carousel-item].active img,
[data-carousel-item]:not(.hidden) img {
  animation: subtle-zoom 4s ease-in-out infinite alternate;
}

@keyframes subtle-zoom {
  0% { transform: scale(1.05); }
  100% { transform: scale(1.1); }
}
</style>
