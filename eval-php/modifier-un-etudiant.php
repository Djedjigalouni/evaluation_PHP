<?php

$connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8" , "root" , "demo");

if(!empty($_POST)){
    $connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8" , "root" , "demo");
    $id = htmlentities($_POST["id"]) ;
    $prenom = htmlentities($_POST["prenom"]) ;
    $nom = htmlentities($_POST["nom"]);
    $email = htmlentities($_POST["email"]);
    $cv = htmlentities($_POST["cv"]);
    $dt_naissance = htmlentities($_POST["dt_naissance"]);
    $is_admin = htmlentities($_POST["isAdmin"]);

    $sql = "UPDATE etudiants 
            SET prenom = '$prenom' , nom = '$nom' , email = '$email' , cv = '$cv' , dt_naissance = '$dt_naissance' ,  isAdmin =  $is_admin
            WHERE id = $id
             ";
             $nbLigne = $connexion->exec($sql);
    if($nbLigne == 1){
        echo "l'article numero $id a été mis a jour <br>";
    }
}

$id = $_GET["id"];

$stmt = $connexion->query("SELECT * FROM etudiants WHERE id = $id");

$etudiant = $stmt->fetch(PDO::FETCH_ASSOC) ;

?>
<form method="post">
<input type="hidden" name = "id" value = "<?php echo $etudiant["id"] ?>">
<fieldset >
    <legend>Mettre à jour un etudiant</legend>
    <!-- La balise Table pour formater l'affichage du formulaire -->
    <table>
        <tr>
            <td><label>Nom</label></td>
            <td><input type="text" name="nom" placeholder="saisir votre nom" value ="<?php echo $etudiant["nom"]?>"/> </td>
        </tr>
        <tr>
            <td><label>Prenom</label></td>
            <td><input type="text" name="prenom" placeholder="saisir votre prenom" value ="<?php echo $etudiant["prenom"]?>"/></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="email" placeholder="saisir votre Email" name="email" value ="<?php echo $etudiant["email"]?>"/></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="date" placeholder="date de naissance" name="dt_naissance" value ="<?php echo $etudiant["dt_naissance"]?>"/></td>
        </tr>
        <tr>
            <td><label>CV</label></td>
            <td><input type="text" name="cv" placeholder="saisir votre cv" value ="<?php echo $etudiant["cv"]?>"/></td>
        </tr>
        <tr>
            <td>Is admin</td>
            <!-- Les deux inputs radio doivent avoir le meme nom -->
            <td>
                Oui <input type="radio" name="isAdmin" value="<?php echo $etudiant["isAdmin"]?>" checked="checked">
                Non <input type="radio" name="isAdmin" value="<?php echo $etudiant["isAdmin"]?>">
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Enregistrer"/>  
        </tr>
    </table>
</fieldset>
<style>
     td{
     	height: 40px;
     }
	</style>