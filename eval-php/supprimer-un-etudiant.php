<?php
$connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8" , "root" , "demo");
$id = $_GET["id"];
$nbLigneAffectee = $connexion->exec("DELETE FROM etudiants WHERE id = $id ");
if($nbLigneAffectee > 0){
    echo " le profil étudiant numero $id a bien été supprimer";
}else{
    echo " l'étudiant numéro $id n'est pas présent dans la base de 
    donnée" ;
}
?>

