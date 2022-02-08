<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Projet4' ?></title>
    <meta name="description" content="<?= $pageDescription ?? ''?>">
</head>
<body>
<header>
    <a href="<?=$router->generate('acceuil');?>">acceuil</a>
    <a href="<?=$router->generate('annonce');?>">annonce</a>
</header>   
<div class="container"><?= $pageContent?></div>
<footer></footer>
</body>
</html>