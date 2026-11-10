
<div class="grille-articles">

    <?php foreach ($articles as $article): ?>

        <div class="carte-article">

            <a href="article.php?id=<?= (int)$article['id'] ?>"
               class="carte-image">

                <img
                    src="images/<?= htmlspecialchars($article['image'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="Illustration"
                >

            </a>

            <span class="etiquette-categorie">
                <?= htmlspecialchars($article['categorie_libelle'], ENT_QUOTES, 'UTF-8') ?>
            </span>

            <div class="carte-contenu">

                <h3>
                    <a href="article.php?id=<?= (int)$article['id'] ?>">
                        <?= htmlspecialchars($article['titre'], ENT_QUOTES, 'UTF-8') ?>
                    </a>
                </h3>

                <p>
                    <?= htmlspecialchars(
                   substr($article['contenu'], 0, 100),
                        ENT_QUOTES,
                        'UTF-8'
                    ) ?>...
                </p>

                <div class="carte-meta">

                    <span>
                        <?= date('d M Y', strtotime($article['date_creation'])) ?>
                    </span>

                    <span>5 min</span>

                </div>

            </div>

        </div>

    <?php endforeach; ?>

</div>
