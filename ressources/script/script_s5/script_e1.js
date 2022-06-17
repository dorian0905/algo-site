// start javascript
function fonction_javascript() {
    let number = document.getElementById('number').value;
    if(number < 1 || number > 3) {
        currentSession['continue'] = true;
        return `Le nombre ${number} n\'est pas compris entre 1 et 3`;
    }
    delete currentSession['continue'];
    return `Le nombre ${number} est bien compris entre 1 et 3`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let number = $('#number').val();
    if(number < 1 || number > 3) {
        currentSession['continue'] = true;
        return `Le nombre ${number} n\'est pas compris entre 1 et 3`;
    }
    delete currentSession['continue'];
    return `Le nombre ${number} est bien compris entre 1 et 3`;
}
// end jquery