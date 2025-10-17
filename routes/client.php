<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostulationController;



Route::get('/about', function () {
    $equipes = \App\Models\Equipe::all();
    $presentation = \App\Models\Presentation::first(); 
    return view('about', compact('equipes', 'presentation'));
})->name('about');

Route::get('/services', function () { 
    return view('services');
})->name('services');

Route::get('/contact/demande-devis', function () {
    // Redirect to contact page with a query parameter to open the popup
    return redirect()->route('contact', ['openDevis' => 'true']);
})->name('contact.devis');

Route::get('/contact/nous-rejoindre', function () {
    return view('contact.rejoindre');
})->name('contact.rejoindre');

Route::get('contact/rejoindre', function () { 
    $offres = App\Models\Offre::all();
    return view('rejoindre', compact('offres'));
})->name('contact.rejoindre');

Route::get('/services/it-developpement', function () {
    return view('components.itDev'); 
})->name('services.itDev');

Route::get('/services/relation-client', function () {
    return view('components.relationClient'); 
})->name('services.relationClient');

Route::get('/services/traitement-donnee', function () {
    return view('components.traitementDonnee'); 
})->name('services.traitementDonnee');

Route::get('/services/conseil', function () {
    return view('components.conseil'); 
})->name('services.conseil');

Route::get('/services/strategies-digitales', function () {
    return view('components.strategieDigital'); 
})->name('services.strategieDigital');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/portfolio', [ProjetController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [ProjetController::class, 'show'])->name('portfolio.show');
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');
Route::post('/devis/verify-email', [DevisController::class, 'sendEmailVerification'])->name('devis.verifyEmail');
Route::get('/devis/confirm/{token}', [DevisController::class, 'confirm'])->name('devis.confirm');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendVerificationEmail'])->name('contact.send');
Route::get('/contact/verify/{token}', [ContactController::class, 'verifyContact'])->name('contact.verify');
Route::post('/postuler', [PostulationController::class, 'store'])->name('postuler.store');
