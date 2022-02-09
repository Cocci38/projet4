<?php

use ConnexionDb as GlobalConnexionDb;

session_start();
class ConnexionDb{
    
    private $codb;
    
    public function __construct(){
        try{
            $this->codb = new PDO("mysql:host=localhost;dbname=mon_site", "root", "",[
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

        }
        catch(PDOException $e)
        {
            echo "Message d'erreur : " .$e->getMessage(). "<br />"; 
        }
    }
    
    public function Select($table,$nomColonne,$valeur){
        try{
            $connexion=$this->codb->prepare("SELECT * FROM $table WHERE $nomColonne=:$nomColonne");
            $connexion->bindParam(':'.$nomColonne,$valeur);
            $connexion->execute();
            $result=$connexion->fetchall();
            return $result;
        }
        catch(PDOException $e)
        {
            echo "Message d'erreur : " .$e->getMessage(). "<br />"; 
        }
    }

    public function Insert($nomColonne,$valeur){
        try{
            $stringNomColonne1="";
            $stringNomColonne2="";
            for($i=0;$i<count($nomColonne);$i++){
                $stringNomColonne1 .= $nomColonne[$i].',';
                $stringNomColonne2 .= ':'.$nomColonne[$i].',';
            }
            $stringNomColonne1 = substr_replace($stringNomColonne1 ,"",-1);
            $stringNomColonne2 = substr_replace($stringNomColonne2 ,"",-1);
            $connexion=$this->codb->prepare("INSERT INTO utilisateurs($stringNomColonne1) VALUES ($stringNomColonne2)");
            for($i=0;$i<count($nomColonne);$i++){
                $connexion->bindParam(':'.$nomColonne[$i],$valeur[$i]);
            }
            $connexion->execute();
        }
        catch(PDOException $e)
        {
            echo "Message d'erreur : " .$e->getMessage(). "<br />"; 
        }
        
    }

    public function Delete($table,$nomColonne,$valeur){
        try{
            $connexion=$this->codb->prepare("DELETE FROM $table WHERE $nomColonne= :$nomColonne");
            $connexion->bindParam(':'.$nomColonne,$valeur);
            $connexion->execute();
        }
        catch(PDOException $e)
        {
            echo "Message d'erreur : " .$e->getMessage(). "<br />"; 
        }
    }
}

$connexionDb = new GlobalConnexionDb;