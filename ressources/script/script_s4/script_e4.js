// start javascript
function fonction_javascript() {
    const photocopy = parseInt(document.getElementById("photocopy").value);
    let price = 0;
    if(photocopy <= 10) {
        price = photocopy * 0.1;
    } else if (photocopy <= 30) {
        price = 10 * 0.1 + (photocopy - 10) * 0.09;
    } else {
        price = 10 * 0.1 + 20 * 0.09 + (photocopy - 30) * 0.08;
    }
    return `Prix : ${price}€`;
}
// end javascript


// start jquery
function fonction_jquery() {
    const photocopy = parseInt($("#photocopy").val());
    let price = 0;
    if(photocopy <= 10) {
        price = photocopy * 0.1;
    } else if (photocopy <= 30) {
        price = 10 * 0.1 + (photocopy - 10) * 0.09;
    } else {
        price = 10 * 0.1 + 20 * 0.09 + (photocopy - 30) * 0.08;
    }
    return `Prix : ${price}€`;
}
// end jquery