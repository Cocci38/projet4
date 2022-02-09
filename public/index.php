<?php
require "../vendor\autoload.php";
require "../vendor\altorouter\altorouter\AltoRouter.php";
$uri=$_SERVER['REQUEST_URI'];
$router = new AltoRouter();

// map homepage
// $router->map( 'GET', '/projet4', function() {
// 	require __DIR__ . '/views/acceuil.php';
// });

$router->map( 'GET', '/projet4/', 'acceuil','acceuil'); // GET,URL,ADDRESSE,NOM
$router->map( 'GET', '/projet4/ajouter/','ajouter','ajouter');
$router->map( 'GET', '/projet4/annonce/','annonce','annonce');

$match = $router->match();

    if(is_array($match)){
        require "../app/views/elements/header.php";
        if(is_callable($match['target'])){
            call_user_func_array($match['target'],$match['params']);
        }else{
            $params=$match['params'];
            require "../app/views/{$match['target']}.php";
        }
    }else{
        require "../app/views/error.php";
    }
    require "../app/views/elements/footer.php";
    // $match['target']();


?>