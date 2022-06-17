// start javascript
function fonction_javascript() {
    let number = document.getElementById("number1").value;
    let carre = number * number;
    return `carre = ${carre}`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let number = $("#number1").val();
    let carre = number * number;
    return `carre = ${carre}`;
}
// end jquery