// start javascript
function fonction_javascript() {
    const age = parseInt(document.getElementById('age').value);
    const licenseSeniority = parseInt(document.getElementById('licenseSeniority').value);
    const responsibleAccident = parseInt(document.getElementById('responsibleAccident').value);
    const assuranceSeniority = parseInt(document.getElementById('assuranceSeniority').value);
    let score = 0;
    if(age < 25) {
        score = 2;
    } else {
        score = 1;
    }
    if(licenseSeniority < 2) {
        score = score + 2;
    } else {
        score = score + 1;
    }
    score = score + responsibleAccident;
    if(assuranceSeniority >= 5 && score <= 4) {
        score = score - 1;
    }
    if(score == 1) {
        return "Le client a droit au tarif bleu";
    } else if(score == 2) {
        return "Le client a droit au tarif vert";
    } else if(score == 3) {
        return "Le client a droit au tarif orange";
    } else if(score == 4) {
        return "Le client a droit au tarif rouge";
    } else {
        return "Le client ne peut pas être assuré";
    }
}
// end javascript


// start jquery
function fonction_jquery() {
    const age = parseInt($('#age').val());
    const licenseSeniority = parseInt($('#licenseSeniority').val());
    const responsibleAccident = parseInt($('#responsibleAccident').val());
    const assuranceSeniority = parseInt($('#assuranceSeniority').val());
    let score = 0;
    if(age < 25) {
        score = 2;
    } else {
        score = 1;
    }
    if(licenseSeniority < 2) {
        score = score + 2;
    } else {
        score = score + 1;
    }
    score = score + responsibleAccident;
    if(assuranceSeniority >= 5 && score <= 4) {
        score = score - 1;
    }
    if(score == 1) {
        return "Le client a droit au tarif bleu";
    } else if(score == 2) {
        return "Le client a droit au tarif vert";
    } else if(score == 3) {
        return "Le client a droit au tarif orange";
    } else if(score == 4) {
        return "Le client a droit au tarif rouge";
    } else {
        return "Le client ne peut pas être assuré";
    }
}
// end jquery