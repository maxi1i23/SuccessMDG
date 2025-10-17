@php
    // Filament dashboard page view: only render main widgets.
    // Header widgets are automatically handled by Filament.
@endphp

<x-filament::page>
    {{-- Main/content widgets (switches based on ?show=...) --}}
    <x-filament-widgets::widgets :widgets="$this->getWidgets()" />
</x-filament::page>