// start javascript
function fonction_javascript() {
    const number = document.getElementById("number").value;
    if(number <= 5) {
        return 'Sans catégorie';
    } else if(number <= 7) {
        return 'Poussin';
    } else if(number <= 9) {
        return 'Pupille';
    } else if(number <= 11) {
        return 'Minime';
    } else {
        return 'Cadet';
    }
}
// end javascript


// start jquery
function fonction_jquery() {
    const number = $("#number").val();
    if(number <= 5) {
        return 'Sans catégorie';
    } else if(number <= 7) {
        return 'Poussin';
    } else if(number <= 9) {
        return 'Pupille';
    } else if(number <= 11) {
        return 'Minime';
    } else {
        return 'Cadet';
    }
}
// end jquery