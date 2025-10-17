<div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">

    {{-- Mission --}}
    <x-filament::card>
        <div class="flex items-center gap-4 mb-4">
            <!-- Icône grand rond -->
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 text-3xl">
                📌
            </div>
            <h2 class="text-xl font-bold text-gray-800">Mission</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
            {{ $presentation?->mission ?? 'Aucune mission trouvée.' }}
        </p>
    </x-filament::card>

    {{-- Historique --}}
    <x-filament::card>
        <div class="flex items-center gap-4 mb-4">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-pink-100 text-pink-600 text-3xl">
                📜
            </div>
            <h2 class="text-xl font-bold text-gray-800">Historique</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
            {{ $presentation?->historique ?? 'Aucun historique trouvé.' }}
        </p>
    </x-filament::card>

    {{-- Vision --}}
    <x-filament::card>
        <div class="flex items-center gap-4 mb-4">
            <div class="w-16 h-16 flex items-center justify-center rounded-full bg-green-100 text-green-600 text-3xl">
                👁️
            </div>
            <h2 class="text-xl font-bold text-gray-800">Vision</h2>
        </div>
        <p class="text-gray-600 leading-relaxed">
            {{ $presentation?->vision ?? 'Aucune vision trouvée.' }}
        </p>
    </x-filament::card>

</div>
