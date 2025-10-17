<div class="bg-white p-8 rounded-lg shadow">
    <h3 class="text-2xl font-bold mb-6 text-center">Demande de Devis</h3>
    <form id="quoteForm">
        <div class="grid md:grid-cols-2 gap-4">
            <input type="text" placeholder="Prénom *" class="border p-2 rounded" required>
            <input type="text" placeholder="Nom *" class="border p-2 rounded" required>
            <input type="email" placeholder="Email *" class="border p-2 rounded" required>
            <input type="tel" placeholder="Téléphone *" class="border p-2 rounded" required>
            <input type="text" placeholder="Entreprise *" class="border p-2 rounded md:col-span-2" required>
            <select class="border p-2 rounded">
                <option>Type de service *</option>
                <option>Site vitrine</option>
                <option>Site e-commerce</option>
                <option>Refonte de site</option>
                <option>Création de logo</option>
                <option>Charte graphique</option>
                <option>Supports print</option>
                <option>Audit SEO</option>
                <option>Campagne SEO</option>
                <option>Publicité Google</option>
                <option>Application mobile</option>
                <option>Application web</option>
                <option>Logiciel métier</option>
                <option>Autre</option>
            </select>
            <select class="border p-2 rounded">
                <option>Budget estimé</option>
                <option>Moins de 500 000 Ar</option>
                <option>500 000 - 1 000 000 Ar</option>
                <option>1 000 000 - 2 000 000 Ar</option>
                <option>2 000 000 - 5 000 000 Ar</option>
                <option>Plus de 5 000 000 Ar</option>
            </select>
            <textarea placeholder="Description du projet *" class="border p-2 rounded md:col-span-2" rows="4" required></textarea>
            <textarea placeholder="Informations complémentaires" class="border p-2 rounded md:col-span-2" rows="3"></textarea>
            <div class="md:col-span-2">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox">
                    <span class="ml-2">Je souhaite recevoir des conseils et actualités digitales</span>
                </label>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-6 rounded inline-flex items-center gap-2">
                <i class="fas fa-calculator"></i> Demander un devis gratuit
            </button>
            <p class="text-gray-500 text-sm mt-2">Réponse sous 24h ouvrées</p>
        </div>
    </form>
</div>
