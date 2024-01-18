// Fonction pour générer du texte aléatoire
function genererTexteAleatoire() {
    var phrases = [
        "Retient la cible de force, l’obligeant à agir en dernier.",
        "Le lanceur fait tomber la cible dans une crevasse. Si cette attaque réussit, elle met K.O. sur le coup.",
        " Le lanceur hurle sur la cible et baisse l’Attaque Spéciale de celle-ci.",
        "Le lanceur projette un liquide corrosif créé à partir d’une pomme acide sur la cible, ce qui baisse la Défense Spéciale de celle-ci.",
        "Le lanceur frappe la cible avec agilité. S’il ne tient pas d’objet, l’attaque inflige davantage de dégâts.",
        "Un soin qui restaure des PV au lanceur. Son efficacité varie en fonction de la météo.",
        "Une capacité dont la puissance est doublée si le lanceur a été blessé par la cible durant ce tour.",
        "Le lanceur absorbe l’énergie emmagasinée avec Stockage pour restaurer ses PV. Le nombre de PV soignés augmente.",
        "Le lanceur projette de la boue bizarre sur la cible. Les changements de stats de la cible sont annulés.",
        "Le lanceur jette une bombe qui recouvre la cible de sirop gluant et fait progressivement baisser la Vitesse de la cible pendant trois tours.",
        "Des détritus toxiques sont projetés sur la cible, ce qui peut aussi l’empoisonner.",
        "La cible se lie d’amitié avec le lanceur et perd sa combativité, ce qui diminue son Attaque.",
        "Le lanceur attaque en libérant l’énergie concentrée dans son noyau.",
        "Envoie un rayon laser dévastateur. Baisse beaucoup l’Attaque Spéciale du lanceur.",
        "Une attaque qui utilise la force des champs pour projeter une aura. Son type et sa puissance varient selon le champ actif.",
        "Le lanceur frappe la cible avec un os de deux à cinq fois d’affilée.",
        "Lacère la cible avec des griffes acérées pour lui infliger des dégâts."
    ];

    
    
    // Ajoutez la phrase au conteneur HTML
    const containers = document.querySelectorAll('.text-container');
   //pour chaque conteanair que lon nomme contenair on vas 
    containers.forEach(container => {
        // Choisissir une phrase aléatoire 
        var phraseAleatoire = phrases[Math.floor(Math.random() * phrases.length)];
        //le contenair = la phrases aleatoir
        container.innerHTML = "<p>" + phraseAleatoire + "</p>"
    })
}

// Appelez la fonction pour générer le texte aléatoire conlors du chargement de la page
window.onload = genererTexteAleatoire();

function genererPvAleatoire() {
    var pv= [10,350];
    const pvcontainers = document.querySelectorAll('.pv-container');
    pvcontainers.forEach(container => {
        var pvAleatoire = pv[Math.floor(Math.random() * pv.length)];
        container.innerHTML = "<p>" + pvAleatoire + "</p>"
    })
}
window.onload = genererPvAleatoire();
