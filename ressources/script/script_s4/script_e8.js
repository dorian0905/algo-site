// start javascript
function fonction_javascript() {
    const day = document.getElementById('day').value;
    const month = document.getElementById('month').value;
    const year = document.getElementById('year').value;
    if(day < 1 || month < 1 || month > 12) {
        return 'La date n\'est pas valide';
    }
    if(month == 2 ) {
        if(day <= 28) {
            return 'La date est valide';
        } else if(day == 29) {
            if(year % 4 == 0 && (year % 100 != 0 || year % 400 == 0)) {
                return 'La date est valide';
            }
        }
    } else if(month == 4 || month == 6 || month == 9 || month == 11) {
        if(day <= 30) {
            return 'La date est valide';
        }
    } else if(day <= 31) {
        return 'La date est valide';
    }
    return 'La date n\'est pas valide';
}
// end javascript


// start jquery
function fonction_jquery() {
    const day = $('#day').val();
    const month = $('#month').val();
    const year = $('#year').val();
    if(day < 1 || month < 1 || month > 12) {
        return 'La date n\'est pas valide';
    }
    if(month == 2 ) {
        if(day <= 28) {
            return 'La date est valide';
        } else if(day == 29) {
            if(year % 4 == 0 && (year % 100 != 0 || year % 400 == 0)) {
                return 'La date est valide';
            }
        }
    } else if(month == 4 || month == 6 || month == 9 || month == 11) {
        if(day <= 30) {
            return 'La date est valide';
        }
    } else if(day <= 31) {
        return 'La date est valide';
    }
    return 'La date n\'est pas valide';
}
// end jquery