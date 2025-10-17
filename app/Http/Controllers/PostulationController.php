<?php

namespace App\Http\Controllers;

use App\Models\Postulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Offre; // 

class PostulationController extends Controller
{
    public function index()
    {
        return view('nous-rejoindre');
    }


public function store(Request $request)
{
    // Validation
    $validated = $request->validate([
        'offre_id' => 'required|exists:offres,id',
        'nom' => 'required|string|max:255',
        'email' => 'required|email',
        'telephone' => 'nullable|string|max:20',
        'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        'lettre_motivation' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Stockage fichiers
    if (!file_exists(public_path('assets/cv'))) mkdir(public_path('assets/cv'), 0775, true);
    if (!file_exists(public_path('assets/lettres'))) mkdir(public_path('assets/lettres'), 0775, true);

    $cvFile = $request->file('cv');
    $cvName = time().'_'.$cvFile->getClientOriginalName();
    $cvFile->move(public_path('assets/cv'), $cvName);

    $lettreName = null;
    if ($request->hasFile('lettre_motivation')) {
        $lettreFile = $request->file('lettre_motivation');
        $lettreName = time().'_'.$lettreFile->getClientOriginalName();
        $lettreFile->move(public_path('assets/lettres'), $lettreName);
    }

    // Enregistrement en base
    Postulation::create([
        'offre_id' => $validated['offre_id'],
        'nom' => $validated['nom'],
        'email' => $validated['email'],
        'telephone' => $validated['telephone'] ?? null,
        'cv' => 'assets/cv/'.$cvName,
        'lettre_motivation' => $lettreName ? 'assets/lettres/'.$lettreName : null,
    ]);

    // Récupérer l'objet offre
    $offre = Offre::find($validated['offre_id']);

    // Envoi email
    Mail::send([], [], function ($message) use ($request, $cvName, $lettreName, $offre) {
        $message->to('emiliasandrina13@gmail.com')
                ->subject('Nouvelle postulation reçue')
                ->text(
                    "Une nouvelle postulation a été soumise :\n\n".
                    "Nom : {$request->nom}\n".
                    "Email : {$request->email}\n".
                    "Téléphone : {$request->telephone}\n".
                    "Poste : {$offre->titre}\n"
                );

        $message->attach(public_path('assets/cv/'.$cvName));

        if ($lettreName) {
            $message->attach(public_path('assets/lettres/'.$lettreName));
        }
    });

    // Réponse JSON avec success
    return response()->json([
        'success' => true,
        'message' => 'Postulation enregistrée avec succès !'
    ], 201);
}



}
