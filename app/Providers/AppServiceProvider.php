<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// use Filament\Facades\Filament;
// use Filament\Support\Facades\FilamentAsset;
// use Filament\Support\Assets\Css;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void

    {
        // Partager la liste des sous-services avec toutes les vues
        View::composer('*', function ($view) {
            $view->with('allSousServices', \App\Models\SousService::all());
        });
        
     }
}
