// start javascript
function fonction_javascript() {
    if(typeof(currentSession['iteration']) == 'undefined') {
        currentSession['iteration'] = 0;
        currentSession['continue'] = true;
        currentSession['array'] = [];
    }
    const i = currentSession['iteration'];
    const number = parseInt(document.getElementById('number').value);
    if(i <= 8) {
        currentSession['array'][i] = number;
        currentSession['iteration']++;
    }
    if(i == 8) {
        delete currentSession['continue'];
        const array = currentSession['array'];
        delete currentSession['array'];
        delete currentSession['iteration']
        return array;
    }
    document.getElementById('number').value = '';
    return '';
}
// end javascript


// start jquery
function fonction_jquery() {
    if(typeof(currentSession['iteration']) == 'undefined') {
        currentSession['iteration'] = 0;
        currentSession['continue'] = true;
        currentSession['array'] = [];
    }
    const i = currentSession['iteration'];
    const number = parseInt($('#number').val());
    if(i <= 8) {
        currentSession['array'][i] = number;
        currentSession['iteration']++;
    }
    if(i == 8) {
        delete currentSession['continue'];
        const array = currentSession['array'];
        delete currentSession['array'];
        delete currentSession['iteration']
        return array;
    }
    $('#number').val('');
    return '';
}
// end jquery