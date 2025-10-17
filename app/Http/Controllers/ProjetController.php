<?php 
namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Service; // 🔹 ajouter le modèle Service
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::with(['service', 'souServices'])->latest()->get();

        // Récupérer tous les services et tous les sous-services pour les filtres
        $allServices = Service::all();
        $allSousServices = \App\Models\SousService::all();

        return view('portfolio', compact('projets', 'allServices', 'allSousServices'));
    }

    public function show($slug)
    {
        $projet = Projet::with(['service', 'souServices'])
                        ->where('slug', $slug)
                        ->firstOrFail();

        return view('portfolio.show', compact('projet'));
    }
}
