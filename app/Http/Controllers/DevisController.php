<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\DevisEnvoyeMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DevisController extends Controller
{
    /**
     * Étape 1 : Envoi de l'email de confirmation
     */
    public function sendEmailVerification(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telephone' => 'required|string|max:50',
        'adresse' => 'required|string|max:255',
        'sous_service_id' => 'required',
        'budget' => 'required|numeric',
        'delai' => 'required|string',
        'description_projet' => 'required|string',
    ]);

    try {
        // Générer un token unique
        $token = Str::random(40);

        // Encoder les infos utilisateur (base64 + json)
        $encodedData = base64_encode(json_encode($validated));

        // URL de confirmation avec token et données
        $verificationUrl = route('devis.confirm', [
            'token' => $token,
            'data' => $encodedData
        ]);

        // Envoyer l'email avec le bouton de confirmation
        Mail::html("
            <p>Bonjour {$validated['nom']},</p>
            <p>Veuillez confirmer votre demande de devis en cliquant sur ce bouton :</p>
            <p style='text-align:center; margin:20px 0;'>
                <a href='{$verificationUrl}' 
                style='display:inline-block;padding:12px 24px;background:#4f46e5;color:#fff;text-decoration:none;border-radius:8px;font-weight:bold;'>
                Confirmer ma demande
                </a>
            </p>
            <p>Merci !</p>
        ", function ($message) use ($validated) {
            $message->to($validated['email'])
                    ->subject('Confirmez votre demande de devis');
        });

        return response()->json([
            'success' => true,
            'message' => 'Email de confirmation envoyé !'
        ]);

    } catch (\Exception $e) {
        Log::error("Erreur envoi email : " . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Erreur : ' . $e->getMessage()
        ], 500);
    }
}


    /**
     * Étape 2 : Confirmation via bouton dans l'email
     */
   public function confirm(Request $request, $token)
{
    // Récupérer les données envoyées par URL
    $encodedData = $request->query('data');

    if (!$encodedData) {
        abort(404, 'Lien invalide ou expiré.');
    }

    // Décoder les infos du devis
    $decodedData = json_decode(base64_decode($encodedData), true);

    if (!$decodedData) {
        abort(400, 'Erreur de décodage des données.');
    }

    // Vérifier si un devis avec le même email existe déjà
    $exists = Devis::where('email', $decodedData['email'])
                    ->where('description_projet', $decodedData['description_projet'])
                    ->exists();

    if (!$exists) {
        // Créer le devis dans la base
        $devis = Devis::create(array_merge($decodedData, [
            'verified' => true,
            'verification_token' => $token
        ]));

        // Envoyer le mail à l’admin
        try {
            Mail::to('emiliasandrina13@gmail.com')->send(new DevisEnvoyeMail($devis));
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'envoi du mail à l'admin : " . $e->getMessage());
        }
    }

    // Afficher une page de succès
    return view('devis.email_confirmed', [
        'message' => 'Votre demande de devis a été confirmée avec succès ! 🎉'
    ]);
}
}