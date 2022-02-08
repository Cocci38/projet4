<?php
require "../vendor/autoload.php";
require "../vendor/altorouter/altorouter/AltoRouter.php";
$uri=$_SERVER['REQUEST_URI'];
$router = new AltoRouter();

// map homepage
// $router->map( 'GET', '/projet4', function() {
// 	require __DIR__ . '/views/acceuil.php';
// });

$router->map( 'GET', '/projet4/', 'acceuil','acceuil'); // GET,URL,ADDRESSE,NOM
$router->map( 'GET', '/projet4/annonce/[*:slug]-[i:id]','traitement');
$router->map( 'GET', '/projet4/annonce/','annonce','annonce');

$match = $router->match();

require "../app/controller/controller.php";
    // $match['target']();


?>