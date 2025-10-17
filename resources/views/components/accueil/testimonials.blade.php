<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-12 text-transparent bg-clip-text bg-gradient-to-r from-cyan-700 via-green-700 to-blue-400 drop-shadow-lg">
            Ils nous font confiance
        </h2>
    </div>

    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($temoignages as $temoignage)
            <div class="bg-white rounded-3xl shadow-lg p-6 flex flex-row gap-4 transform transition duration-500 hover:scale-105 opacity-0 fade-in-card">
                <div class="flex-shrink-0">
                    <img src="{{ $temoignage->image ? asset('assets/' . $temoignage->image) : 'https://i.pravatar.cc/150?img=' . rand(1,70) }}" 
                         alt="{{ $temoignage->nom_client ?? 'Client' }}" 
                         class="w-20 h-20 rounded-full object-cover border-4 border-transparent bg-gradient-to-r from-purple-400 via-pink-500 to-orange-400 p-0.5">
                </div>
                <div class="flex flex-col flex-1 justify-between">
                    <div class="mb-3">
                        <h4 class="font-bold text-xl text-gray-900 mb-1">{{ $temoignage->nom_client ?? 'Client Anonyme' }}</h4>
                        @if($temoignage->entreprise)
                        <span class="text-sm font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-blue-600">{{ $temoignage->entreprise }}</span>
                        @endif
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-1">
                        {{ $temoignage->texte ?? 'Un service exceptionnel et un accompagnement très professionnel !' }}
                    </p>
                    <div class="flex justify-center text-yellow-400 space-x-1">
                        @for ($i = 0; $i < 5; $i++)
                        <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 0 0 .95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 0 0-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.538 1.118l-3.37-2.448a1 1 0 0 0-1.176 0l-3.37 2.448c-.783.57-1.838-.197-1.538-1.118l1.287-3.957a1 1 0 0 0-.364-1.118L2.073 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 0 0 .95-.69l1.286-3.957z"></path>
                        </svg>
                        @endfor
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 flex flex-col items-center justify-center py-20">
                <svg class="w-16 h-16 text-gray-400 mb-4 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m4 0v-6a2 2 0 00-2-2h-2a2 2 0 00-2 2v6m-4 0H5a2 2 0 00-2 2v1h18v-1a2 2 0 00-2-2z" />
                </svg>
                <p class="text-gray-500 text-lg md:text-xl font-semibold text-center">
                    Aucun témoignage pour le moment
                </p>
                <span class="mt-2 text-sm text-gray-400 italic">Soyez le premier à nous laisser un avis !</span>
            </div>

            @endforelse
        </div>
    </div>
</section>

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

<script>
document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('.fade-in-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if(entry.isIntersecting){
                entry.target.classList.add('show');
                entry.target.style.animationDelay = `${index * 0.2}s`;
                observer.unobserve(entry.target); // animation une seule fois
            }
        });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
});
</script>
