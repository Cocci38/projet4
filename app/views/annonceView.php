annonce
<?php
$pageTitle = "Nos annonces";
$pageDescription = "suivez le fil d'actualité des annonces récemment publié";

// var_dump($_POST);
echo "<pre>",print_r($_FILES['photo']),"</pre>";
print_r($_POST);
$result = $connexionDb->Select("*",'annonce');
$result = array_reverse($result);
for($i=0;$i<10;$i++){
    echo "<pre>", print_r($result[$i]), "</pre>";
}
// echo "<pre>", print_r($result), "</pre>";



require "../models/annonce.php";
// $annonce = new annonce;
// $annonce->ajoutAnnonce();

?>
<form action="<?=$router->generate('annonce');?>" method="POST" enctype="multipart/form-data">
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
        <label for="email">email : </label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="photo">photo : </label>
        <input type="file" name="photo" multiple>
    </div>
    <button>validé</button>
</form>