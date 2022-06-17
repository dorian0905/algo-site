// start javascript
function fonction_javascript() {
    if(typeof(currentSession['numberOfEntries']) == 'undefined') {
        currentSession['iteration'] = -1;
        currentSession['positive'] = 0;
        currentSession['negative'] = 0;
        currentSession['array'] = [];
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt(document.getElementById('number').value);
    if(i == -1) {
        currentSession['numberOfEntries'] = number;
        currentSession['iteration']++;
    } else if(i < currentSession['numberOfEntries']) {
        currentSession['array'][i] = number;
        if(number > 0) {
            currentSession['positive']++;
        } else if(number < 0) {
            currentSession['negative']++;
        }
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        delete currentSession['continue'];
        delete currentSession['numberOfEntries'];
        return `Il y a ${currentSession['negative']} valeurs négatives, et ${currentSession['positive']} positives`;
    }
    document.getElementById('number').value = '';
    return '';
}
// end javascript


// start jquery
function fonction_jquery() {
    if(typeof(currentSession['numberOfEntries']) == 'undefined') {
        currentSession['iteration'] = -1;
        currentSession['positive'] = 0;
        currentSession['negative'] = 0;
        currentSession['array'] = [];
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt($('#number').val());
    if(i == -1) {
        currentSession['numberOfEntries'] = number;
        currentSession['iteration']++;
    } else if(i < currentSession['numberOfEntries']) {
        currentSession['array'][i] = number;
        if(number > 0) {
            currentSession['positive']++;
        } else if(number < 0) {
            currentSession['negative']++;
        }
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        delete currentSession['continue'];
        delete currentSession['numberOfEntries'];
        return `Il y a ${currentSession['negative']} valeurs négatives, et ${currentSession['positive']} positives`;
    }
    $('#number').val('');
    return '';
}
// end jquery