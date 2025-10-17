@php
    use Illuminate\Support\Str;
@endphp

<section class="px-6 py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto flex flex-col gap-4">
        {{-- Recherche et filtre --}}
        <div class="flex flex-col md:flex-row gap-4 mb-6">
            <input type="text" id="searchInput" placeholder="Rechercher un article..."
                   class="flex-1 px-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            
            <select id="filterSousService" class="px-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Tous les sous-services</option>
                @foreach($allSousServices as $ss)
                    <option value="{{ $ss->nom }}">{{ $ss->nom }}</option>
                @endforeach
            </select>
        </div>

        <div id="articlesContainer" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($articles as $article)
                @php
                    $imagePath = $article->image ? asset('assets/' . $article->image) : asset('images/default-article.jpg');
                @endphp
                <article class="article-card group relative bg-white rounded-2xl shadow-lg border border-gray-200 flex flex-col overflow-hidden p-0"
                         data-sous-services="{{ $article->souServices->pluck('nom')->join(',') }}">
                    
                    {{-- Image --}}
                    <div class="h-56 w-full overflow-hidden">
                        <img src="{{ $imagePath }}" alt="{{ $article->titre }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    {{-- Contenu de la card --}}
                    <div class="p-4 flex flex-col flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-gray-900 line-clamp-2">
                                {{ $article->titre }}
                            </h3>
                            <span class="text-sm text-gray-400">
                            {{ $article->created_at ? $article->created_at->translatedFormat('d F Y') : 'Date inconnue' }}
                            </span>
                        </div>

                        {{-- Sous-services --}}
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($article->souServices as $ss)
                                <span class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    {{ $ss->nom }}
                                </span>
                            @endforeach
                        </div>

                        {{-- Bouton Voir Plus aligné à droite --}}
                        <div class="flex justify-end mt-auto">
                            <button onclick="openModal({{ $article->id }})"
                                    class="bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-2 px-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all">
                                Voir plus
                            </button>
                        </div>
                    </div>
                </article>
            @empty
                <p class="text-center text-cyan-400 to-green-500 col-span-3">Aucun article pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>

{{-- Popup --}}
<div id="articleModal" class="fixed inset-0 bg-black/40 backdrop-blur-md z-50 hidden flex items-center justify-center p-4 min-h-screen">
    <div class="bg-white rounded-3xl shadow-2xl w-full max-w-6xl md:flex md:overflow-hidden transform scale-90 transition-transform duration-300" id="modalContent">
        
        {{-- Media gauche --}}
        <div class="md:w-1/2 bg-gray-100 flex items-center justify-center overflow-hidden">
            <img id="modalMedia" src="" alt="" class="w-full h-full object-cover">
            <video id="modalVideo" class="w-full h-full object-cover hidden" controls></video>
        </div>

        {{-- Texte droite --}}
        <div class="md:w-1/2 p-8 flex flex-col">
            <button onclick="closeModal()" class="self-end mb-4 w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center transition-all">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <h2 id="modalTitre" class="text-3xl font-bold mb-2"></h2>
            <p id="modalDate" class="text-sm text-gray-400 mb-4"></p>
            <div id="modalSousServices" class="flex flex-wrap gap-2 mb-4"></div>
            <p id="modalContenu" class="text-gray-700 overflow-auto"></p>
        </div>
    </div>
</div>

<script>
const articlesData = @json($articles);

// Popup
function openModal(id) {
    const article = articlesData.find(a => a.id === id);
    if (!article) return;

    const img = document.getElementById('modalMedia');
    const video = document.getElementById('modalVideo');

    if(article.image?.endsWith('.mp4')) {
        video.src = article.image;
        video.classList.remove('hidden');
        img.classList.add('hidden');
    } else {
        img.src = article.image ? '{{ asset("assets/") }}/' + article.image : '{{ asset("images/default-article.jpg") }}';
        img.classList.remove('hidden');
        video.classList.add('hidden');
    }

    document.getElementById('modalTitre').innerText = article.titre;

    function formatDate(isoString) {
        if(!isoString) return '';
        const date = new Date(isoString);
        return date.toLocaleDateString('fr-FR', { day: '2-digit', month: 'long', year: 'numeric' });
    }

    // Puis
    document.getElementById('modalDate').innerText = formatDate(article.created_at);

    document.getElementById('modalContenu').innerText = article.contenu ?? '';

    const ssDiv = document.getElementById('modalSousServices');
    ssDiv.innerHTML = '';
    article.sou_services?.forEach(s => {
        const span = document.createElement('span');
        span.className = 'bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold';
        span.innerText = s.nom;
        ssDiv.appendChild(span);
    });

    const modal = document.getElementById('articleModal');
    const content = document.getElementById('modalContent');
    modal.classList.remove('hidden');
    setTimeout(() => content.classList.remove('scale-90'), 10);
}

function closeModal() {
    const modal = document.getElementById('articleModal');
    const content = document.getElementById('modalContent');
    content.classList.add('scale-90');
    setTimeout(() => modal.classList.add('hidden'), 200);
}

// Filtre par sous-service
document.getElementById('filterSousService').addEventListener('change', function() {
    filterArticles();
});
document.getElementById('searchInput').addEventListener('input', function() {
    filterArticles();
});

function filterArticles() {
    const searchText = document.getElementById('searchInput').value.toLowerCase();
    const filterSS = document.getElementById('filterSousService').value;

    document.querySelectorAll('.article-card').forEach(card => {
        const title = card.querySelector('h3').innerText.toLowerCase();
        const ssList = card.dataset.sousServices.toLowerCase();
        const matchesSearch = title.includes(searchText);
        const matchesSS = filterSS ? ssList.includes(filterSS.toLowerCase()) : true;

        card.style.display = matchesSearch && matchesSS ? 'flex' : 'none';
    });
}
</script>
