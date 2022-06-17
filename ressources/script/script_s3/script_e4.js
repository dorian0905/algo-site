// start javascript
function fonction_javascript() {
    const number = document.getElementById("number").value;
    if(number == 0) {
        return `${number} est nul`;
    } else if(number > 0) {
        return `${number} est positif`;
    } else {
        return `${number} est négatif`;
    }
}
// end javascript


// start jquery
function fonction_jquery() {
    const number = $("#number").val();
    if(number == 0) {
        return `${number} est nul`;
    } else if(number > 0) {
        return `${number} est positif`;
    } else {
        return `${number} est négatif`;
    }
}
// end jquery