// start javascript
function fonction_javascript() {
    if(typeof(currentSession['numberOfEntries']) == 'undefined') {
        currentSession['iteration'] = -1;
        currentSession['array'] = [];
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt(document.getElementById('number').value);
    if(i == -1) {
        currentSession['numberOfEntries'] = number;
        currentSession['iteration']++;
        document.getElementById('changingLabel').innerText = 'Valeur :';
    } else if(i < currentSession['numberOfEntries']) {
        currentSession['array'][i] = number + 1;
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        delete currentSession['continue'];
        delete currentSession['numberOfEntries'];
        document.getElementById('changingLabel').innerText = 'Nombre de saisies :';
        return currentSession['array'];
    }
    document.getElementById('number').value = '';
    return '';
}
// end javascript


// start jquery
function fonction_jquery() {
    if(typeof(currentSession['numberOfEntries']) == 'undefined') {
        currentSession['iteration'] = -1;
        currentSession['array'] = [];
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt($('#number').val());
    if(i == -1) {
        currentSession['numberOfEntries'] = number;
        currentSession['iteration']++;
        $('#changingLabel').text('Valeur :');
    } else if(i < currentSession['numberOfEntries']) {
        currentSession['array'][i] = number + 1;
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        delete currentSession['continue'];
        delete currentSession['numberOfEntries'];
        $('#changingLabel').text('Nombre de saisies :');
        return currentSession['array'];
    }
    $('#number').val('');
    return '';
}
// end jquery