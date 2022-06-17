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
        currentSession['array'][i] = number;
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        let maxValue = currentSession['array'][0];
        let indexMaxValue = 0;
        for(let j = 1; j < currentSession['array'].length; j++) {
            if(currentSession['array'][j] > maxValue) {
                maxValue = currentSession['array'][j];
                indexMaxValue = j;
            }
        }
        delete currentSession['continue'];
        delete currentSession['numberOfEntries'];
        document.getElementById('changingLabel').innerText = 'Nombre de saisies :';
        return `La plus grande valeur est ${maxValue}, elle a l\'index ${indexMaxValue}`;
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
        currentSession['array'][i] = number;
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        let maxValue = currentSession['array'][0];
        let indexMaxValue = 0;
        for(let j = 1; j < currentSession['array'].length; j++) {
            if(currentSession['array'][j] > maxValue) {
                maxValue = currentSession['array'][j];
                indexMaxValue = j;
            }
        }
        delete currentSession['continue'];
        delete currentSession['numberOfEntries'];
        $('#changingLabel').text('Nombre de saisies :');
        return `La plus grande valeur est ${maxValue}, elle a l\'index ${indexMaxValue}`;
    }
    $('#number').val('');
    return '';
}
// end jquery