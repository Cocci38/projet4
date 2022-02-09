<?php

require 'vendor/autoload.php';

//routing
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}


//rendu\
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/tmp'
]);

if ($page === 'home') {

    $pagetitle = 'Accueil';
    $element = [
        'titre' => 'brouette',
        'prix' => 34
    ];
    $etat = null;
    $annonces = [
        ['titre' => 'brouette', 'prix' => 12],
        ['titre' => 'camion', 'prix' => 34],
        ['titre' => 'moto', 'prix' => 7889],
        ['titre' => 'ambulance', 'prix' => 498],
        ['titre' => 'landeau', 'prix' => 25],
        ['titre' => 'avion', 'prix' => 1454]

    ];

    echo $twig->render('accueil.html.twig', compact('annonces'));
    
}