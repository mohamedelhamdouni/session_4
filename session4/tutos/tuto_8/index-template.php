<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog - Solicode</title>
   
    <link rel="stylesheet" href="css/component.css">
</head>
<body>

    <div class="grille-articles">
        <?php foreach ($articles as $article): ?>
            <div class="carte-article">
                <a href="article.php?id=<?= (int)$article['id'] ?>" class="carte-image">
                    <img src="images/<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>" alt="Illustration">
                </a>

          
                <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
                    <?= htmlspecialchars($article['categorie_libelle'], ENT_QUOTES, 'UTF-8') ?>
                </span>

                <div class="carte-contenu">
     
                    <?php if ($article['id'] == 1): ?>
                        <small class="badge-special">⭐ À la une</small>
                    <?php endif; ?>

                    <h3>
                        <a href="article.php?id=<?= (int)$article['id'] ?>">
                            <?= htmlspecialchars($article['titre'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </h3>

                    <p>
                        <?= htmlspecialchars(substr($article['contenu'], 0, 100), ENT_QUOTES, 'UTF-8') ?>...
                    </p>

                    <div class="carte-meta">
                        <span><?= date('d M Y', strtotime($article['date_creation'])) ?></span>
                        <span>5 min</span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>