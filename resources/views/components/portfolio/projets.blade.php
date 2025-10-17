<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 text-center">
        {{-- 🔍 Barre de recherche et filtres --}}
        <div class="flex flex-col md:flex-row gap-4 mb-10">
            <input type="text" id="searchInput" placeholder="Rechercher un projet..."
                   class="flex-1 px-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <select id="filterService"
                    class="px-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Tous les services</option>
                @foreach($allServices as $service)
                    <option value="{{ $service->type }}">{{ $service->type }}</option>
                @endforeach
            </select>
            <select id="filterSousService"
                    class="px-4 py-2 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Tous les sous-services</option>
                @foreach($allSousServices as $ss)
                    <option value="{{ $ss->nom }}">{{ $ss->nom }}</option>
                @endforeach
            </select>
        </div>

        {{-- 🧩 Cartes des projets --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-items-center">
            @forelse($projets as $projet)
                @php
                    $images = is_array($projet->image) ? $projet->image : [$projet->image ?? ''];
                    $technos = is_array($projet->technologies) ? $projet->technologies : explode(',', $projet->technologies ?? '');
                @endphp

                <div class="flex bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition w-[100%] md:w-[95%] max-w-3xl">
                    {{-- 🖼️ Image à gauche (fixe et sans étirement) --}}
                    <div class="w-[45%] h-full overflow-hidden">
                        <img src="{{ $images[0] ? asset('assets/' . $images[0]) : asset('images/default-project.jpg') }}"
                             alt="{{ $projet->titre }}"
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>

                    {{-- 📄 Contenu à droite --}}
                    <div class="w-[55%] flex flex-col justify-start text-left bg-white">
                        {{-- En-tête gris clair --}}
                        <div class=" p-4 border- bg-indigo-50 border-t border-gray-200">
                            <h3 class="text-xl md:text-2xl font-semibold mb-1 text-gray-800">{{ $projet->titre }}</h3>
                            <span class="text-sm text-gray-500 block">
                                {{ $projet->created_at ? $projet->created_at->translatedFormat('d F Y') : 'Date inconnue' }}
                            </span>
                        </div>

                        {{-- Description --}}
                        <div class="p-4 flex-grow">
                            <p class="text-gray-700 mb-4 leading-relaxed">
                                {{ $projet->description ?? 'Description non disponible' }}
                            </p>

                            {{-- Service principal --}}
                            <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold mb-2">
                                {{ $projet->service->type ?? 'Service inconnu' }}
                            </span>

                            {{-- Sous-services --}}
                            @if($projet->souServices && $projet->souServices->count() > 0)
                                @foreach($projet->souServices as $ss)
                                    <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold mb-2">
                                        {{ $ss->nom }}
                                    </span>
                                @endforeach
                            @else
                                <span class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold mb-2">
                                    Aucun sous-service
                                </span>
                            @endif
                        </div>

                        {{-- Technologies en bas --}}
                        <div class="p-4  border-t border-gray-200 flex flex-wrap gap-2">
                            @if(!empty($technos))
                                @foreach($technos as $tech)
                                    <span class="inline-block bg-indigo-200 text-indigo-900 px-3 py-1 rounded-full text-xs font-semibold">
                                        {{ trim($tech) }}
                                    </span>
                                @endforeach
                            @else
                                <span class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-semibold">
                                    Aucune technologie
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-gray-400 col-span-2">Aucun projet pour le moment.</p>
            @endforelse
        </div>
    </div>
</section>

<script>
    // 🔍 Filtrage et recherche
    document.getElementById('searchInput').addEventListener('input', filterProjects);
    document.getElementById('filterService').addEventListener('change', filterProjects);
    document.getElementById('filterSousService').addEventListener('change', filterProjects);

    function filterProjects() {
        const searchText = document.getElementById('searchInput').value.toLowerCase();
        const filterService = document.getElementById('filterService').value.toLowerCase();
        const filterSS = document.getElementById('filterSousService').value.toLowerCase();

        document.querySelectorAll('.grid > .flex').forEach(card => {
            const title = card.querySelector('h3').innerText.toLowerCase();
            const service = card.querySelector('.bg-blue-100')?.innerText.toLowerCase() || '';
            const sousServices = Array.from(card.querySelectorAll('.bg-green-100')).map(el => el.innerText.toLowerCase());

            const matchesSearch = title.includes(searchText);
            const matchesService = filterService ? service.includes(filterService) : true;
            const matchesSS = filterSS ? sousServices.some(s => s.includes(filterSS)) : true;

            card.style.display = matchesSearch && matchesService && matchesSS ? 'flex' : 'none';
        });
    }
</script>
