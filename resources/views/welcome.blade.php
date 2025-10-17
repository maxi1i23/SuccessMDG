@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    @include('components.accueil.hero')
    @include('components.accueil.presentation')
    @include('components.accueil.raison')
    @include('components.accueil.services')
    @include('components.accueil.testimonials')
    @include('partials.footer')
    @include('partials.boutton_devis')
@endsection
