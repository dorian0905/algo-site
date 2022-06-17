// FONCTIONS GENERALES DE L'ACCUEIL

// Fonction executée lors de la selection d'une nouvelle saison
function seasonSelect(seasonNumber) {
    // Cacher le message d'accueil de l'ouverture du site.
    document.getElementById("home-message").classList.add("hidden");
    // Cacher tous les articles
    const articles = document.getElementsByClassName(`article`);
    for(let article of articles) {
        article.classList.add("hidden");
    }
    // Afficher les articles de la saison selectionnée.
    const seasonArray = document.getElementsByClassName(`season${seasonNumber}`);
    for(let exercice of seasonArray) {
        exercice.classList.remove("hidden");
    }
    // Enlever la selection de tous les bouton de saison
    const seasonButtons = document.getElementsByClassName(`seasons-navigation__list__item__text`);
    for(let button of seasonButtons) {
        button.classList.remove("seasons-navigation__list__item__text--selected");
    }
    // Ajouter la selection du bouton de saison sélectionné
    const selectedButton = document.getElementById(`button-season${seasonNumber}`);
    selectedButton.classList.add("seasons-navigation__list__item__text--selected")
}

function exerciceSelect(seasonNumber, exerciceNumber) {
    window.location.href = `http://localhost/exercice.php?season=${seasonNumber}&exercice=${exerciceNumber}`;
}

// Permet d'activer la saison lors du retour depuis la page exercice
if(document.getElementById('activatedSeason').innerText != "") {
    seasonSelect(document.getElementById('activatedSeason').innerText)
}