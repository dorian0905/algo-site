// start javascript
function fonction_javascript() {
    if(typeof(currentSession['sum']) == 'undefined') {
        currentSession['sum'] = 0;
        currentSession['moreArticles'] = true;
        currentSession['continue'] = true;
    }
    const number = parseInt(document.getElementById('number').value);
    if(currentSession['moreArticles']) {
        if(number == 0) {
            currentSession['moreArticles'] = false;
            document.getElementById('changingLabel').innerText = 'Somme payée :';
        } else {
            currentSession['sum'] = currentSession['sum'] + number;
        }
    } else {
        delete currentSession['continue'];
        const sum = currentSession['sum'];
        delete currentSession['sum'];
        let rest = number - sum;
        const number10 = Math.floor(rest / 10);
        rest = rest - number10 * 10;
        const number5 = Math.floor(rest / 5);
        const number1 = rest - number5 * 5;
        document.getElementById('changingLabel').innerText = 'Prix de l\'article :';
        document.getElementById('number').value = '';
        return `Il faut rendre au client ${number10} billets de 10€, ${number5} billets de 5€, et ${number1} pièces de 1€`;
    }
    document.getElementById('number').value = '';
    return '';
}
// end javascript


// start jquery
function fonction_jquery() {
    if(typeof(currentSession['sum']) == 'undefined') {
        currentSession['sum'] = 0;
        currentSession['moreArticles'] = true;
        currentSession['continue'] = true;
    }
    const number = parseInt($('#number').val());
    if(currentSession['moreArticles']) {
        if(number == 0) {
            currentSession['moreArticles'] = false;
            $('#changingLabel').text('Somme payée :');
        } else {
            currentSession['sum'] = currentSession['sum'] + number;
        }
    } else {
        delete currentSession['continue'];
        const sum = currentSession['sum'];
        delete currentSession['sum'];
        let rest = number - sum;
        const number10 = Math.floor(rest / 10);
        rest = rest - number10 * 10;
        const number5 = Math.floor(rest / 5);
        const number1 = rest - number5 * 5;
        $('#changingLabel').text('Prix de l\'article :');
        $('#number').val('');
        return `Il faut rendre au client ${number10} billets de 10€, ${number5} billets de 5€, et ${number1} pièces de 1€`;
    }
    $('#number').val('');
    return '';
}
// end jquery