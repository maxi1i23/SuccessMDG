<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    // Étape 1 : Envoi de l'email de vérification (sans enregistrer)
    public function sendVerificationEmail(Request $request)
    {
        $validated = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:50',
            'adresse' => 'nullable|string|max:255',
            'pays' => 'nullable|string|max:100',
            'message' => 'required|string',
            'newsletter' => 'nullable|boolean',
        ]);

        try {
            $token = Str::random(40);

            // Encodage temporaire des données
            $data = base64_encode(json_encode($validated));

            // Lien de vérification
            $verificationUrl = route('contact.verify', ['token' => $token, 'data' => $data]);

            // Contenu de l’email
            $html = "
                <p>Bonjour {$validated['prenom']},</p>
                <p>Merci pour votre message ! Pour confirmer votre email et envoyer votre message à notre équipe, veuillez cliquer ci-dessous :</p>
                <p style='text-align:center; margin:20px 0;'>
                    <a href='{$verificationUrl}' style='display:inline-block;padding:12px 24px;background:#2563eb;color:white;text-decoration:none;border-radius:8px;font-weight:bold;'>Confirmer mon message</a>
                </p>
                <p>Merci,<br>L’équipe du site</p>
            ";

            Mail::html($html, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Veuillez confirmer votre adresse email');
            });

            return response()->json([
                'success' => true,
                'message' => 'Un email de confirmation vous a été envoyé. Merci de vérifier votre boîte mail.',
            ]);

        } catch (\Exception $e) {
            Log::error('Erreur envoi email contact : ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l’envoi de l’email : ' . $e->getMessage()
            ], 500);
        }
    }

    // Étape 2 : Quand l’utilisateur clique sur le lien de l’email
    public function verifyContact($token, Request $request)
    {
        try {
            $decodedData = json_decode(base64_decode($request->query('data')), true);

            if (!$decodedData) {
                abort(400, 'Données invalides.');
            }

            // Enregistrer enfin dans la base
            $contact = Contact::create(array_merge($decodedData, [
                'verified' => true,
                'verification_token' => $token,
            ]));

            // Envoi d’un mail à l’admin
            $htmlAdmin = "
<table width='100%' cellpadding='0' cellspacing='0' style='font-family:Arial,sans-serif; background:#f9f9f9; padding:20px;'>
    <tr>
        <td>
            <table width='600' cellpadding='0' cellspacing='0' align='center' style='background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 0 10px rgba(0,0,0,0.1);'>
                <tr>
                    <td style='background:#2563eb; color:#ffffff; padding:20px; text-align:center; font-size:24px; font-weight:bold;'>
                        Nouveau message 
                    </td>
                </tr>
                <tr>
                    <td style='padding:20px; color:#333333; font-size:16px; line-height:1.5;'>
                        <p>Vous avez reçu un nouveau message de {$contact->email}:</p>
                        <table width='100%' cellpadding='0' cellspacing='0' style='margin-top:10px;'>
                            <tr><td style='font-weight:bold; width:120px;'>Nom :</td><td>{$contact->prenom} {$contact->nom}</td></tr>
                            <tr><td style='font-weight:bold;'>Email :</td><td>{$contact->email}</td></tr>
                            <tr><td style='font-weight:bold;'>Téléphone :</td><td>{$contact->telephone}</td></tr>
                            <tr><td style='font-weight:bold;'>Adresse :</td><td>{$contact->adresse}</td></tr>
                            <tr><td style='font-weight:bold;'>Pays :</td><td>{$contact->pays}</td></tr>
                            <tr><td style='font-weight:bold; vertical-align:top;'>Message :</td><td>{$contact->message}</td></tr>
                        </table>

                        <p style='margin-top:20px;'>Merci,<br>L’équipe du site</p>
                    </td>
                </tr>
                <tr>
                    <td style='background:#f1f1f1; text-align:center; padding:10px; font-size:12px; color:#888888;'>
                        &copy; " . date('Y') . " Success MDG. Tous droits réservés.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
";


            Mail::html($htmlAdmin, function ($message) use ($contact) {
                $message->to('emiliasandrina13@gmail.com')
                        ->subject('📩 Nouveau message de contact confirmé');
            });

            return view('contact.email_confirmed', compact('contact'));

        } catch (\Exception $e) {
            Log::error('Erreur vérification contact : ' . $e->getMessage());
            abort(500, 'Erreur interne.');
        }
    }
}
