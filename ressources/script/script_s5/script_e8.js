// start javascript
function fonction_javascript() {
    if(typeof(currentSession['iteration']) == 'undefined') {
        currentSession['iteration'] = 1;
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt(document.getElementById('number').value);
    if(i < 20) {
        if(i == 1 || number > currentSession['maxValue']) {
            currentSession['maxValue'] = number;
            currentSession['indexMaxValue'] = i;
        }
        currentSession['iteration']++;
        document.getElementById('number').value = '';
    } else {
        delete currentSession['continue'];
        if(number > currentSession['maxValue']) {
            currentSession['maxValue'] = number;
            currentSession['indexMaxValue'] = i;
        }
        maxValue = currentSession['maxValue'];
        indexMaxValue = currentSession['indexMaxValue'];
        delete currentSession['iteration'];
        delete currentSession['maxValue'];
        delete currentSession['indexMaxValue'];
        return `Le plus grand de ces nombres était ${maxValue}. C\'était le nombre numéro ${indexMaxValue}.`;
    }
    return '';
}
// end javascript


// start jquery
function fonction_jquery() {
    if(typeof(currentSession['iteration']) == 'undefined') {
        currentSession['iteration'] = 1;
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt($('#number').val());
    if(i < 20) {
        if(i == 1 || number > currentSession['maxValue']) {
            currentSession['maxValue'] = number;
            currentSession['indexMaxValue'] = i;
        }
        currentSession['iteration']++;
        $('#number').val('');
        return '';
    } else {
        delete currentSession['continue'];
        if(number > currentSession['maxValue']) {
            currentSession['maxValue'] = number;
            currentSession['indexMaxValue'] = i;
        }
        maxValue = currentSession['maxValue'];
        indexMaxValue = currentSession['indexMaxValue'];
        delete currentSession['iteration'];
        delete currentSession['maxValue'];
        delete currentSession['indexMaxValue'];
        return `Le plus grand de ces nombres était ${maxValue}. C\'était le nombre numéro ${indexMaxValue}.`;
    }
}
// end jquery