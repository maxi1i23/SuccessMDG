<?php
namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Projet;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        // $categories = Categories::all();
        // $projets = Projet::with('categorie')->get();

        // // Comme tu as "resources/views/portfolio.blade.php"
        // return view('portfolio', compact('categories', 'projets'));
    }
}
