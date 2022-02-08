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
    echo $twig->render('home.twig', ['nom' => 'accueil']);
}