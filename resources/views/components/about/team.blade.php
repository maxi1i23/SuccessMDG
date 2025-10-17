<section class="py-4 bg-gray-100">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Enhanced title section -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <span class="bg-gradient-to-r from-cyan-700 via-green-700 to-blue-400 bg-clip-text text-transparent">
                    Notre Équipe
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Des experts passionnés à votre service
            </p>
            <!-- Simple decorative line -->
            <div class="w-24 h-1 bg-gradient-to-r from-cyan-700 via-green-700 to-blue-400 rounded-full mx-auto mt-6"></div>
        </div>

        <!-- Team grid -->
        <div class="grid md:grid-cols-3 gap-8">
            @forelse($equipes as $member)
            <div class="group bg-white rounded-2xl shadow-lg border border-gray-100 p-8 text-center transform transition-all duration-300 hover:-translate-y-2 hover:scale-105 opacity-0 fade-in-card">

                <!-- Profile image with halo -->
                <div class="relative mb-6 inline-block">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400/20 to-purple-400/20 rounded-full blur-xl scale-110 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <img src="{{ $member->photo ? asset('assets/' . $member->photo) : 'https://i.pravatar.cc/150?img=' . rand(1,70) }}" 
                         alt="{{ $member->nom }}" 
                         class="relative w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <!-- Status indicator -->
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full border-2 border-white flex items-center justify-center">
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                    </div>
                </div>

                <!-- Name and role -->
                <h4 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors duration-300">{{ $member->nom }}</h4>
                <div class="mb-4">
                    <span class="inline-block px-3 py-1 bg-gradient-to-r from-blue-50 to-purple-50 text-blue-700 text-sm font-medium rounded-full border border-blue-100">
                        {{ $member->role }}
                    </span>
                </div>

                <!-- Bio -->
                @if($member->bio)
                <p class="text-gray-600 text-sm leading-relaxed mb-6 group-hover:text-gray-700 transition-colors duration-300">
                    {{ $member->bio }}
                </p>
                @endif

                <!-- Social links -->
                @if($member->reseaux)
                <div class="flex justify-center space-x-4">
                    @foreach(json_decode($member->reseaux, true) as $platform => $url)
                    <a href="{{ $url }}" target="_blank" 
                       class="w-10 h-10 rounded-full bg-gray-100 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-500 flex items-center justify-center text-gray-500 hover:text-white transition-all duration-300 transform hover:scale-110 hover:shadow-lg">
                        @if($platform === 'linkedin') <i class="fab fa-linkedin text-lg"></i>
                        @elseif($platform === 'twitter') <i class="fab fa-twitter text-lg"></i>
                        @elseif($platform === 'facebook') <i class="fab fa-facebook text-lg"></i>
                        @endif
                    </a>
                    @endforeach
                </div>
                @endif

                <!-- Subtle hover indicator -->
                <div class="mt-6 w-0 h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mx-auto group-hover:w-16 transition-all duration-500"></div>
            </div>

            @empty
            <!-- Default message when no team -->
            <div class="col-span-1 md:col-span-3 flex flex-col items-center justify-center py-20 opacity-0 fade-in-card">
                <svg class="w-16 h-16 text-gray-400 mb-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0v-6a2 2 0 00-2-2h-2a2 2 0 00-2 2v6m-4 0H5a2 2 0 00-2 2v1h18v-1a2 2 0 00-2-2z" />
                </svg>
                <p class="text-gray-500 text-lg md:text-xl font-semibold text-center">
                    Aucun membre pour le moment
                </p>
                <span class="mt-2 text-sm text-gray-400 italic text-center">Revenez bientôt pour découvrir notre équipe !</span>
            </div>
            @endforelse
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-16">
            <p class="text-gray-600 mb-6">
                Vous souhaitez rejoindre notre équipe dynamique ?
            </p>
            <button class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <a href="{{ route('contact.rejoindre') }}" class="block px-6 py-2 hover:text-orange-500">Nous Rejoindre</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Animation CSS -->
<style>
@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: translateY(0); }
}
.fade-in-card {
    opacity: 0;
}
.fade-in-card.show {
    animation: fadeInUp 0.8s ease forwards;
}
</style>

<!-- Intersection Observer JS -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('.fade-in-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if(entry.isIntersecting){
                entry.target.classList.add('show');
                entry.target.style.animationDelay = `${index * 0.2}s`;
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
});
</script>
