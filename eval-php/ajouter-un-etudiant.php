<?php
if(!empty($_POST)){
    $connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8" , "root" , "demo");
    $prenom = htmlentities($_POST["prenom"]) ;
    $nom = htmlentities($_POST["nom"]);
    $email = htmlentities($_POST["email"]);
    $cv = htmlentities($_POST["cv"]);
    $dt_naissance = htmlentities($_POST["dt_naissance"]);
    $is_admin = htmlentities($_POST["isAdmin"]);
    $sql = "INSERT INTO etudiants 
            (prenom , nom, email, cv, dt_naissance, isAdmin, dt_mis_a_jour)
            VALUES
            ('$prenom' , '$nom' , '$email' , '$cv' , '$dt_naissance' , $is_admin , Now())";
            $nbLigne = $connexion->exec($sql);
            
            if($nbLigne == 1 ){
                echo "vous avez ajouter une ligne à la table articles";
            }else{
                echo "votre insertion a echouée!";
            }

}
?>
<form method="post">
<fieldset >
    <legend>Ajouter un etudiant</legend>
    <table>
        <tr>
            <td><label>Nom</label></td>
            <td><input type="text" name="nom" placeholder="saisir votre nom" /> </td>
        </tr>
        <tr>
            <td><label>Prenom</label></td>
            <td><input type="text" name="prenom" placeholder="saisir votre prenom" /></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="email" placeholder="saisir votre Email" name="email" /></td>
        </tr>
        <tr>
            <td><label>Email</label></td>
            <td><input type="date" placeholder="date de naissance" name="dt_naissance" /></td>
        </tr>
        <tr>
            <td><label>CV</label></td>
            <td><input type="text" name="cv" placeholder="saisir votre cv"/></td>
        </tr>
        <tr>
            <td>Is admin</td>
            <!-- Les deux inputs radio doivent avoir le meme nom -->
            <td>
                Oui <input type="radio" value="1" name="isAdmin"  checked="checked">
                Non <input type="radio" value="0" name="isAdmin" >
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