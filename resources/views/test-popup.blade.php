@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6">Test Page for Devis Popup</h1>
    
    <p class="mb-4">This is a test page to verify that the devis popup works correctly.</p>
    
    <div class="mb-8">
        <button id="test-button" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
            Open Popup Manually
        </button>
    </div>
    
    <!-- Include the floating button -->
    @include('partials.boutton_devis')
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const testButton = document.getElementById('test-button');
        
        if (testButton && window.openPopup) {
            testButton.addEventListener('click', window.openPopup);
        }
    });
</script>
@endpush
@endsection