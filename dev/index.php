<?php
$annonce = ['titre' => 'brouette', 'prix' => 12, 'categorie' => 'objet', 'mail' => 'jkasperski@free.fr', 'etat' => 'Validation', 'id' => 02, 'description' => 'lorem,lorem,lorem,lorem'];
require_once 'vendor/autoload.php';
require_once 'annoncemjml.php';

//use \node_modules\Mjml\Renderer\BinaryRenderer;
use \Qferrer\Mjml\Renderer\BinaryRenderer;
///$renderer = new BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');

//use \node_modules\Mjml\Renderer\BinaryRenderer;


//$renderer = BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');
//$html = $renderer->render($annonceMJML);


//routing
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}


//rendu\
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false
]);

if ($page === 'home') {

    $pagetitle = 'Accueil';
    $element = [
        'titre' => 'brouette',
        'prix' => 34
    ];
    $etat = null;

    $annonces = [
        ['titre' => 'brouette', 'prix' => 12, 'categorie' => 'objet', 'mail' => 'jkasperski@free.fr', 'image1' => 'brouette.jpeg', 'id' => 1],
        ['titre' => 'camion', 'prix' => 344565, 'categorie' => 'vehicule', 'mail' => 'hello@free.fr', 'image1' => 'camion.jpg', 'id' => 2],
        ['titre' => 'moto', 'prix' => 7889, 'categorie' => 'vehicule', 'mail' => 'jk@free.fr', 'image1' => 'moto.jfif.', 'id' => 3],
        ['titre' => 'ambulance', 'prix' => 4745, 'categorie' => 'vehicule', 'mail' => 'kj@free.fr', 'image1' => 'ambulance.jpg', 'id' => 4],
        ['titre' => 'landeau', 'prix' => 25, 'categorie' => 'vehicule', 'mail' => 'jkasperski@free.fr', 'image1' => 'landeau.jpg', 'id' => 5],
        ['titre' => 'avion', 'prix' => 1454, 'categorie' => 'vehicule', 'mail' => 'jkasperski@free.fr', 'image1' => 'avion.png', 'id' => 6],
        ['titre' => 'bateau', 'prix' => 451454, 'categorie' => 'vehicule', 'mail' => 'bonbon@free.fr', 'image1' => 'bateau.jpeg', 'id' => 7],
        ['titre' => 'tonneau', 'prix' => 44, 'categorie' => 'objet', 'mail' => 'bonbon@free.fr', 'image1' => 'tonneau.jpg','image2'=>'tonneau2.jpg', 'id' => 8]
    ];

    $compteur = count($annonces);
    $element = compact('compteur');

    
    /** Insertion de l'annonce */

    //$annonceMJML = $twig->display('mail-add-update.twig', compact('annonce'));

    switch (@$_GET['statut']) {
        case 'mail':
            $annonce = $annonces[@$_GET['id'] - 1];
            echo $twig->display('mail-add-update.twig', compact('annonce'));
            $renderer = new \Qferrer\Mjml\Renderer\BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');
            ob_start();
            require "annoncemjml.php";
            $annonceMJML=ob_get_clean();
            $annonceHTML = $renderer->render('ajout.twig',compact(''));
            break;
        case 'add':
            echo $twig->display('add.twig'); 
            break;
        case 'edit':
            $annonce = $annonces[@$_GET['id'] - 1];
            echo $twig->display('show.twig', compact('annonce'));        # code...
            break;

        case 'up':
            $annonce = $annonces[@$_GET['id'] - 1];
            echo $twig->display('update.twig', compact('annonce'));        # code...
            break;
        case 'val':
            $annonce = $annonces[@$_GET['id'] - 1];
            echo  $twig->display('confirm.twig', compact('annonce'));        # code...
            break;
        case  'del':
            $annonce = $annonces[@$_GET['id'] - 1];
            echo $twig->display('delete.twig', compact('annonce'));        # code...
            break;
        default:
            $twig->display('accueil.twig', compact('annonces'));        # code...
            break;
    }
    //echo $twig->display('index.twig', compact('annonce'));
    //  $annonceHTML = $renderer->render($annonceMJML);
    //$annonceHTML = $renderer->render('ajout.twig');
    //$sujet = "mail de " . $annonce['etat'];
    //$desinataire = $annonce['mail'];
    //mail($destinaire, $sujet, $annonceHTML);
    
}