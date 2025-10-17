<div class="flex justify-center gap-4">
    <!-- Modifier -->
    <x-filament::button
        color="primary"
        tag="a"
        href="{{ \App\Filament\Resources\Presentations\PresentationResource::getUrl('edit', ['record' => $record->getKey()]) }}"
        class="p-3 rounded-xl shadow-lg text-white transition-all duration-300 transform 
               hover:scale-110 hover:shadow-2xl hover:from-indigo-500 hover:to-purple-500 hover:bg-gradient-to-r"
    >
        ✏️
    </x-filament::button>

    <!-- Supprimer -->
    <form method="POST" action="{{ route('presentations.destroy', $record) }}" onsubmit="return confirm('Êtes-vous sûr ?')">
        @csrf
        @method('DELETE')
        <x-filament::button
            color="danger"
            type="submit"
            class="p-3 rounded-xl shadow-lg text-white transition-all duration-300 transform 
                   hover:scale-110 hover:shadow-2xl hover:from-red-500 hover:to-pink-500 hover:bg-gradient-to-r"
        >
            🗑️
        </x-filament::button>
    </form>

    <!-- Partager -->
    <x-filament::button
        color="success"
        tag="a"
        href="{{ route('presentations.share', $record) }}"
        class="p-3 rounded-xl shadow-lg text-white transition-all duration-300 transform 
               hover:scale-110 hover:shadow-2xl hover:from-green-400 hover:to-green-600 hover:bg-gradient-to-r"
    >
        📤
    </x-filament::button>
</div>
