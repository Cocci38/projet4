<?php

use ConnexionDb as GlobalConnexionDb;

session_start();
class ConnexionDb{
    
    private $codb;
    
    public function __construct(){
        try{
            $this->codb = new PDO("mysql:host=localhost;dbname=projet4", "root", "",[
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

        }
        catch(PDOException $e)
        {
            echo "Message d'erreur : " .$e->getMessage(). "<br />"; 
        }
    }
    
    public function Select($values="*",$table="",$nomColonne="",$valeur=""){
        if(!empty($table) && !empty($table) && !empty($nomColonne) && !empty($valeur)){
            try{
                $connexion=$this->codb->prepare("SELECT $values FROM $table WHERE $nomColonne=:$nomColonne");
                $connexion->bindParam(':'.$nomColonne,$valeur);
                $connexion->execute();
                $result=$connexion->fetchall();
                return $result;
            }
            catch(PDOException $e)
            {
                echo "Message d'erreur : " .$e->getMessage(). "<br />"; 
            }
        }elseif(!empty($values) && !empty($table) && empty($nomColonne) && empty($valeur)){
            try{
                $connexion=$this->codb->prepare("SELECT $values FROM $table");
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
        
    }

    public function Insert($table,$nomColonne,$valeur){
        try{
            $stringNomColonne1="";
            $stringNomColonne2="";
            for($i=0;$i<count($nomColonne);$i++){
                $stringNomColonne1 .= $nomColonne[$i].',';
                $stringNomColonne2 .= ':'.$nomColonne[$i].',';
            }
            $stringNomColonne1 = substr_replace($stringNomColonne1 ,"",-1);
            $stringNomColonne2 = substr_replace($stringNomColonne2 ,"",-1);
            $connexion=$this->codb->prepare("INSERT INTO $table($stringNomColonne1) VALUES ($stringNomColonne2)");
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
    // Update a tester
    public function Update($table,$nomColonne,$newValue,$id){
        try{
            $connexion=$this->codb->prepare("UPDATE $table
            SET $nomColonne = :newValue
            WHERE id = :id");
            $connexion->bindParam(':'. 'newValue',$newValue);
            $connexion->bindParam(':'. 'id',$id);
            $connexion->execute();
        }
        catch(PDOException $e)
        {
            echo "Message d'erreur : " .$e->getMessage(). "<br />"; 
        }
    }
}

$connexionDb = new GlobalConnexionDb;

