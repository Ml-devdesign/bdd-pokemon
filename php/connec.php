<?php
    $server= "localhost"; /* Nom d'hôte de la base de données */
    $user= "root"; /* Nom d'utilisateur de la base de données */
    $password= ""; /* Mot de passe */
    $database= "pokemon"; /* Nom de la base de données */
    // $table= ""; /* Nom de la table, au choix */
    $connec=new mysqli($server, $user,$password , $database);/*ce connect a la base de donnéé indispensable */
?>



<?php
//     include 'connec.php' ;

// $sql='SELECT * FROM pokemon';
// $result=$connec->query($sql);/*le resultat demander = connection -> la requet (sql) */


// while ($row=$result->fetch_assoc()){/* pour le (tableau = resultat dans un ensemble sous forme de tableau )


//     printf("<img src=" . $row['pok_image_online']. ">", $row["pok_name"], $row["pok_generation"]);
// } -->
// <!--$sql='SELECT * FROM pokemon limit 20';  -> avec ou sans limite fonctionne moins de latence -->
?>


