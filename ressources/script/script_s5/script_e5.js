// start javascript
function fonction_javascript() {
    const number = parseInt(document.getElementById('number').value);
    let result = `Table de ${number} :
    `;
    for(let i = 1; i <= 10; i++) {
        result = `${result}${number} * ${i} = ${number*i}
        `;
    }
    return result;
}
// end javascript


// start jquery
function fonction_jquery() {
    const number = parseInt($('#number').val());
    let result = `Table de ${number} :
    `;
    for(let i = 1; i <= 10; i++) {
        result = `${result}${number} * ${i} = ${number*i}
        `;
    }
    return result;
}
// end jquery