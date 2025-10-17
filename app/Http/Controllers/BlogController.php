<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\SousService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Affiche la liste de tous les articles.
     */
    public function index(Request $request)
    {
        // Charger tous les articles avec auteur et sous-services
        $articles = Article::with(['auteur', 'souServices'])
            ->latest()
            ->get();

        // Charger tous les sous-services pour le filtre
        $allSousServices = SousService::all();

        // Passer les deux variables à la vue
        return view('blog', compact('articles', 'allSousServices'));
    }


    /**
     * Affiche un article précis selon son slug.
     */
    public function show(string $slug)
    {
        // Récupérer l'article correspondant au slug, avec auteur et sous-services
        $article = Article::with(['auteur', 'souServices'])
            ->where('slug', $slug)
            ->firstOrFail(); // renvoie 404 si l'article n'existe pas

        return view('blog-show', compact('article'));
    }
}
