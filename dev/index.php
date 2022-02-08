<?

require 'vendor/autoload.php';

//routing
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}


echo '<hr>';
//rendu\
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new Twig\Environment($loader, [
    'cache' => 'tmp'
]);

if ($page === 'home') {
    echo $twig->render('home.twig');
    require 'home.php';
}