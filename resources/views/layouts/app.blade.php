<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Success MDG - Agence Digitale Madagascar' }}</title>
    <meta name="description" content="{{ $description ?? 'Agence digitale à Madagascar' }}">
    <link rel="icon" href="/images/logo.jfif" type="image/jpeg">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- Flowbite -->
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</head>
<body class="bg-white text-gray-800">

    {{-- Contenu principal --}}
    @yield('content')
    
    {{-- Popup de demande de devis --}}
    @include('partials.boutton_devis')
    @include('partials.devis-popup')
    

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            document.getElementById('mobile-menu')?.classList.toggle('hidden');
        });

        // Navbar shadow on scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (nav) {
                if (window.scrollY > 50) {
                    nav.classList.add('shadow-lg');
                } else {
                    nav.classList.remove('shadow-lg');
                }
            }
        });

        // Initialize WOW.js
        new WOW().init();
    </script>

    @stack('scripts')
</body>
</html>
