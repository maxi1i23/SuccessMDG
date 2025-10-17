@extends('layouts.app')

@section('title', 'Nous Rejoindre - Success MDG')
@section('description', 'Rejoignez l\'équipe de Success MDG et participez à des projets digitaux innovants.')

@section('content')
@include('partials.navbar')

<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-blue-100 relative overflow-hidden">
    <div class="absolute inset-0 -z-10">
        <div class="w-96 h-96 bg-blue-200 rounded-full blur-3xl opacity-30 absolute -top-20 -left-20"></div>
        <div class="w-96 h-96 bg-cyan-200 rounded-full blur-3xl opacity-30 absolute bottom-0 right-0"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4 flex items-center justify-center gap-2">
                <i class="fas fa-users text-blue-600"></i> Nous Rejoindre
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Faites partie de notre équipe dynamique et contribuez à des projets digitaux passionnants.
            </p>
        </div>

        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold mb-6 text-center">Opportunités de Carrière</h2>
            <p class="text-gray-600 mb-8 text-center">
                Chez Success MDG, nous cherchons des talents passionnés par le digital et l'innovation.
                Si vous souhaitez rejoindre une équipe dynamique et contribuer à des projets stimulants,
                n'hésitez pas à nous contacter.
            </p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-r from-blue-50 to-cyan-50 p-6 rounded-xl">
                    <h3 class="text-xl font-bold mb-4 text-blue-600">Postes Disponibles</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Développeur Web</li>
                        <li>• Designer Graphique</li>
                        <li>• Consultant Digital</li>
                        <li>• Chef de Projet</li>
                        <li>• Spécialiste SEO</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-r from-green-50 to-teal-50 p-6 rounded-xl">
                    <h3 class="text-xl font-bold mb-4 text-green-600">Avantages</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Environnement de travail stimulant</li>
                        <li>• Formation continue</li>
                        <li>• Projets variés et innovants</li>
                        <li>• Équipe jeune et dynamique</li>
                        <li>• Possibilité de télétravail</li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="/contact" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg inline-flex items-center gap-2 transition-colors">
                    <i class="fas fa-envelope"></i> Contactez-nous
                </a>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
@endsection