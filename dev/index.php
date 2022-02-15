<?php

require_once 'vendor/autoload.php';

//use \node_modules\Mjml\Renderer\BinaryRenderer;
use \Qferrer\Mjml\Renderer\BinaryRenderer;
$renderer = BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');

//$renderer = BinaryRenderer(__DIR__ . '/node_modules/.bin/mjml');
$html = $renderer->render('
    <mjml>
        <mj-body>
            <mj-section>
                <mj-column>
                    <mj-text>Hello world</mj-text>
                </mj-column>
            </mj-section>
        </mj-body>
    </mjml>
');

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
    $annonce = ['titre' => 'brouette', 'prix' => 12, 'categorie' => 'objet', 'mail' => 'jkasperski@fee.fr', 'etat' => 'Validation', 'id' => 02];
    $annonces = [
        ['titre' => 'brouette', 'prix' => 12, 'categorie' => 12, 'mail' => 12],
        ['titre' => 'camion', 'prix' => 34],
        ['titre' => 'moto', 'prix' => 7889],
        ['titre' => 'ambulance', 'prix' => 47],
        ['titre' => 'landeau', 'prix' => 25],
        ['titre' => 'avion', 'prix' => 1454]

    ];

    //$annonceMJML = $twig->display('mail-add-update.html.twig', compact('annonce'));
    echo $twig->display('ajout.html.twig');
    //$annonceHTML = $renderer->render($annonceMJML);


    //mail($destinaire, $sujet, $annonceHTML);
    
}