<?php
$pageTitle = "Ajoutez votre annonce";
$pageDescription = "Ajoutez votre annonce afin que tout le monde puisse y avoir accés";
//------------------------------------------------------------------------------
// $result=$connexionDb->Select();
// echo "<pre>", print_r($result), "</pre>";
// $result=$connexionDb->Insert('',[],[]);
// $result=$connexionDb->Delete();
var_dump($_POST);
?>
<form action="<?=$router->generate('ajouter');?>" method="POST">
    <div>
        <label for="nom">
            <h1>Titre de l'annonce:</h1><input type="text" name="nom">
    </div>
    <div>
        <label for="description">
            <h1>Description :</h1>
        </label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="prix">
            <h1>Prix :</h1>
        </label>
        <input type="number" name="prix">
    </div>
    <div>
        <label for="categorie">categorie : </label>
        <input type="text" name="categorie">
    </div>
    <div>
        <label for="email"></h1>Email :</h1> </label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="photo">photo : </label>
        <input type="text" name="photo">
    </div>
    <button>validé</button>
</form>