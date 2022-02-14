<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Projet4' ?></title>
    <meta name="description" content="<?= $pageDescription ?? '' ?>">
    <link rel="stylesheet" href="../../projet4/public/css/style.css">
</head>

<body>
    <header>
        <a href="<?= $router->generate('acceuil'); ?>">acceuil</a>
        <a href="<?= $router->generate('ajouter'); ?>">ajouter</a>
        <a href="<?= $router->generate('annonce'); ?>">annonce</a>
        <a href="<?= $router->generate('error'); ?>">error</a>
        <a href="<?= $router->generate('validation'); ?>">validation</a>
        <?php
        if (!empty($match['params'])) {
            echo "<div>le slug est :", $params['slug'], "</div>";
        }
        ?>

    </header>
    <div class="container"><?= $pageContent ?></div>
    <!--$pageContent est le corp de la page, la partie qui change contrairement au header et footer  -->
    <footer></footer>

</body>

</html>