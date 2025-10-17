@extends('layouts.app')

@section('content')
@include('partials.navbar')
@include('components.strategieDigital.hero')
@include('components.strategieDigital.intro')
@include('components.strategieDigital.avantage')
@include('components.strategieDigital.service')
 @include('partials.boutton_devis')
@include('partials.footer')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof AOS !== 'undefined') {
        AOS.init({ 
            duration: 1000, 
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
    }
});
</script>
@endpush
