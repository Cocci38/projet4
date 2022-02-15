<?php
$annonce = ['titre' => 'brouette', 'prix' => 12, 'categorie' => 'objet', 'mail' => 'jkasperski@free.fr', 'etat' => 'Validation', 'id' => 02, 'description' => 'lorem,lorem,lorem,lorem'];
require_once 'vendor/autoload.php';
require_once 'annoncemjml.php';

//use \node_modules\Mjml\Renderer\BinaryRenderer;
//use \Qferrer\Mjml\Renderer\BinaryRenderer;
///$renderer = new BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');

//use \node_modules\Mjml\Renderer\BinaryRenderer;
//$renderer = new \Qferrer\Mjml\Renderer\BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');



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
        ['titre' => 'brouette', 'prix' => 12, 'categorie' => 'objet', 'mail' => 12],
        ['titre' => 'camion', 'prix' => 344565],
        ['titre' => 'moto', 'prix' => 7889],
        ['titre' => 'ambulance', 'prix' => 4745],
        ['titre' => 'landeau', 'prix' => 25],
        ['titre' => 'avion', 'prix' => 1454],
        ['titre' => 'bateau', 'prix' => 451454]
    ];

    $compteur = count($annonces);
    $element = compact('compteur');

    
    /** Insertion de l'annonce */

    //$annonceMJML = $twig->display('mail-add-update.twig', compact('annonce'));

    switch (@$_GET['statut']) {
        case 'add':
            echo $twig->display('ajout.twig'); 
            break;

        case 'edit':
            echo $twig->display('details.twig', compact('annonce'));        # code...
            break;

        case 'up':
            echo $twig->display('modifier.twig', compact('annonce'));        # code...
            break;
        case 'val':
            echo  $twig->display('confirm.twig', compact('annonce'));        # code...
            break;
        case  "del":
            echo $twig->display('delete.twig', compact('annonce'));        # code...
            break;
        default:
            $rendu = $twig->render('index.twig', $element);
            $twig->display('index.twig', compact('annonces'));        # code...
            break;
    }
    //echo $twig->display('index.twig', compact('annonce'));
    //  $annonceHTML = $renderer->render($annonceMJML);
    //$annonceHTML = $renderer->render('ajout.twig');
    //$sujet = "mail de " . $annonce['etat'];
    //$desinataire = $annonce['mail'];
    //mail($destinaire, $sujet, $annonceHTML);
    
}