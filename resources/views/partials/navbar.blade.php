<nav class="bg-white text-gray-900 fixed top-0 w-full z-50 shadow-md rounded-b-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.jfif') }}" alt="Logo Success MDG" class="h-10 w-auto">
                    <span class="text-2xl font-bold tracking-wide hover:text-indigo-600 transition-colors">
                        Success MDG
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 font-medium text-lg relative">
                <a href="/" class="hover:text-purple-500 transition-colors {{ request()->is('/') ? 'text-indigo-600 bg-indigo-50 px-3 py-2 rounded-lg font-semibold' : '' }}">Accueil</a>
                <a href="/about" class="hover:text-purple-500 transition-colors {{ request()->is('about') ? 'text-indigo-600 bg-indigo-50 px-3 py-2 rounded-lg font-semibold' : '' }}">À propos</a>

                <!-- Dropdown Services -->
                <div class="group relative">
                    <a href="/services" class="hover:text-purple-500 transition-colors flex items-center {{ request()->is('services') ? 'text-indigo-600 bg-indigo-50 px-3 py-2 rounded-lg font-semibold' : '' }}">
                        Services <i class="fas fa-chevron-down ml-2 text-sm"></i>
                    </a>
                    
                    <!-- Sous-menu -->
                    <div class="absolute left-0 mt-2 w-64 bg-white rounded-xl shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <a href="{{ route('services.itDev') }}" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors rounded-t-xl">IT & Développement</a>
                        <a href="{{ route('services.relationClient') }}" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Relation Client & BPO</a>
                        <a href="{{ route('services.traitementDonnee') }}" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Traitement de Données</a>
                        <a href="{{ route('services.conseil') }}" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">Accompagnement & Conseil</a>
                        <a href="{{ route('services.strategieDigital') }}" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors rounded-b-xl">Stratégies Digitales & Commerciales</a>
                    </div>
                </div>

                <a href="/portfolio" class="hover:text-purple-500 transition-colors {{ request()->is('portfolio') ? 'text-indigo-600 bg-indigo-50 px-3 py-2 rounded-lg font-semibold' : '' }}">Réalisation</a>
                <a href="/blog" class="hover:text-purple-500 transition-colors {{ request()->is('blog') ? 'text-indigo-600 bg-indigo-50 px-3 py-2 rounded-lg font-semibold' : '' }}">Blog</a>

                <!-- Dropdown Contact -->
                <div class="group relative">
                    <a href="/contact" class="hover:text-purple-500 transition-colors flex items-center {{ request()->is('contact*') ? 'text-indigo-600 bg-indigo-50 px-3 py-2 rounded-lg font-semibold' : '' }}">
                        Contact <i class="fas fa-chevron-down ml-2 text-sm"></i>
                    </a>

                    <div class="absolute left-0 mt-2 w-64 bg-white rounded-xl shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <a href="/contact" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors rounded-t-xl">Contact</a>

                        <a href="#" 
                        class="open-devis block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors" 
                        role="button" aria-haspopup="dialog" data-open-devis>
                        Demande de Devis
                        </a>

                        <a href="{{ route('contact.rejoindre') }}" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors rounded-b-xl">Nous Rejoindre</a>
                    </div>
                </div>
            </div>

            <!-- Mobile Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-900 hover:text-indigo-600 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200 rounded-b-xl">
        <a href="/" class="block px-4 py-2 hover:text-purple-500 transition-colors {{ request()->is('/') ? 'text-indigo-600 bg-indigo-50 font-semibold' : '' }}">Accueil</a>
        <a href="/about" class="block px-4 py-2 hover:text-purple-500 transition-colors {{ request()->is('about') ? 'text-indigo-600 bg-indigo-50 font-semibold' : '' }}">À propos</a>

        <!-- Mobile Dropdown -->
        <div class="border-t border-gray-100">
            <div class="flex items-center justify-between">
                <a href="/services" class="flex-1 px-4 py-2 font-medium hover:text-purple-500 transition {{ request()->is('services') ? 'text-indigo-600 bg-indigo-50 font-semibold rounded-lg' : '' }}">Services</a>
                <button type="button" class="px-4 py-2 text-gray-900 hover:text-purple-500 transition" onclick="document.getElementById('mobile-submenu').classList.toggle('hidden')">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
            <div id="mobile-submenu" class="hidden bg-gray-50">
                <a href="{{ route('services.itDev') }}" class="block px-6 py-2 hover:text-indigo-600">IT & Développement</a>
                <a href="{{ route('services.relationClient') }}" class="block px-6 py-2 hover:text-indigo-600">Relation Client & BPO</a>
                <a href="{{ route('services.traitementDonnee') }}" class="block px-6 py-2 hover:text-indigo-600">Traitement des Données</a>
                <a href="{{ route('services.conseil') }}" class="block px-6 py-2 hover:text-indigo-600">Accompagnement & Conseil</a>
                <a href="{{ route('services.strategieDigital') }}" class="block px-6 py-2 hover:text-indigo-600">Stratégies Digitales & Commerciales</a>
            </div>
        </div>

        <a href="/portfolio" class="block px-4 py-2 hover:text-purple-500 transition-colors {{ request()->is('portfolio') ? 'text-indigo-600 bg-indigo-50 font-semibold' : '' }}">Réalisation</a>
        <a href="/blog" class="block px-4 py-2 hover:text-purple-500 transition-colors {{ request()->is('blog') ? 'text-indigo-600 bg-indigo-50 font-semibold' : '' }}">Blog</a>

        <!-- Mobile Dropdown Contact -->
        <div class="border-t border-gray-100">
            <div class="flex items-center justify-between">
                <a href="/contact" class="flex-1 px-4 py-2 font-medium hover:text-purple-500 transition {{ request()->is('contact*') ? 'text-indigo-600 bg-indigo-50 font-semibold rounded-lg' : '' }}">Contact</a>
                <button type="button" class="px-4 py-2 text-gray-900 hover:text-purple-500 transition" onclick="document.getElementById('mobile-contact-submenu').classList.toggle('hidden')">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
            <div id="mobile-contact-submenu" class="hidden bg-gray-50">
                <a href="/contact" class="block px-6 py-2 hover:text-indigo-600">Contact</a>
                <a href="javascript:void(0)" onclick="window.openPopup()" class="block px-4 py-3 hover:bg-indigo-50 hover:text-indigo-600 transition-colors" data-open-devis>
                    Demande de Devis
                </a>                
                <a href="{{ route('contact.rejoindre') }}" class="block px-6 py-2 hover:text-indigo-600">Nous Rejoindre</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const devisTriggers = document.querySelectorAll('[data-open-devis]');

        if (devisTriggers.length === 0) {
            return;
        }

        devisTriggers.forEach((trigger) => {
            trigger.addEventListener('click', (event) => {
                event.preventDefault();

                if (typeof window.openPopup === 'function') {
                    window.openPopup();
                } else {
                    console.warn('openPopup function not found. Make sure the devis popup script is loaded.');
                }

                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }

                const mobileContactSubmenu = document.getElementById('mobile-contact-submenu');
                if (mobileContactSubmenu && !mobileContactSubmenu.classList.contains('hidden')) {
                    mobileContactSubmenu.classList.add('hidden');
                }
            });
        });
    });
</script>
