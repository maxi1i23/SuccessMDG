@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    @include('components.relationClient.hero')
    @include('components.relationClient.intro')
    @include('components.relationClient.avantage')
    @include('components.relationClient.service')
 @include('partials.boutton_devis')
    @include('partials.footer')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof AOS !== 'undefined') AOS.init({ duration: 800, once: true });
});
</script>
@endpush
