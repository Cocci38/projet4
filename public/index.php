<?php
require "../vendor/autoload.php";
require "../vendor/altorouter/altorouter/AltoRouter.php";
$uri=$_SERVER['REQUEST_URI'];
$router = new AltoRouter();

// map homepage
// $router->map( 'GET', '/projet4', function() {
// 	require __DIR__ . '/views/acceuil.php';
// });

$router->map( 'GET|POST', '/projet4/', 'acceuil','acceuil'); // GET,URL,ADDRESSE,NOM
$router->map( 'GET|POST', '/projet4/ajouter','ajouter','ajouter');
$router->map( 'GET|POST', '/projet4/annonce','annonce','annonce');
$router->map( 'GET|POST', '/projet4/error','error','error');
$router->map( 'GET|POST', '/projet4/validation','validation','validation');
$router->map( 'GET|POST', '/projet4/ajouter/[*:slug]','ajouter','ajouterPerso');
$router->map( 'GET|POST', '/projet4/annonce/[*:slug]','annonce','annoncePerso');
$router->map( 'GET|POST', '/projet4/error/[*:slug]','error');
$router->map( 'GET|POST', '/projet4/validation/[*:slug]','validation','validationPerso');

$match = $router->match();

require "../app/controller/controller.php";
    // $match['target']();


?>

