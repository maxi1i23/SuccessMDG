@php
    use App\Models\Equipe;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;
    $equipes = Equipe::query()->latest()->get();
@endphp

@if($equipes->isEmpty())
<x-filament::card>
    <div class="text-center text-gray-500">Aucun membre d'équipe pour le moment.</div>
</x-filament::card>
@else
    <div class="space-y-6">
        @foreach($equipes as $membre)
        <x-filament::card>
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                <div class="grid grid-cols-1 md:grid-cols-5">
                    {{-- Image à gauche --}}
                    <div class="relative md:col-span-2">
                        @if($membre->photo)
                            @php
                                $path = $membre->photo;
                                $imageUrl = Str::startsWith($path, ['http://', 'https://'])
                                    ? $path
                                    : (Str::startsWith($path, ['storage/', '/storage/'])
                                        ? asset(ltrim($path, '/'))
                                        : Storage::disk('public')->url($path));
                            @endphp
                            <img 
                                src="{{ $imageUrl }}" 
                                alt="{{ $membre->nom }}"
                                class="w-full h-64 md:h-full object-cover"
                            />
                        @else
                            <div class="w-full h-64 md:h-full flex items-center justify-center bg-gray-100 text-gray-400">
                                Aucune image
                            </div>
                        @endif
                    </div>

                    {{-- Infos à droite --}}
                    <div class="md:col-span-3 p-6 flex flex-col gap-4">
                        <div class="flex items-start justify-between gap-4">
                            <h3 class="text-2xl font-bold text-gray-900">{{ $membre->nom }}</h3>
                            @if($membre->role)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-700 whitespace-nowrap">
                                    {{ $membre->role }}
                                </span>
                            @endif
                        </div>

                        @if($membre->bio)
                            <p class="text-gray-600 leading-relaxed">{{ $membre->bio }}</p>
                        @endif

                        @if(is_array($membre->reseaux) && count($membre->reseaux))
                            <div class="mt-2 flex flex-wrap gap-2">
                                @foreach($membre->reseaux as $plateforme => $url)
                                    <a href="{{ $url }}" target="_blank" class="inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-xs hover:bg-gray-200">
                                        {{ ucfirst($plateforme) }}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </x-filament::card>
        @endforeach
    </div>
@endif