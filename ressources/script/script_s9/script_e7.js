// start javascript
function fonction_javascript() {
    const number = document.getElementById('number').value;
    if(number % 2 === 0) {
        return "Ce nombre est pair";
    } else {
        return "Ce nombre est impair";
    }
}
// end javascript


// start jquery
function fonction_jquery() {
    const number = $('#number').val();
    if(number % 2 === 0) {
        return "Ce nombre est pair";
    } else {
        return "Ce nombre est impair";
    }
}
// end jquery