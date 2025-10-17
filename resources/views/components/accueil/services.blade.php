<section class="relative py-24 overflow-hidden bg-gradient-to-b from-gray-50 to-gray-100">
  
  <div class="absolute inset-0">
    <div class="w-full h-full bg-gradient-to-br from-purple-100 via-pink-100 to-blue-100 opacity-40 blur-3xl"></div>
  </div>

   
  <div class="relative z-10 max-w-7xl mx-auto px-6 text-center mb-16">
    <h2 class="text-6xl md:text-7xl font-extrabold mb-6" style="font-family: 'Poppins', sans-serif;">
      <span class="bg-gradient-to-r from-cyan-700 via-green-700 to-blue-400 bg-clip-text text-transparent drop-shadow-lg">
        Nos Service
      </span>
    </h2>
    <p class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto font-medium">
      Des services innovants et personnalisés pour propulser votre entreprise vers le succès. Chaque solution est conçue pour répondre à vos besoins spécifiques et créer de la valeur.
    </p>
  </div>

 
  <div class="relative overflow-hidden px-6 z-10">
    <div id="scrollWrapper" class="flex gap-8 relative">
      
      <div class="service-card">
        <div class="card-content">
         
          <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 via-blue-500 flex items-center justify-center mb-4 shadow-lg">
            <i class="fas fa-laptop-code text-white text-2xl"></i>
          </div>
           <!-- Texte en gris foncé au lieu de blanc  -->
          <h3 class="text-xl font-bold mb-2 text-gray-800">IT & Développement</h3>
          <p class="text-gray-600 text-sm">Solutions sur mesure et développement d'applications innovantes.</p>
        </div>
      </div>

       <!-- Carte 2: Traitement de Données  -->
      <div class="service-card">
        <div class="card-content">
           <!-- Icon avec gradient pink/red  -->
          <div class="w-16 h-16 rounded-full bg-gradient-to-br from-pink-500 to-red-500 flex items-center justify-center mb-4 shadow-lg">
            <i class="fas fa-database text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-2 text-gray-800">Traitement de Données</h3>
          <p class="text-gray-600 text-sm">Analyse et valorisation de vos données pour des décisions éclairées.</p>
        </div>
      </div>

       <!-- Carte 3: Relation Client & BPO  -->
      <div class="service-card">
        <div class="card-content">
           <!-- Icon avec gradient cyan/purple/green  -->
          <div class="w-16 h-16 rounded-full bg-gradient-to-br from-cyan-700 to-purple-500 via-green-600 flex items-center justify-center mb-4 shadow-lg">
            <i class="fas fa-headset text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-2 text-gray-800">Relation Client & BPO</h3>
          <p class="text-gray-600 text-sm">Gestion complète de la relation client et externalisation de processus métier.</p>
        </div>
      </div>

       <!-- Carte 4: Accompagnement & Conseils  -->
      <div class="service-card">
        <div class="card-content">
           <!-- Icon avec gradient orange/red  -->
          <div class="w-16 h-16 rounded-full bg-gradient-to-br from-orange-600 to-red-500 flex items-center justify-center mb-4 shadow-lg">
            <i class="fas fa-lightbulb text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-2 text-gray-800">Accompagnement & Conseils</h3>
          <p class="text-gray-600 text-sm">Expertise et guidance personnalisée pour transformer vos défis en opportunités.</p>
        </div>
      </div>

       <!-- Carte 5: Stratégie Digitale & Commerciale  -->
      <div class="service-card">
        <div class="card-content">
           <!-- Icon avec gradient red/purple/yellow  -->
          <div class="w-16 h-16 rounded-full bg-gradient-to-br from-red-700 to-purple-500 via-yellow-500 flex items-center justify-center mb-4 shadow-lg">
            <i class="fas fa-chart-line text-white text-2xl"></i>
          </div>
          <h3 class="text-xl font-bold mb-2 text-gray-800">Stratégie Digitale & Commerciale</h3>
          <p class="text-gray-600 text-sm">Élaboration de stratégies digitales et plans commerciaux pour maximiser l'impact.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .service-card {
    flex-shrink: 0;
    width: 22rem;
    border-radius: 1.5rem;
    padding: 2rem;
    /* Fond blanc au lieu de gradient coloré */
    background: white;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .service-card:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 32px rgba(0,0,0,0.2);
  }
</style>

<script>
  const scrollWrapper = document.getElementById('scrollWrapper');
  const cards = Array.from(scrollWrapper.children);
  let scrollAmount = 0;

  // Cloner les cartes pour le scroll infini
  cards.forEach(card => {
    const clone = card.cloneNode(true);
    scrollWrapper.appendChild(clone);
  });

  function animateScroll() {
    scrollAmount += 3; // défilement un peu plus rapide mais fluide
    if(scrollAmount >= scrollWrapper.scrollWidth / 2) scrollAmount = 0;
    scrollWrapper.style.transform = `translateX(-${scrollAmount}px)`;
    requestAnimationFrame(animateScroll);
  }

  animateScroll();
</script>
