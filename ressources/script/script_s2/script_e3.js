// start javascript
function fonction_javascript() {
    let htPrice = parseFloat(document.getElementById('htPrice').value);
    let numberOfArticles = parseInt(document.getElementById('numberOfArticles').value);
    let rate = parseFloat(document.getElementById('rate').value);
    let ttcPrice = htPrice * numberOfArticles * (rate + 1);
    return `prix TTC = ${ttcPrice}`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let htPrice = parseFloat($('#htPrice').val());
    let numberOfArticles = parseInt($('#numberOfArticles').val());
    let rate = parseFloat($('#rate').val());
    let ttcPrice = htPrice * numberOfArticles * (rate + 1);
    return `prix TTC = ${ttcPrice}`;
}
// end jquery