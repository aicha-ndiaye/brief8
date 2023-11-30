<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }

        .confirmation-message {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .confirmation-message h2 {
            color: #28a745;
        }

        .confirmation-message p {
            color: #333333;
        }

        .confirmation-icon {
            font-size: 48px;
            color: #28a745;
            margin-bottom: 20px;
        }

        .go-home-link {
            display: block;
            margin-top: 20px;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="confirmation-message">
        <span class="confirmation-icon">✓</span>
        <h2>Votre réservation a été bien envoyée !</h2>
        <p>Vous recevrez un email de confirmation sous peu.</p>
        <a href="pageUser" class="go-home-link">Retour à l'accueil</a>
    </div>

</body>
</html>
