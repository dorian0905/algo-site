// start javascript
function fonction_javascript() {
    let A = document.getElementById("number1").value;
    let B = document.getElementById("number2").value;
    let C = B;
    B = A;
    A = C;
    return `A = ${A}, B = ${B}`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let A = $("#number1").val();
    let B = $("#number2").val();
    let C = B;
    B = A;
    A = C;
    return `A = ${A}, B = ${B}`;
}
// end jquery