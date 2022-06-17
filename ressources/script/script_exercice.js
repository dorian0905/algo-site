// FONCTIONS GENERALES DE L'EXCERCICE

// variable générale de langage selectionne
var selectedLanguage = "";

// Variable d'exercice dynamique
var currentSession = [];

// Mise en place codeMirror
const myTextArea1 = document.getElementById('pseudocode');
var myCodeMirror1 = CodeMirror.fromTextArea(myTextArea1, {
    mode: 'text',
    lineNumbers: true,
    theme: 'material',
    lineWrapping: true,
});
const myTextArea2 = document.getElementById('code');
var myCodeMirror2 = CodeMirror.fromTextArea(myTextArea2, {
    mode: 'javascript',
    lineNumbers: true,
    theme: 'material',
    lineWrapping: true,
});

// Fonction executée lors de la selection d'un langage
function display(language) {
    // Le textarea prend la valeur du code du langage selectionné
    myCodeMirror2.setValue(document.getElementById(`${language}-code`).innerText);
    // Enlever la selection de tous les bouton de lanagage
    const languageButtons = document.getElementsByClassName(`textarea-container__element__buttons-container__button__interior`);
    for(let button of languageButtons) {
        button.classList.remove("textarea-container__element__buttons-container__button__interior--selected");
    }
    // Ajouter la selection du bouton de langage sélectionné
    const selectedButton = document.getElementById(`button-${language}`);
    selectedButton.classList.add("textarea-container__element__buttons-container__button__interior--selected")
    // Afficher le bouton d'execution
    document.getElementById("run-button").classList.remove("hidden");
    // Cacher le résultat
    document.getElementById("solution-display").innerText = "";
    // Détermination du langage sélectionné
    selectedLanguage = language;
    // afficher éléments du form + rendre enable
    const formElements = document.querySelectorAll('.form__element > *');
    for(let element of formElements) {
        element.classList.remove("hidden");
        element.removeAttribute("disabled");
        element.value = "";
    }
}

// Fonction executée lors de l'exécution d'un langage
function run() {
    // Initialisation de la solution
    let solution = "";
    // Condition permettant de connaitre le langage selectionné pour exécuter la bonne fonction
    // Le résultat de la fonction est stocké dans la variable solution pour JS et JQUERY
    // Le résultat de la fonction PHP est directement affiché en PHP
    if(selectedLanguage == 'javascript') {
        solution = fonction_javascript();
    } else if(selectedLanguage == 'jquery') {
        solution = fonction_jquery();
    } else if(selectedLanguage == 'php') {
        document.getElementById("form").submit();
        // Fin de la fonction si éxécutée en PHP
        return false;
    }
    afterRun();
    // Affichage de la solution
    document.getElementById("solution-display").innerText = solution;
    // Ne pas rendre disable les input et cacher le button
    restrictedForm();
}

// Permet d'activer le bouton PHP lors de l'éxécution
if(document.getElementById('activatedPhp').innerText == 1) {
    // Simulation de la selection de php (bouton + code)
    selectedLanguage = 'php'
    myCodeMirror2.setValue(document.getElementById(`php-code`).innerText);
    const selectedButton = document.getElementById(`button-php`);
    selectedButton.classList.add("textarea-container__element__buttons-container__button__interior--selected")
    afterRun();
    restrictedForm();
}

function afterRun() {
    // rendre disabled les inputs
    const formElements = document.querySelectorAll('.form__element > *');
    for(let element of formElements) {
        element.setAttribute("disabled", "");
        element.classList.remove("hidden");
    }
    // Bouton d'execution cache après utilisation
    document.getElementById("run-button").classList.add("hidden");
}

function restrictedForm() {
    if(document.getElementById('restrictedForm').innerText == 1 || typeof currentSession['continue'] != 'undefined') {
        // rendre able les inputs
        const formElements = document.querySelectorAll('.form__element > *');
        for(let element of formElements) {
            element.removeAttribute("disabled");
        }
        // Bouton d'execution affiche
        document.getElementById("run-button").classList.remove("hidden");
    }
}

// Permet d'ajouter le texte de pseudocode dans le textarea
myCodeMirror1.setValue(document.getElementById("hidden-pseudocode").innerText);

/* A CONSERVER OU NON SELON METHODE UTILISEE
function dynamicRun() {
    document.getElementById("dynamic-form").submit();
}*/