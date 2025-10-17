<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivateFileController;

// Include client routes
require __DIR__.'/client.php';

Route::get('/', function () {
    $temoignages = \App\Models\Temoignages::all();
    return view('welcome', compact('temoignages'));
});

// Redirige avec paramètre de requête pour contrôler l'affichage
Route::get('/presentation', function () {
    return redirect()->route('filament.admin.pages.dashboard', ['show' => 'presentation']);
})->name('presentation');

Route::get('/equipe', function () {
    return redirect()->route('filament.admin.pages.dashboard', ['show' => 'equipe']);
})->name('equipe');

Route::get('/avis', function () {
    return redirect()->route('filament.admin.pages.dashboard', ['show' => 'avis']);
})->name('avis');

// Test route for popup
Route::get('/test-popup', function () {
    return view('test-popup');
})->name('test-popup');

// Route sécurisée pour servir les fichiers depuis storage/app/private

