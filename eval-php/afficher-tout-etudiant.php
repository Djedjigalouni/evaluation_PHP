<?php

$connexion = new PDO("mysql://host=localhost;dbname=module6;charset=utf8" , "root" , "demo");
$stmt = $connexion->query("SELECT * FROM etudiants");
$tableau = $stmt->fetchAll(PDO::FETCH_ASSOC); 

echo "<table style=\" border-collapse:collapse;\">
         <tr> 
            <th>id</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>CV</th>
            <th>Date de naissance</th>
            <th>Is admin</th>
            <th>Date de mis à jours</th>
        </tr>  
";
foreach($tableau as $key=>$value){
    echo "
    <tr>
        <td>$value[id]</td>
        <td>$value[prenom]</td>
        <td>$value[nom]</td>
        <td>$value[email]</td>
        <td>$value[cv]</td>
        <td>".date("d-m-Y", strtotime("$value[dt_naissance]") )."</td>
        <td>$value[isAdmin]</td>
        <td>".date("d-m-Y h:i:s", strtotime("$value[dt_mis_a_jour]") )."</td>
        
    </tr>
    
    ";
}

echo "</table>";

?>
<style>
      th, td {
        padding: 10px;
        border: 1px solid #666;
      }
</style>