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
    } else if(i == 0) {
        currentSession['array'][0] = number;
        currentSession['iteration']++;
    } else {
        let determinedIndex = '';
        if(number >= currentSession['array'][i-1]) {
            determinedIndex = i;
        } else if(number <= currentSession['array'][0]) {
            determinedIndex = 0;
        } else {
            let j=1;
            while(determinedIndex == '') {
                if(number >= currentSession['array'][j-1] && number <= currentSession['array'][j]) {
                    determinedIndex = j;
                }
                j++;
            }
        }
        for(let k = currentSession['array'].length; k > determinedIndex; k--) {
            currentSession['array'][k] = currentSession['array'][k-1];
        }
        currentSession['array'][determinedIndex] = number;
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
    } else if(i == 0) {
        currentSession['array'][0] = number;
        currentSession['iteration']++;
    } else {
        let determinedIndex = '';
        if(number >= currentSession['array'][i-1]) {
            determinedIndex = i;
        } else if(number <= currentSession['array'][0]) {
            determinedIndex = 0;
        } else {
            let j=1;
            while(determinedIndex == '') {
                if(number >= currentSession['array'][j-1] && number <= currentSession['array'][j]) {
                    determinedIndex = j;
                }
                j++;
            }
        }
        for(let k = currentSession['array'].length; k > determinedIndex; k--) {
            currentSession['array'][k] = currentSession['array'][k-1];
        }
        currentSession['array'][determinedIndex] = number;
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