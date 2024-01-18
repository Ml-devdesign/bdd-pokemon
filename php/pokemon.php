__                                 
<!-- 
    
 ▄▄▄·      ▄ •▄ ▄▄▄ .• ▌ ▄ ·.        ▐ ▄ 
▐█ ▄█▪     █▌▄▌▪▀▄.▀··██ ▐███▪▪     •█▌▐█
 ██▀· ▄█▀▄ ▐▀▀▄·▐▀▀▪▄▐█ ▌▐▌▐█· ▄█▀▄ ▐█▐▐▌
▐█▪·•▐█▌.▐▌▐█.█▌▐█▄▄▌██ ██▌▐█▌▐█▌.▐▌██▐█▌
.▀    ▀█▄▀▪·▀  ▀ ▀▀▀ ▀▀  █▪▀▀▀ ▀█▄▀▪▀▀ █▪ 

 ____                    
|  _ \   /\        /\    
| |_) ) /  \      /  \   
|  _ ( / /\ \    / /\ \  
| |_) ) /__\ \  / /__\ \ 
|____/________\/________\
                         
-->


<?php
// Inclusion du fichier 'connec.php' pour établir la connexion à la base de données
include 'connec.php';

// Requête SQL pour sélectionner toutes les colonnes de la table 'pokemon' avec une limite de 20 lignes
$sql = 'SELECT * FROM pokemon limit 20'; 
// Exécution de la requête SQL et stockage du résultat dans la variable $result
$result = $connec->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Liaison de la feuille de style externe 'pokemon.css' située dans le dossier 'css' parent -->
    <link rel="stylesheet" href="../css/pokemon.css">
    
    <style>
        /* Styles spécifiques peuvent être ajoutés ici si nécessaire */
    </style>
</head>
<body>
    <!-- En-tête de la page avec deux images (src manquants) -->
    <header class="main_hero">
        <img class="main-hero-img" >
        <img class="Titre-site">
    </header>
    <!-- Section principale de la page -->
    <main class="main_main">
        <?php
        // Boucle à travers chaque ligne dans le résultat de la requête SQL
        while ($row = $result->fetch_assoc()) {
        ?>
            <!-- Section pour chaque Pokémon -->
            <section class="pokemon">
                <div class="carte">
                    <!-- Bouton "BASE" -->
                    <button class="button">BASE</button>
                    <!-- Nom du Pokémon -->
                    <h2 class="nom-poke"><?= $row['pok_nom'] ?></h2>
                    <!-- Élément pour les points de vie (PV) -->
                    <h2>PV:</h2>
                    <!-- Image du Pokémon avec effet "shiny" -->
                    <div class="img_bg shiny-effect">
                        <img src="<?= $row['pok_image_online'] ?>" class="image">
                    </div>
                    <!-- Informations supplémentaires sur le Pokémon -->
                    <div class="info_carte">
                        <p>Taille : <?= $row['pok_taille'] ?></p>
                        <p>Génération : <?= $row['pok_generation'] ?></p>
                        <!-- Conteneur pour le texte généré par le script -->
                        <div class="text-container">
                            <!-- Le texte généré sera placé ici -->
                        </div>
                        <!-- Référence vers le fichier JavaScript externe situé dans le dossier 'js' parent -->
                        <script src="../js/pokemon.js"></script>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>
    </main>
</body>
</html>