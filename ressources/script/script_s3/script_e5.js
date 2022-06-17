// start javascript
function fonction_javascript() {
    const number1 = document.getElementById("number1").value;
    const number2 = document.getElementById("number2").value;
    if(number1 == 0 || number2 == 0) {
        return `Le produit est nul`;
    } else if((number1 > 0 && number2 > 0) || (number1 < 0 && number2 < 0)) {
        return `Le produit est positif`;
    } else {
        return `Le produit est négatif`;
    }
}
// end javascript


// start jquery
function fonction_jquery() {
    const number1 = $("#number1").val();
    const number2 = $("#number2").val();
    if(number1 == 0 || number2 == 0) {
        return `Le produit est nul`;
    } else if((number1 > 0 && number2 > 0) || (number1 < 0 && number2 < 0)) {
        return `Le produit est positif`;
    } else {
        return `Le produit est négatif`;
    }
}
// end jquery