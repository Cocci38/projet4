<?php
$pageTitle = "Nos annonces";
$pageDescription = "suivez le fil d'actualité des annonces récemment publié";
// var_dump($_POST);
$result = $connexionDb->Select("*", 'annonce');
$result = array_reverse($result);
//for($i=0;$i<10;$i++){
//  echo "<pre>", print_r($result[$i]), "</pre>";
//}
// echo "<pre>", print_r($result), "</pre>";
if ($_POST) {
    if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['email'])) {
        $email = $connexionDb->Select('id', 'email', 'email', $_POST['email']);
        if (!empty($email)) {
            echo "<pre>", print_r($email), "</pre>";
            $connexionDb->Insert('annonce', ['nom', 'description', 'prix', 'id_email'], [$_POST['nom'], $_POST['description'], $_POST['prix'], $email->id]);
        } else {
            $connexionDb->Insert('email', ['email'], [$_POST['email']]);
        }
    }
}
?>
<form action="<?= $router->generate('acceuil'); ?>" method="POST">
    <div>
        <label for="nom">nom : </label>
        <input type="text" name="nom">
    </div>
    <div>
        <label for="description">description : </label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="prix">prix : </label>
        <input type="number" name="prix">
    </div>
    <div>
        <label for="categorie">categorie : </label>
        <input type="text" name="categorie">
    </div>
    <div>
        <label for="email">email : </label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="photo">photo : </label>
        <input type="file" name="photo">
    </div>
    <button>validé</button>
</form>