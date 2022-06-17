// start javascript
function fonction_javascript() {
    if(typeof currentSession['randomNumber'] == 'undefined') {
        currentSession['randomNumber'] = Math.floor(Math.random() * (100 - 2)) + 1;
        currentSession['count'] = 1;
        currentSession['continue'] = true;
    }
    randomNumber = currentSession['randomNumber'];
    const number = document.getElementById('number').value;
    if(number != randomNumber) {
        currentSession['count']++;
        if(number < randomNumber) {
            return "Plus grand !";
        } else {
            return "Plus petit !";
        }
    }
    delete currentSession['continue'];
    delete currentSession['randomNumber'];
    return `Vous avez trouvé en ${currentSession['count']} coups`;
}
// end javascript


// start jquery
function fonction_jquery() {
    if(typeof currentSession['randomNumber'] == 'undefined') {
        currentSession['randomNumber'] = Math.floor(Math.random() * (100 - 2)) + 1;
        currentSession['count'] = 1;
    }
    randomNumber = currentSession['randomNumber'];
    const number = $('#number').val();
    if(number != randomNumber) {
        currentSession['continue'] = true;
        currentSession['count']++;
        if(number < randomNumber) {
            return "Plus grand !";
        } else {
            return "Plus petit !";
        }
    }
    delete currentSession['continue'];
    delete currentSession['randomNumber'];
    return `Vous avez trouvé en ${currentSession['count']} coups`;
}
// end jquery