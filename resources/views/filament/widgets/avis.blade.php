@php
use App\Models\Temoignages;
use Illuminate\Support\Facades\Storage;

$items = Temoignages::latest()->get();
@endphp

<div>
    @if ($items->isEmpty())
        <x-filament::card>
            <div class="text-center text-gray-500">Aucun témoignage pour le moment.</div>
        </x-filament::card>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($items as $avis)
                <x-filament::card class="h-full">
                    <div class="flex items-start gap-4">
                        {{-- Avatar / Image du client --}}
                        @php
                            $imageUrl = $avis->image 
                                ? Storage::url($avis->image) 
                                : null;
                        @endphp

                        @if ($imageUrl)
                            <img src="{{ $imageUrl }}" 
                                 alt="{{ $avis->nom_client }}" 
                                 class="w-16 h-16 rounded-full object-cover ring-2 ring-indigo-200" />
                        @else
                            <div class="w-16 h-16 rounded-full bg-gray-100 text-gray-500 flex items-center justify-center ring-2 ring-indigo-100">
                                <span class="text-sm font-medium">{{ Str::of($avis->nom_client)->substr(0,2)->upper() }}</span>
                            </div>
                        @endif

                        <div class="flex-1">
                            {{-- Texte du témoignage --}}
                            <p class="text-gray-700 leading-relaxed">
                                <span class="text-2xl align-top text-indigo-400">“</span>
                                {{ $avis->texte }}
                                <span class="text-2xl align-bottom text-indigo-400">”</span>
                            </p>

                            {{-- Infos client --}}
                            <div class="mt-4 flex items-center gap-2 text-sm">
                                <span class="font-semibold text-gray-900">{{ $avis->nom_client }}</span>
                                @if ($avis->entreprise)
                                    <span class="text-gray-400">•</span>
                                    <span class="text-indigo-600">{{ $avis->entreprise }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </x-filament::card>
            @endforeach
        </div>
    @endif
</div>
