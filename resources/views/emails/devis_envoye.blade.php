<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de devis</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            border-top: 6px solid #2563eb; /* bleu comme le contact */
        }

        /* HEADER */
        .header {
            background-color: #2563eb;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        /* CONTENU */
        .content {
            padding: 30px;
        }

        .content h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #2563eb;
        }

        .info-item {
            background-color: #eef2ff;
            padding: 14px 18px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
            margin-bottom: 12px;
            word-wrap: break-word;
        }

        .info-item strong {
            display: block;
            margin-bottom: 4px;
            color: #1f2937;
        }

        .info-date {
            background-color: #dbeafe;
            font-style: italic;
            color: #1e3a8a;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #9ca3af;
            background-color: #f3f4f6;
        }

        @media only screen and (max-width: 620px) {
            .container {
                margin: 20px;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <div class="header">
            <h1>Nouvelle demande de devis</h1>
        </div>

        <!-- CONTENU -->
        <div class="content">
            <h2>Détails du projet</h2>

            <div class="info-item">
                <strong>Nom :</strong> {{ $devis->nom }}
            </div>

            <div class="info-item">
                <strong>Email :</strong> {{ $devis->email }}
            </div>

            <div class="info-item">
                <strong>Téléphone :</strong> {{ $devis->telephone }}
            </div>

            <div class="info-item">
                <strong>Adresse :</strong> {{ $devis->adresse }}
            </div>

            <div class="info-item">
                <strong>Sous-service :</strong> {{ $devis->sousService->nom ?? $devis->sous_service_id }}
            </div>

            <div class="info-item">
                <strong>Budget :</strong> {{ $devis->budget }} Ar
            </div>

            <div class="info-item">
                <strong>Délai :</strong> {{ $devis->delai }}
            </div>

            <div class="info-item">
                <strong>Description :</strong> {{ $devis->description_projet }}
            </div>

            <div class="info-item info-date">
                <strong>Date de la demande :</strong> {{ $devis->created_at->format('d/m/Y H:i') }}
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            &copy; {{ date('Y') }} Success MDG. Tous droits réservés.
        </div>
    </div>
</body>
</html>
