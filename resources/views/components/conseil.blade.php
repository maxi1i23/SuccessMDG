@extends('layouts.app')

@section('content')
    @include('partials.navbar')

    @include('components.conseil.hero')
    @include('components.conseil.intro')
    @include('components.conseil.avantage')
    @include('components.conseil.service')
     @include('partials.boutton_devis')
@include('partials.footer')
@endsection

