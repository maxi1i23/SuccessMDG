@extends('layouts.app')

@section('title', 'Blog & Actualités')

@section('content')
    @include('partials.navbar')
    @include('components.rejoindre.hero')
    @include('components.rejoindre.poste')
    @include('components.rejoindre.processus')
    @include('components.rejoindre.contact')
    @include('partials.boutton_devis')
    @include('partials.footer')
@endsection


