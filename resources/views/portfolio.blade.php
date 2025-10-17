@extends('layouts.app') <!-- si vous utilisez un layout principal -->

@section('content')

    @include('partials.navbar')
    @include('components.portfolio.header')

    @include('components.portfolio.projets')
     @include('partials.boutton_devis')
    @include('partials.footer')
     @include('partials.boutton_devis')
@endsection
