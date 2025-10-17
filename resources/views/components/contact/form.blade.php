<div class="bg-white p-10 rounded-2xl shadow-xl max-w-3xl mx-auto mt-10">
    <h3 class="text-3xl font-extrabold mb-8 text-center text-gray-800">Contactez-nous</h3>

    <form id="contactForm" action="{{ route('contact.send') }}" method="POST" class="space-y-6">
        @csrf        
        <div class="grid md:grid-cols-2 gap-4">

            <!-- Prénom -->
            <input 
                type="text" 
                name="prenom" 
                placeholder="Prénom *" 
                class="border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                required
            >

            <!-- Nom -->
            <input 
                type="text" 
                name="nom" 
                placeholder="Nom *" 
                class="border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                required
            >

            <!-- Email -->
            <input 
                type="email" 
                name="email" 
                placeholder="Email *" 
                class="border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none md:col-span-2" 
                required
            >

            <!-- Téléphone -->
            <input 
                type="tel" 
                name="telephone" 
                placeholder="Téléphone" 
                class="border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none md:col-span-2"
            >

            <!-- Adresse -->
            <input 
                type="text" 
                name="adresse" 
                placeholder="Adresse" 
                class="border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none md:col-span-2"
            >

            <!-- Pays -->
            <select 
                name="pays" 
                id="countrySelect"
                class="w-full max-w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none md:col-span-2"
                required
            >
                <option value="">Sélectionnez votre pays</option>
            </select>

            <!-- Message -->
            <textarea 
                name="message" 
                placeholder="Votre message *" 
                class="border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none md:col-span-2" 
                rows="5" 
                required
            ></textarea>

            <!-- Newsletter -->
            <div class="md:col-span-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="newsletter" value="1" class="form-checkbox h-5 w-5 text-blue-600">
                    <span class="ml-2 text-gray-700">Je souhaite recevoir des conseils et actualités digitales</span>
                </label>
            </div>
        </div>

        <div class="text-center">
            <button 
                type="submit" 
                id="contactSubmitBtn"
                class="bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 inline-flex items-center gap-3"
            >
                <span id="btnText">Envoyer le message</span>
            </button>
            <p class="text-gray-500 text-sm mt-3">Nous vous répondrons sous 24h ouvrées</p>
        </div>
    </form>
</div>

<!-- CSS spinner -->
<style>
    .spinner {
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid rgba(255,255,255,0.3);
        border-top-color: #fff;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        vertical-align: middle;
        margin-right: 8px;
    }

    /* #countrySelect {
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
    }

    #countrySelect option {
        white-space: normal;
    }

    @media (max-width: 768px) {
        #countrySelect {
            font-size: 0.95rem;
            padding: 0.75rem;
        }
    } */

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<!-- Charger automatiquement tous les pays -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const select = document.getElementById("countrySelect");

    const countries = [
        "Afghanistan","Afrique du Sud","Albanie","Algérie","Allemagne","Andorre","Angola","Antigua-et-Barbuda",
        "Arabie saoudite","Argentine","Arménie","Australie","Autriche","Azerbaïdjan","Bahamas","Bahreïn",
        "Bangladesh","Barbade","Belgique","Belize","Bénin","Bhoutan","Biélorussie","Birmanie (Myanmar)",
        "Bolivie","Bosnie-Herzégovine","Botswana","Brésil","Brunei","Bulgarie","Burkina Faso","Burundi",
        "Cambodge","Cameroun","Canada","Cap-Vert","Chili","Chine","Chypre","Colombie","Comores","Congo",
        "Corée du Nord","Corée du Sud","Costa Rica","Côte d’Ivoire","Croatie","Cuba","Danemark","Djibouti",
        "Dominique","Égypte","Émirats arabes unis","Équateur","Érythrée","Espagne","Estonie","États-Unis",
        "Eswatini","Éthiopie","Fidji","Finlande","France","Gabon","Gambie","Géorgie","Ghana","Grèce",
        "Grenade","Guatemala","Guinée","Guinée-Bissau","Guinée équatoriale","Guyana","Haïti","Honduras",
        "Hongrie","Inde","Indonésie","Irak","Iran","Irlande","Islande","Israël","Italie","Jamaïque",
        "Japon","Jordanie","Kazakhstan","Kenya","Kirghizistan","Kiribati","Koweït","Laos","Lesotho","Lettonie",
        "Liban","Libéria","Libye","Liechtenstein","Lituanie","Luxembourg","Madagascar","Malaisie","Malawi",
        "Maldives","Mali","Malte","Maroc","Maurice","Mauritanie","Mexique","Micronésie","Moldavie","Monaco",
        "Mongolie","Monténégro","Mozambique","Namibie","Népal","Nicaragua","Niger","Nigeria","Norvège","Nouvelle-Zélande",
        "Oman","Ouganda","Ouzbékistan","Pakistan","Palaos","Palestine","Panama","Papouasie-Nouvelle-Guinée",
        "Paraguay","Pays-Bas","Pérou","Philippines","Pologne","Portugal","Qatar","République centrafricaine",
        "République démocratique du Congo","République dominicaine","République tchèque","Roumanie","Royaume-Uni",
        "Russie","Rwanda","Saint-Kitts-et-Nevis","Saint-Marin","Saint-Vincent-et-les-Grenadines","Sainte-Lucie",
        "Salvador","Samoa","São Tomé-et-Principe","Sénégal","Serbie","Seychelles","Sierra Leone","Singapour",
        "Slovaquie","Slovénie","Somalie","Soudan","Soudan du Sud","Sri Lanka","Suède","Suisse","Suriname",
        "Syrie","Tadjikistan","Tanzanie","Tchad","Thaïlande","Timor oriental","Togo","Tonga","Trinité-et-Tobago",
        "Tunisie","Turkménistan","Turquie","Tuvalu","Ukraine","Uruguay","Vanuatu","Vatican","Venezuela","Vietnam",
        "Yémen","Zambie","Zimbabwe"
    ];

    countries.forEach(country => {
        const option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        select.appendChild(option);
    });
});
</script>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Envoi AJAX + loader span -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    const submitBtn = document.getElementById("contactSubmitBtn");
    const btnText = document.getElementById("btnText");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        // Activer le loader dans le span
        btnText.innerHTML = "<span class='spinner'></span> Patientez...";
        submitBtn.disabled = true;

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                },
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                Swal.fire({
                    title: "Email envoyé !",
                    text: result.message,
                    icon: "success",
                    confirmButtonText: "OK",
                    confirmButtonColor: "#2563eb"
                });

                // Vider le formulaire
                form.reset();
            } else {
                Swal.fire({
                    title: "Erreur",
                    text: result.message,
                    icon: "error",
                    confirmButtonText: "Fermer"
                });
            }

        } catch (error) {
            Swal.fire({
                title: "Erreur inattendue",
                text: "Veuillez réessayer plus tard.",
                icon: "error",
                confirmButtonText: "Fermer"
            });
        } finally {
            // Revenir au texte normal
            btnText.textContent = "Envoyer le message";
            submitBtn.disabled = false;
        }
    });
});
</script>

