<section class="relative py-20 overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-indigo-400/10 to-pink-400/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-cyan-400/5 to-blue-400/5 rounded-full blur-2xl"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 mb-6 leading-tight">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Postes Disponibles
                </span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Découvrez les opportunités qui vous attendent et rejoignez une équipe passionnée par l'innovation digitale
            </p>
        </div>

        <div class="space-y-8">
            @forelse($offres as $offre)
            <div class="group relative bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-white/50 p-6 sm:p-8 hover:shadow-2xl hover:bg-white/90 transition-all duration-500 transform hover:-translate-y-2 flex flex-col md:flex-row gap-6 md:gap-8">

                <!-- Bouton Postuler en haut à droite -->
                <div class="hidden md:block md:absolute md:top-6 md:right-6">
                    <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-2 sm:py-3 px-4 sm:px-5 rounded-2xl shadow-md hover:shadow-lg flex items-center gap-2 text-sm md:text-sm"
                            onclick="openPostulerModal({{ $offre->id }})">
                        Postuler
                    </button>
                </div>

                <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10 blur-xl"></div>

                <div class="flex-1 flex flex-col md:flex-row gap-4 md:gap-8">
                    <!-- Icon + Info -->
                    <div class="flex-shrink-0 relative">
                        <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2M3 7h18v14H3V7zM16 7h-4v3h4V7z"/>
                            </svg>
                        </div>
                        @if($offre->is_new)
                        <div class="absolute -top-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                        </div>
                        @endif
                    </div>

                    <!-- Contenu de l'offre -->
                    <div class="flex-1">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2 md:mb-3">{{ $offre->titre }}</h3>

                        <div class="flex flex-wrap gap-4 md:gap-6 text-gray-600 mb-4 text-sm md:text-base">
                            <span class="flex items-center gap-1">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 12h6m-3-3v6m-9 3h18v2H3v-2z"/>
                        </svg>
                        {{ $offre->type_contrat }}
                    </span>

                    <!-- Icône lieu -->
                    <span class="flex items-center gap-1">
                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 2a7 7 0 00-7 7c0 5 7 13 7 13s7-8 7-13a7 7 0 00-7-7z"/>
                            <circle cx="12" cy="9" r="2" stroke="none" fill="currentColor"/>
                        </svg>
                        {{ $offre->lieu }}
                    </span>

                    <!-- Icône expérience -->
                    <span class="flex items-center gap-1">
                        <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.422 12.083 12.083 0 01-.84 4.422L12 14z"/>
                        </svg>
                        {{ $offre->experience }}
                    </span>
                        </div>

                        <p class="text-gray-600 leading-relaxed text-sm md:text-lg">{{ $offre->contenu }}</p>

                        <div class="flex flex-wrap gap-10 mt-6 text-sm md:text-base">
                            @if(!empty($offre->mission))
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-2">Missions</h4>
                                <ul class="list-disc list-inside">
                                    @foreach($offre->mission as $sm)
                                    <li>{{ is_array($sm) && isset($sm['value']) ? $sm['value'] : (is_string($sm) ? $sm : '') }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if(!empty($offre->competences))
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-2">Compétences</h4>
                                <ul class="list-disc list-inside">
                                    @foreach($offre->competences as $comp)
                                    <li>{{ is_array($comp) && isset($comp['value']) ? $comp['value'] : (is_string($comp) ? $comp : '') }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if(!empty($offre->qualites))
                            <div>
                                <h4 class="font-semibold text-gray-700 mb-2">Qualités</h4>
                                <ul class="list-disc list-inside">
                                    @foreach($offre->qualites as $qual)
                                    <li>{{ is_array($qual) && isset($qual['value']) ? $qual['value'] : (is_string($qual) ? $qual : '') }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mt-6 md:hidden">
                    <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-3 px-5 rounded-2xl shadow-md hover:shadow-lg flex items-center justify-center gap-2 text-sm"
                            onclick="openPostulerModal({{ $offre->id }})">
                        Postuler
                    </button>
                </div>
            </div>
            @empty
            <div class="flex flex-col items-center justify-center py-20 bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 rounded-3xl shadow-lg animate-pulse text-center px-4 sm:px-6 md:px-10">
                <svg class="w-16 h-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 18.5a6.5 6.5 0 110-13 6.5 6.5 0 010 13z"/>
                </svg>
                <h3 class="text-xl md:text-2xl font-bold text-gray-700 mb-2">Aucune offre disponible !</h3>
                <p class="text-gray-500 text-sm md:text-base max-w-md">Nous n’avons actuellement aucun poste ouvert. Revenez bientôt pour découvrir de nouvelles opportunités passionnantes !</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Modal Postuler -->
<div id="postulerModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-3xl shadow-2xl w-full max-w-sm sm:max-w-md p-6 sm:p-8 relative transform scale-90 opacity-0 transition-all duration-300">
        <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-3xl font-bold" onclick="closePostulerModal()">&times;</button>
        <h2 class="text-xl sm:text-2xl font-bold mb-6 text-center text-gray-800">Postuler à cette offre</h2>
        <form id="postulerForm" class="space-y-3 sm:space-y-4" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="offre_id" name="offre_id">
            <input type="text" name="nom" placeholder="Votre nom" class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-blue-500 outline-none" required>
            <input type="email" name="email" placeholder="exemple@email.com" class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-blue-500 outline-none" required>
            <input type="text" name="telephone" placeholder="+261 ..." class="w-full border border-gray-300 rounded-lg p-2 sm:p-3 focus:ring-2 focus:ring-blue-500 outline-none" required>
            <input type="file" name="cv" accept=".pdf" class="w-full p-2 border border-gray-300 rounded-lg" required>
            <input type="file" name="lettre_motivation" accept=".pdf,.doc,.docx" class="w-full p-2 border border-gray-300 rounded-lg">
            <button type="submit" id="submitPostuler" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-2 sm:py-3 rounded-2xl font-semibold text-lg shadow-md transition-transform duration-300 hover:scale-105">
                Envoyer
            </button>
        </form>
    </div>
</div>

<!-- Popup central -->
<div id="success-popup" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-green-500 text-white px-10 py-6 rounded-3xl shadow-2xl text-2xl font-bold text-center animate-scaleFade">
        ✅ Vous avez Postulé avec succès!
    </div>
</div>

<style>
@keyframes scaleFade {
    0% { transform: scale(0.7); opacity: 0; }
    50% { transform: scale(1.05); opacity: 1; }
    100% { transform: scale(1); opacity: 1; }
}
.animate-scaleFade { animation: scaleFade 0.5s ease forwards; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('postulerModal');
    const form = document.getElementById('postulerForm');
    const submitBtn = document.getElementById('submitPostuler');
    const popup = document.getElementById('success-popup');

    window.openPostulerModal = function(offreId) {
        document.getElementById('offre_id').value = offreId;
        modal.classList.remove('hidden');
        const modalContent = modal.querySelector('.bg-white');
        modalContent.classList.remove('scale-90', 'opacity-0');
        modalContent.classList.add('scale-100', 'opacity-100');
    };

    window.closePostulerModal = function() {
        modal.classList.add('hidden');
        form.reset();
        clearFormErrors();
    };

    function clearFormErrors() {
        document.querySelectorAll('.field-error').forEach(el => el.remove());
    }

    function showFieldErrors(errors) {
        clearFormErrors();
        for (const [field, msgs] of Object.entries(errors)) {
            const input = form.querySelector(`[name="${field}"]`);
            if (input) {
                const err = document.createElement('div');
                err.className = 'field-error text-sm text-red-600 mt-1';
                err.innerText = msgs.join(', ');
                input.parentNode.appendChild(err);
            }
        }
    }

    function showPopup() {
        popup.classList.remove('hidden');
        setTimeout(() => popup.classList.add('hidden'), 2000); 
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        clearFormErrors();

        const fd = new FormData(form);
        submitBtn.disabled = true;
        const originalText = submitBtn.innerText;
        submitBtn.innerText = '⏳ Envoi en cours...';

        try {
            const response = await fetch("{{ route('postuler.store') }}", {
                method: "POST",
                body: fd,
                headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" }
            });

            const payload = await response.json();

            if (response.ok && payload.message) {
                submitBtn.innerText = '✅ Envoyé !';
                submitBtn.classList.remove('from-blue-600', 'to-purple-700');
                submitBtn.classList.add('bg-green-500');

                setTimeout(() => {
                    closePostulerModal();
                    showPopup();
                    submitBtn.innerText = originalText;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('bg-green-500');
                    submitBtn.classList.add('from-blue-600', 'to-purple-700');
                }, 500);

            } else if (response.status === 422 && payload.errors) {
                showFieldErrors(payload.errors);
                submitBtn.disabled = false;
                submitBtn.innerText = originalText;
            } else {
                alert('⚠️ Erreur serveur : ' + (payload.message || 'Veuillez réessayer.'));
                submitBtn.disabled = false;
                submitBtn.innerText = originalText;
            }
        } catch (error) {
            alert("❌ Une erreur réseau est survenue.");
            submitBtn.disabled = false;
            submitBtn.innerText = originalText;
        }
    });
});
</script>
