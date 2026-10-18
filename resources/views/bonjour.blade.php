<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma première page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        .boite {
            background-color: #e3f2fd;
            padding: 2rem;
            border-radius: 10px;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <h1>Bonjour ! @User</h1>
    <hr>

    <div class="boite">
        <p style="text-align: center; font-size: 1.2rem;">
            Bienvenue sur mon premier site avec Laravel
        </p>
        <p>Date du jour : <strong>{{ date('d/m/Y à H:i') }}</strong></p>
    </div>

</body>
</html>