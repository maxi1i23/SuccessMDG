<div class="flex justify-center gap-6 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 p-4 rounded-2xl shadow-2xl backdrop-blur-md">
    <x-filament::button 
        color="primary" 
        tag="a" 
        href="{{ route('presentation') }}"
        class="px-6 py-3 font-semibold rounded-xl shadow-lg text-white transition-all duration-300 transform hover:scale-110 hover:shadow-2xl hover:from-indigo-500 hover:to-purple-500 hover:bg-gradient-to-r">
        Présentation
    </x-filament::button>

    <x-filament::button 
        color="success" 
        tag="a" 
        href="{{ route('equipe') }}"
        class="px-6 py-3 font-semibold rounded-xl shadow-lg text-white transition-all duration-300 transform hover:scale-110 hover:shadow-2xl hover:from-green-400 hover:to-green-600 hover:bg-gradient-to-r">
        Équipe
    </x-filament::button>

    <x-filament::button 
        color="warning" 
        tag="a" 
        href="{{ route('avis') }}"
        class="px-6 py-3 font-semibold rounded-xl shadow-lg text-white transition-all duration-300 transform hover:scale-110 hover:shadow-2xl hover:from-red-400 hover:to-red-600 hover:bg-gradient-to-r">
        Avis Clients
    </x-filament::button>
</div>
{{-- Removed in-widget content rendering to avoid duplicates with page getWidgets() --}}
