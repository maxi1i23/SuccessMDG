<!-- devis-popup.blade.php -->

<!-- Popup Overlay -->
<div id="devisPopup" class="fixed inset-0 bg-black/60 backdrop-blur-md z-50 hidden opacity-0 transition-all duration-300 flex items-center justify-center">
    <!-- Popup Container -->
    <div class="bg-white rounded-3xl shadow-2xl w-full max-w-3xl max-h-[90vh] overflow-y-auto overflow-x-visible transform scale-90 transition-all duration-300" id="popupContent">
        <!-- Header -->
        <div class="relative bg-gradient-to-r from-blue-600 to-purple-600 rounded-t-3xl p-4 text-white">
            <button onclick="closePopup()" class="absolute top-2 right-2 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition-all duration-200 hover:rotate-90">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="flex items-center justify-center gap-4 text-center">
                <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center animate-pulse">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-0">Demande de Devis</h2>
            </div>
        </div>

        <!-- Formulaire -->
        <div class="p-4 sm:p-6 pb-2">
            <form id="devisForm" class="space-y-6">
                @csrf

                <!-- Informations personnelles -->
                <div class="space-y-2">
                    <h3 class="text-xl font-semibold text-gray-900 flex items-center gap-3 mb-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-bold">1</span>
                        </div>
                        Vos informations
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="text" name="nom" required placeholder=" " class="peer w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-transparent">
                            <label class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Nom complet *</label>
                        </div>
                        <div class="relative">
                            <input type="email" name="email" required placeholder=" " class="peer w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-transparent">
                            <label class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Email *</label>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="relative">
                            <input type="tel" name="telephone" required placeholder=" " class="peer w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-transparent">
                            <label class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Téléphone *</label>
                        </div>
                        <div class="relative">
                            <input type="text" name="adresse" required placeholder=" " class="peer w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-transparent">
                            <label class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Adresse *</label>
                        </div>
                    </div>
                </div>

                <!-- Sous-service -->
                <div class="space-y-2">
                    <h3 class="text-xl font-semibold text-gray-900 flex items-center gap-3 mb-0">
                        <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                            <span class="text-white text-sm font-bold">2</span>
                        </div>
                        Service
                    </h3>
                    <div class="relative">
                        <select name="sous_service_id" required class="w-full max-w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200">
                            <option value="">Sélectionner un service</option>
                            @foreach($allSousServices as $ss)
                                <option value="{{ $ss->id }}">{{ $ss->nom }}</option>
                            @endforeach
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                </div>

                <!-- Budget et délai -->
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="relative">
                        <input type="number" name="budget" required placeholder=" " class="peer w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-transparent">
                        <label class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Budget *</label>
                    </div>
                    <div class="relative">
                        <input type="text" name="delai" required placeholder=" " class="peer w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-transparent">
                        <label class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Délai *</label>
                    </div>
                </div>

                <!-- Description -->
                <div class="relative">
                    <textarea name="description_projet" required rows="4" placeholder=" " class="peer w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:outline-none transition-all duration-200 placeholder-transparent"></textarea>
                    <label class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-blue-600">Description du projet *</label>
                </div>

                <!-- Bouton soumission -->
                <div class="pt-1 sm:pt-2">
                    <button type="submit" id="devisSubmit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white text-lg font-semibold py-4 px-10 sm:px-12 rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-3">
                        <span class="normal-text">Envoyer ma demande</span>
                        <span class="loading-text hidden">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                            </svg>
                            Patienter...
                        </span>
                    </button>
                </div>                                      
            </form>
        </div>
    </div>
</div>

