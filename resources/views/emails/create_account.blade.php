<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur notre site</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f6f6f6; margin: 0; padding: 20px;">
    <div
        style="background-color: #ffffff; padding: 20px; border-radius: 8px; max-width: 600px; margin: auto; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
        <h1 style="color: #333;">Bonjour {{ $user['nom'] }}</h1>

        <p style="line-height: 1.5; color: #555;">
            Merci pour votre demande de création de compte.<br>
            Un de nos agents prendra contact avec vous bientôt.
        </p>

        <p style="line-height: 1.5; color: #555;">
            Cordialement, <br>
            <strong>Ticafrique</strong>
        </p>

        <a href="#"
            style="display: inline-block; margin-top: 15px; padding: 10px 18px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
            Voir notre site web
        </a>
    </div>
</body>

</html>
