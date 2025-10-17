@extends('layouts.app')

@section('content')
@include('partials.navbar')

@include('components.traitement-donnee.hero')
@include('components.traitement-donnee.intro')
@include('components.traitement-donnee.avantage')
@include('components.traitement-donnee.service')
 @include('partials.boutton_devis')
@include('partials.footer')
@endsection


