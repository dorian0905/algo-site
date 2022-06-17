// start javascript
function fonction_javascript() {
    let N = [];
    N[0] = 1;
    let result = N[0];
    for(let k = 1; k <= 6; k++) {
        N[k] = N[k-1] + 2;
        result = `${result}
        ${N[k]}`;
    }
    return result;
}
// end javascript


// start jquery
function fonction_jquery() {
    let N = [];
    N[0] = 1;
    let result = N[0];
    for(let k = 1; k <= 6; k++) {
        N[k] = N[k-1] + 2;
        result = `${result}
        ${N[k]}`;
    }
    return result;
}
// end jquery