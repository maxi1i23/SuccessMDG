@extends('layouts.app')

@section('title', 'Demande de Devis - Success MDG')
@section('description', 'Demandez un devis gratuit pour vos projets digitaux avec Success MDG.')

@section('content')
@include('partials.navbar')

<section class="py-20 bg-gradient-to-br from-purple-50 via-white to-purple-100 relative overflow-hidden">
    <div class="absolute inset-0 -z-10">
        <div class="w-96 h-96 bg-purple-200 rounded-full blur-3xl opacity-30 absolute -top-20 -left-20"></div>
        <div class="w-96 h-96 bg-pink-200 rounded-full blur-3xl opacity-30 absolute bottom-0 right-0"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4 flex items-center justify-center gap-2">
                <i class="fas fa-calculator text-orange-600"></i> Demande de Devis
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Décrivez votre projet et recevez un devis personnalisé gratuit sous 24h.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            @include('components.contact.devis')
        </div>
    </div>
</section>

@include('partials.footer')
@endsection