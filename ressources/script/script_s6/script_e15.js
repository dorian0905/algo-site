// start javascript
function fonction_javascript() {
    const age = parseInt(document.getElementById('age').value);
    let array = [];
    array[0] = 1000;
    for(i = 1; i <= 20; i++) {
        array[i] = array[i-1] * 1.0275;
    }
    return Math.round(array[age] * 100) / 100;
}
// end javascript


// start jquery
function fonction_jquery() {
    const age = parseInt($('#age').val());
    let array = [];
    array[0] = 1000;
    for(i = 1; i <= 20; i++) {
        array[i] = array[i-1] * 1.0275;
    }
    return Math.round(array[age] * 100) / 100;
}
// end jquery