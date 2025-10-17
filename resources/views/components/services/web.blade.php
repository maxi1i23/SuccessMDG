<section id="it-dev" class="py-20 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center gap-12">
    
    <!-- Image -->
    <div class="wow animate__fadeInLeft flex justify-center" data-wow-duration="1s" data-wow-delay="0.3s">
      <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
           alt="Développement web" 
           class="rounded-2xl shadow-xl w-full md:w-4/5 h-80 object-cover">
    </div>

    <!-- Texte -->
    <div class="wow animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
      <i class="fas fa-laptop-code text-5xl text-green-600 mb-6"></i>
      <h2 class="text-4xl font-extrabold mb-6">IT & Développement</h2>
      <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-6">
        Nous proposons des solutions IT complètes, du développement d'applications à la gestion des infrastructures.
      </p>
      <ul class="space-y-3 text-gray-800 text-lg mb-8">
        <li class="flex items-center">
          <i class="fas fa-check-circle text-green-500 mr-3"></i> Développement d'applications sur mesure
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-green-500 mr-3"></i> Gestion des infrastructures IT
        </li>
        <li class="flex items-center">
          <i class="fas fa-check-circle text-green-500 mr-3"></i> Support technique et maintenance
        </li>
      </ul>

      <!-- Boutons stylés -->
      <div class="flex flex-col sm:flex-row gap-4">
        <button class="group bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center gap-3">
          <i class="fas fa-code text-xl group-hover:animate-pulse"></i>
          Demande de Devis
        </button>
        <button class="group bg-white hover:bg-gray-50 text-green-600 border-2 border-green-600 hover:border-green-700 px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center gap-3">
          <i class="fas fa-laptop-code text-xl group-hover:rotate-12 transition-transform duration-300"></i>
          <a href="{{ route('services.itDev') }}" class="block px-6 py-2 hover:text-orange-500">Nos Projets</a>  
        </button>
      </div>
    </div>
  </div>
</section>
