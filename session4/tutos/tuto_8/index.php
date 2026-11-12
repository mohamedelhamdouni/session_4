<?php

$taches = [
    [
        'id' => 1,
        'titre' => 'welcome',
        'description' => 'Réaliser la structure HTML de la page d\'accueil avec tous les éléments de base.',
        'date_limite' => '2026-11-15',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 2,
        'titre' => 'Intégrer les styles CSS',
        'description' => 'Appliquer les couleurs et structurer les composants avec Flexbox.',
        'date_limite' => '2026-11-16',
        'priorite' => 'Moyenne',
        'terminee' => true
    ],
    [
        'id' => 3,
        'titre' => 'Créer les fonctions PHP',
        'description' => 'Organiser les traitements de la Todo List et gérer les tableaux.',
        'date_limite' => '2026-11-18',
        'priorite' => 'Haute',
        'terminee' => false
    ],
    [
        'id' => 4,
        'titre' => 'Tester l\'application',
        'description' => 'Vérifier le bon fonctionnement et corriger les éventuelles erreurs.',
        'date_limite' => '2026-11-20',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 5,
        'titre' => 'Préparer la collection des tâches',
        'description' => 'Mettre en place le tableau multidimensionnel associatifet corriger les éventuelles erreurs..',
        'date_limite' => '2026-11-22',
        'priorite' => 'Haute',
        'terminee' => false
    ],
        [
        'id' => 6,
        'titre' => 'Préparer la collection des tâches',
        'description' => 'Mettre en place le tableau multidimensionnel associatifet corriger les éventuelles erreurs..',
        'date_limite' => '2026-11-22',
        'priorite' => 'Haute',
        'terminee' => true
    ],

];



$total_taches = count($taches);
$taches_terminees = 0;
foreach ($taches as $t) {
    if ($t['terminee']) {
        $taches_terminees++;
    }
}

$taches_restantes = $total_taches - $taches_terminees;

require ("index-template.php");

?>;