@extends('layouts.app')

@section('title', 'Blog & Actualités')

@section('content')
    @include('partials.navbar')
    @include('components.blog.header')
    @include('components.blog.feature')
    @include('components.blog.article')
    <!-- @include('components.blog.newsletter') -->
     @include('partials.boutton_devis')
    @include('partials.footer')
@endsection

@push('styles')
    @include('partials.style')
@endpush
