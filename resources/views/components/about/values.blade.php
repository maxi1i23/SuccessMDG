<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Title Section -->
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-4">
                <span class="bg-gradient-to-r from-cyan-700 via-green-700 to-blue-400 bg-clip-text text-transparent">
                    Nos Valeurs
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Innovation, professionnalisme et proximité avec nos clients guident notre travail au quotidien.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card 1: Innovation -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transition-all duration-300 transform hover:-translate-y-3 hover:scale-105 hover:shadow-xl value-card">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-yellow-500 rounded-xl flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.477.859h4z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-orange-600 transition-colors duration-300">
                    Innovation
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Nous explorons constamment de nouvelles idées pour offrir des solutions digitales créatives et performantes.
                </p>
            </div>

            <!-- Card 2: Professionnalisme -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transition-all duration-300 transform hover:-translate-y-3 hover:scale-105 hover:shadow-xl value-card">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">
                    Professionnalisme
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Notre équipe s'engage à livrer un travail de qualité, respectueux des délais et des standards les plus élevés.
                </p>
            </div>

            <!-- Card 3: Proximité -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transition-all duration-300 transform hover:-translate-y-3 hover:scale-105 hover:shadow-xl value-card">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fillRule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clipRule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">
                    Proximité
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Nous plaçons la relation humaine au cœur de nos projets afin de construire des partenariats durables.
                </p>
            </div>

        </div>

        <!-- Bottom decoration -->
        <div class="mt-16 flex justify-center">
            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full"></div>
        </div>
    </div>
</section>

<!-- Animation CSS -->
<style>
@keyframes fadeInScale {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}
.value-card {
    opacity: 0;
    transform: scale(0.8);
}
.value-card.show {
    animation: fadeInScale 0.8s ease forwards;
}
</style>

<!-- Animation JS -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('.value-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if(entry.isIntersecting){
                entry.target.classList.add('show');
                entry.target.style.animationDelay = `${index * 0.2}s`; // effet "stagger"
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
});
</script>
