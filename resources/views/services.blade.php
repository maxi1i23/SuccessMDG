@extends('layouts.app')

@section('title', 'Services - Success MDG')
@section('description', 'Découvrez nos services : Graphisme, Web, SEO, Applications, etc.')

@section('content')

    @include('partials.navbar')
    @include('components.services.header')
    @include('components.services.relation_client')
    @include('components.services.traitement_donnee')
    @include('components.services.strategie_digital')
    @include('components.services.web')
    @include('components.services.conseil')
    @include('components.services.process')
    @include('partials.boutton_devis')
    @include('partials.footer')

@endsection
