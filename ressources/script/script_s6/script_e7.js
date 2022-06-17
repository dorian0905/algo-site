// start javascript
function fonction_javascript() {
    if(typeof(currentSession['iteration']) == 'undefined') {
        currentSession['iteration'] = 0;
        currentSession['sum'] = 0;
        currentSession['array'] = [];
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt(document.getElementById('number').value);
    if(i <= 8) {
        currentSession['array'][i] = number;
        currentSession['sum'] += number;
        currentSession['iteration']++;
    }
    if(i == 8) {
        delete currentSession['continue'];
        const array = currentSession['array'];
        const average = Math.round(currentSession['sum']*100 / array.length) /100
        delete currentSession['array'];
        delete currentSession['iteration']
        return `${array}, Moyenne : ${average}`;
    }
    document.getElementById('number').value = '';
    return '';
}
// end javascript


// start jquery
function fonction_jquery() {
    if(typeof(currentSession['iteration']) == 'undefined') {
        currentSession['iteration'] = 0;
        currentSession['sum'] = 0;
        currentSession['array'] = [];
        currentSession['continue'] = true;
    }
    const i = currentSession['iteration'];
    const number = parseInt($('#number').val());
    if(i <= 8) {
        currentSession['array'][i] = number;
        currentSession['sum'] += number;
        currentSession['iteration']++;
    }
    if(i == 8) {
        delete currentSession['continue'];
        const array = currentSession['array'];
        const average = Math.round(currentSession['sum']*100 / array.length) /100
        delete currentSession['array'];
        delete currentSession['iteration']
        return `${array}, Moyenne : ${average}`;
    }
    $('#number').val('');
    return '';
}
// end jquery