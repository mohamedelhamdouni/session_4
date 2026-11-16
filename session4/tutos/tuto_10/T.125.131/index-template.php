
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Accueil</title>
</head>

<body>

    <h1><?= htmlspecialchars($article['titre']) ?></h1>

    <p><?= htmlspecialchars($article['contenu']) ?></p>

</body>

</html>
