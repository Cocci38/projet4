<?php 
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false//__DIR__ . '/tmp'
]);
echo $twig->display('ajout.twig');
?>