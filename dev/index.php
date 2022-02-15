<?php

require_once 'vendor/autoload.php';
$annonce = ['titre' => 'brouette', 'prix' => 12, 'categorie' => 'objet', 'mail' => 'jkasperski@free.fr', 'etat' => 'Validation', 'id' => 02, 'description' => 'lorem,lorem,lorem,lorem'];
require_once 'annoncemjml.php';

use \node_modules\Mjml\Renderer\BinaryRenderer;
$renderer = new \Qferrer\Mjml\Renderer\BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');

    
//$renderer = BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');

//routing
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}


//rendu\
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false//__DIR__ . '/tmp'
]);









if ($page === 'home') {

    $pagetitle = 'Accueil';
    $element = [
        'titre' => 'brouette',
        'prix' => 34
    ];
    $etat = null;
    
    $annonces = [
        ['titre' => 'brouette', 'prix' => 12, 'categorie' => 12, 'mail' => 12],
        ['titre' => 'camion', 'prix' => 34],
        ['titre' => 'moto', 'prix' => 7889],
        ['titre' => 'ambulance', 'prix' => 47],
        ['titre' => 'landeau', 'prix' => 25],
        ['titre' => 'avion', 'prix' => 1454]

    ];
    /** Insertion de l'annonce */

    //$annonceMJML = $twig->render('mail-add-update.twig', compact('annonce'));

    //echo $twig->display('ajout.twig');
    //  $annonceHTML = $renderer->render($annonceMJML);
    $annonceHTML = $renderer->render($annonceMJML);
    $sujet = "mail de " . $annonce['etat'];
    $desinataire = $annonce['mail'];
    mail($destinaire, $sujet, $annonceHTML);
    
}