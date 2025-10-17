<!-- Section des filtres et recherche -->
<section class="py-6 bg-gray-50 mt-20">
    <div class="container mx-auto text-center">

        <h2 class="text-3xl font-bold mb-6 text-gray-800">Nos Projets</h2>

        <!-- Recherche par mot-clé -->
        <div class="mb-6">
            <input type="text" id="search-input" placeholder="Rechercher un projet..."
                class="px-4 py-2 rounded border w-full max-w-md mx-auto focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Filtres dynamiques par catégorie -->
        <div class="flex flex-wrap justify-center gap-3 mb-6">
            <button class="filter-btn bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-500 transition" data-filter="all">
                Tous les projets
            </button>

            @foreach($categories as $categorie)
                <button class="filter-btn bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500 transition"
                        data-filter="{{ $categorie->slug }}">
                    {{ $categorie->nom }}
                </button>
            @endforeach
        </div>

        <!-- Grid des projets -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="projects-grid">
            @foreach($projets as $projet)
                <div class="project-item bg-white p-4 rounded shadow" 
                     data-category="{{ $projet->categorie->slug }}">
                    <h3 class="text-xl font-bold mb-2">{{ $projet->titre }}</h3>
                    <p class="text-gray-600">{{ $projet->description }}</p>
                    <span class="inline-block mt-2 px-2 py-1 bg-blue-100 text-blue-800 text-sm rounded">
                        {{ $projet->categorie->nom }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.project-item');
    const searchInput = document.getElementById('search-input');

    // Filtrage par catégorie
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            projects.forEach(project => {
                if(filter === 'all' || project.dataset.category === filter){
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        });
    });

    // Filtrage par mot-clé
    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();

        projects.forEach(project => {
            const text = project.textContent.toLowerCase();
            if(text.includes(query)){
                project.style.display = 'block';
            } else {
                project.style.display = 'none';
            }
        });
    });
});
</script>
