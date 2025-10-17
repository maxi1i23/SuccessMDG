<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Assets\Css;
use Filament\Facades\Filament;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Filament::serving(function () {
            FilamentAsset::register([
                Css::make(asset('css/filament-custom.css')),
            ]);
        });
    }
}
