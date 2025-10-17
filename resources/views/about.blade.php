@extends('layouts.app')

@section('title', 'À propos - Success MDG')
@section('description', 'Découvrez Success MDG, votre agence digitale à Madagascar. Notre équipe, notre mission et nos valeurs.')

@section('content')
    @include('partials.navbar')
    @include('components.about.page-header')
    @include('components.about.story')
    @include('components.about.vision')
    @include('components.about.team')
    @include('components.about.values')
     @include('partials.boutton_devis')
    @include('partials.footer')
@endsection