<!-- Popup de confirmation -->
<div id="confirmationPopup" class="fixed inset-0 bg-black/60 backdrop-blur-md z-50 hidden opacity-0 transition-all duration-300 flex items-center justify-center">
    <div class="bg-white rounded-3xl shadow-2xl p-8 w-full max-w-md text-center transform scale-90 transition-all duration-300" id="confirmationPopupContent">
        <div class="mb-4 flex justify-center">
            <svg class="w-16 h-16 text-green-500 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-2">Email envoyé ✅</h2>
        <p class="text-gray-700 mb-6">
            Un email de confirmation a été envoyé à votre adresse.<br>
            Merci de confirmer pour finaliser votre demande.
        </p>
        <button onclick="closeConfirmationPopup()" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold py-2 px-6 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300">
            Fermer
        </button>
    </div>
</div>

<script>
const devisForm = document.getElementById('devisForm');
const submitButton = document.getElementById('devisSubmit');

window.openPopup = function() {
    const popup = document.getElementById('devisPopup');
    const popupContent = document.getElementById('popupContent');
    popup.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    setTimeout(() => {
        popup.classList.remove('opacity-0');
        popupContent.classList.remove('scale-90');
        popupContent.classList.add('scale-100');
    }, 10);
};

window.closePopup = function() {
    const popup = document.getElementById('devisPopup');
    const popupContent = document.getElementById('popupContent');
    popup.classList.add('opacity-0');
    popupContent.classList.remove('scale-100');
    popupContent.classList.add('scale-90');
    setTimeout(() => {
        popup.classList.add('hidden');
        document.body.style.overflow = '';
    }, 300);
};

devisForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(devisForm);

    // Désactiver le formulaire et afficher loader
    Array.from(devisForm.elements).forEach(el => el.disabled = true);
    submitButton.querySelector('.normal-text').classList.add('hidden');
    submitButton.querySelector('.loading-text').classList.remove('hidden');

    fetch("{{ route('devis.verifyEmail') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
        },
        body: formData,
        credentials: 'same-origin'
    })
    .then(async response => {
        if(!response.ok){
            const text = await response.text();
            throw new Error(text);
        }
        return response.json();
    })
    .then(data => {
        if(data.success){
            openConfirmationPopup();
        } else {
            throw new Error("Erreur lors de l'envoi de l'email de confirmation");
        }
    })
    .catch(error => {
        console.error(error);
        Array.from(devisForm.elements).forEach(el => el.disabled = false);
        submitButton.querySelector('.normal-text').classList.remove('hidden');
        submitButton.querySelector('.loading-text').classList.add('hidden');
        alert("Erreur : " + error.message);
    });
});

// Gestion "Autre" pour sous-service
document.querySelector('select[name="sous_service_id"]')?.addEventListener('change', function() {
    if(this.value === 'autre') {
        const autre = prompt("Veuillez préciser le sous-service:");
        if(autre) {
            const option = document.createElement('option');
            option.value = autre;
            option.selected = true;
            this.appendChild(option);
        } else {
            this.value = "";
        }
    }
});

function openConfirmationPopup() {
    const popup = document.getElementById('confirmationPopup');
    const content = document.getElementById('confirmationPopupContent');
    popup.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    setTimeout(() => {
        popup.classList.remove('opacity-0');
        content.classList.remove('scale-90');
        content.classList.add('scale-100');
    }, 10);
}

function closeConfirmationPopup() {
    const popup = document.getElementById('confirmationPopup');
    const content = document.getElementById('confirmationPopupContent');
    popup.classList.add('opacity-0');
    content.classList.remove('scale-100');
    content.classList.add('scale-90');
    setTimeout(() => {
        popup.classList.add('hidden');
        document.body.style.overflow = '';

        // ✅ Réinitialiser le formulaire après fermeture
        devisForm.reset();

        // Réactiver les champs et remettre le bouton normal
        Array.from(devisForm.elements).forEach(el => el.disabled = false);
        submitButton.querySelector('.normal-text').classList.remove('hidden');
        submitButton.querySelector('.loading-text').classList.add('hidden');

        // Ferme aussi la popup du devis
        closePopup();
    }, 300);
}
</script>
