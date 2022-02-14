<?php
class annonce extends ConnexionDb{
    public function ajoutAnnonce(){
        if($_POST){
            if(isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['email'])){
                $email=$this->Select('id','email','email',$_POST['email']);
                if(!empty($email) && !empty($photo)){
                    echo "<pre>", print_r($email), "</pre>";
                    $this->Insert('annonce',['nom','description','prix','id_email'],[$_POST['nom'],$_POST['description'],$_POST['prix'],$email[0]->id]);
                }else{
                    $this->Insert('email',['email'],[$_POST['email']]);
                    $email=$this->Select('id','email','email',$_POST['email']);
                    $this->Insert('annonce',['nom','description','prix','id_email'],[$_POST['nom'],$_POST['description'],$_POST['prix'],$email[0]->id]);
                }
            }
        }
    }

    public function genererChaineAleatoire($longueur = 12){
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i < $longueur; $i++)
        {
        $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
        return $chaineAleatoire;
    }
}

//Utilisation de la fonction
// echo "<br>",$result1=genererChaineAleatoire();
// // echo "<br>",$result2=genererChaineAleatoire(20);

// echo "<br>",$cryptedPass1=password_hash($result1,PASSWORD_DEFAULT,['cost' => 12]);
// echo "<br>",var_dump(password_verify($result1,$cryptedPass1));
?>