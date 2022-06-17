// start javascript
function fonction_javascript() {
    if(typeof(currentSession['numberOfEntries']) == 'undefined') {
        currentSession['iteration'] = -1;
        currentSession['array'] = [];
        currentSession['sum'] = 0;
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
        currentSession['sum'] += number;
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        delete currentSession['continue'];
        const array = currentSession['array'];
        const average = Math.round(currentSession['sum']*100 / array.length)/100;
        let moreOfAverage = 0;
        for(let j = 0; j < array.length; j++) {
            if(array[j] > average) {
                moreOfAverage++;
            }
        }
        delete currentSession['numberOfEntries'];
        document.getElementById('changingLabel').innerText = 'Nombre de saisies :';
        return `Il y a ${moreOfAverage} notes au dessus de la moyenne`;
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
        currentSession['sum'] = 0;
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
        currentSession['sum'] += number;
        currentSession['iteration']++;
    }
    if(i == currentSession['numberOfEntries']-1) {
        delete currentSession['continue'];
        const array = currentSession['array'];
        const average = Math.round(currentSession['sum']*100 / array.length)/100;
        let moreOfAverage = 0;
        for(let j = 0; j < array.length; j++) {
            if(array[j] > average) {
                moreOfAverage++;
            }
        }
        delete currentSession['numberOfEntries'];
        $('#changingLabel').text('Nombre de saisies :');
        return `Il y a ${moreOfAverage} notes au dessus de la moyenne`;
    }
    $('#number').val('');
    return '';
}
// end jquery