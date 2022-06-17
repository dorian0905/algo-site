// start javascript
function fonction_javascript() {
    let A = document.getElementById("number1").value;
    let B = document.getElementById("number2").value;
    let C = document.getElementById("number3").value;
    let D = A;
    A = C;
    C = B;
    B = D;
    return `A = ${A}, B = ${B}, C = ${C}`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let A = $("#number1").val();
    let B = $("#number2").val();
    let C = $("#number3").val();
    let D = A;
    A = C;
    C = B;
    B = D;
    return `A = ${A}, B = ${B}, C = ${C}`;
}
// end jquery