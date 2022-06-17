// start javascript
function fonction_javascript() {
    const number = parseInt(document.getElementById('number').value);
    let result = 0;
    for(let i = 1; i <= number; i++) {
        result += i;
    }
    return result;
}
// end javascript


// start jquery
function fonction_jquery() {
    const number = parseInt($('#number').val());
    let result = 0;
    for(let i = 1; i <= number; i++) {
        result += i;
    }
    return result;
}
// end jquery