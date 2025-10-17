@extends('layouts.app')

@section('title', 'Contact - Success MDG')
@section('description', 'Contactez Success MDG pour vos projets digitaux.')

@section('content')
@include('partials.navbar')
@include('components.contact.header')

<!-- Section Contact -->
<section class="py-0 bg-gradient-to-br via-white to-white-100 relative overflow-hidden">
    <!-- Bulles décoratives -->
    <div class="absolute inset-0 -z-10">
        <div class="w-96 h-96 bg-white-200 rounded-full blur-3xl opacity-30 absolute -top-20 -left-20"></div>
        <div class="w-96 h-96 bg-white-200 rounded-full blur-3xl opacity-30 absolute bottom-0 right-0"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-12">

        <!-- Titre Contact + description -->
        <div class="text-center mb-8 wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4 flex items-center justify-center gap-2">
                <i class="fas fa-envelope text-orange-600"></i> Contactez-nous
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Vous avez un projet digital ou une question ? Remplissez le formulaire ci-dessous et notre équipe vous répondra rapidement.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-10">

            <!-- Formulaire -->
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-xl p-8 wow fadeInUp" data-wow-delay="0.2s">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">📩 Envoyez-nous un message</h3>
                @include('components.contact.form')
            </div>

            <!-- Infos contact -->
            <div class="space-y-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition-all text-center">
                    <div class="w-16 h-16 mx-auto flex items-center justify-center rounded-full bg-gradient-to-r from-green-500 to-teal-500 text-white shadow-md mb-4">
                        <i class="fas fa-location-dot text-2xl"></i> <!-- Icône moderne -->
                    </div>
                    @include('components.contact.info')
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-white relative wow fadeInUp" data-wow-delay="0.4s">
    <div class="container mx-auto px-6 lg:px-12">
        <h3 class="text-3xl font-extrabold text-gray-900 text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
            📍 Notre Localisation
        </h3>
        <p class="text-center text-gray-600 mb-10 wow fadeInUp" data-wow-delay="0.2s">
            Venez nous rendre visite à notre bureau d'Antananarivo
        </p>
        <div class="rounded-2xl overflow-hidden shadow-lg wow fadeInUp" data-wow-delay="0.3s">
            @include('components.contact.map')
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gradient-to-tr from-purple-100 via-white to-purple-50">
    <div class="container mx-auto px-6 lg:px-12 wow fadeInUp" data-wow-delay="0.1s">
        @include('components.contact.faq')
    </div>
</section>

@include('partials.footer')

<!-- WOW.js & Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
    
    // Check if we should open the devis popup
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('openDevis') === 'true') {
            if (typeof window.openPopup === 'function') {
                window.openPopup();
            }
        }
    });
</script>
 @include('partials.boutton_devis')
@endsection
