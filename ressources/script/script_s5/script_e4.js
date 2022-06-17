// start javascript
function fonction_javascript() {
    const number = parseInt(document.getElementById('number').value);
    let result = number + 1;
    for(let i = number+2; i <= number+10; i++) {
        result = result + ', ' + i;
    }
    return result;
}
// end javascript


// start jquery
function fonction_jquery() {
    const number = parseInt($('#number').val());
    let result = number + 1;
    for(let i = number+2; i <= number+10; i++) {
        result = result + ', ' + i;
    }
    return result;
}
// end jquery