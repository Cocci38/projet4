<?php
$pageTitle = "Ajoutez votre annonce";
$pageDescription = "Ajoutez votre annonce afin que tout le monde puisse y avoir accés";
//------------------------------------------------------------------------------
// $result=$connexionDb->Select("");
// echo "<pre>", print_r($result), "</pre>";
// $result=$connexionDb->Insert('',[],[]);
// $result=$connexionDb->Delete();
?>
<form action="<?=$router->generate('acceuil');?>" method="GET">
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
        <input type="text" name="photo">
    </div>
    <button>validé</button>
</form>
?>