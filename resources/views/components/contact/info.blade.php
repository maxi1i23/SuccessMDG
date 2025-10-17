<div class="grid grid-cols-1 gap-6 max-w-6xl mx-auto">
    <!-- Address -->
    <div class="bg-white rounded-3xl shadow-lg p-6 transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
        <div class="flex items-start space-x-4">
            <div class="bg-gradient-to-br from-purple-100 to-purple-50 p-4 rounded-2xl">
                <i class="fas fa-map-marker-alt text-purple-600 text-2xl"></i>
            </div>
            <div>
                <h5 class="font-bold text-gray-900 mb-2 text-lg">Adresse</h5>
                <p class="text-gray-600 leading-relaxed">
                    Antananarivo 101<br>
                    Madagascar
                </p>
            </div>
        </div>
    </div>

    <!-- Phone -->
    <div class="bg-white rounded-3xl shadow-lg p-6 transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
        <div class="flex items-start space-x-4">
            <div class="bg-gradient-to-br from-green-100 to-green-50 p-4 rounded-2xl">
                <i class="fas fa-phone text-green-600 text-2xl"></i>
            </div>
            <div>
                <h5 class="font-bold text-gray-900 mb-2 text-lg">Téléphone</h5>
                <p class="text-gray-600 mb-1">
                    <a href="tel:+261327144802" class="hover:text-green-600 transition-colors">+261 32 71 448 02</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Email -->
    <div class="bg-white rounded-3xl shadow-lg p-6 transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
        <div class="flex items-start space-x-4">
            <div class="bg-gradient-to-br from-yellow-100 to-yellow-50 p-4 rounded-2xl">
                <i class="fas fa-envelope text-yellow-600 text-2xl"></i>
            </div>
            <div>
                <h5 class="font-bold text-gray-900 mb-2 text-lg">Email</h5>
                <p class="text-gray-600 mb-1">
                    <a href="mailto:contact@success-mdg.com" class="hover:text-yellow-600 transition-colors">contact@success-mdg.com</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Social Media -->
    <div class="bg-white rounded-3xl shadow-lg p-6 transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
        <div class="flex flex-col space-y-4">
            <div class="flex items-center space-x-4">
                <div class="bg-gradient-to-br from-red-100 to-red-50 p-4 rounded-2xl">
                    <i class="fas fa-share-alt text-red-600 text-2xl"></i>
                </div>
                <h5 class="font-bold text-gray-900 text-lg">Réseaux Sociaux</h5>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-blue-50 text-blue-600 rounded-xl hover:bg-blue-100 hover:scale-105 transition-transform text-sm font-medium">
                    <i class="fab fa-facebook-f mr-2"></i>Facebook
                </a>
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-blue-50 text-blue-700 rounded-xl hover:bg-blue-100 hover:scale-105 transition-transform text-sm font-medium">
                    <i class="fab fa-linkedin-in mr-2"></i>LinkedIn
                </a>
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-pink-50 text-pink-600 rounded-xl hover:bg-pink-100 hover:scale-105 transition-transform text-sm font-medium">
                    <i class="fab fa-instagram mr-2"></i>Instagram
                </a>
                <a href="#" class="flex items-center justify-center px-4 py-2 bg-gray-50 text-gray-700 rounded-xl hover:bg-gray-100 hover:scale-105 transition-transform text-sm font-medium">
                    <i class="fab fa-twitter mr-2"></i>Twitter
                </a>
            </div>
        </div>
    </div>
        
        <!-- Bouton Demande de Devis -->
 @include('partials.boutton_devis')

</div>
