// start javascript
function fonction_javascript() {
    let T = [];
    let result = '';
    for(let k = 0; k <= 3; k++) {
        T[k] = [];
        for(let m = 0; m <= 1; m++) {
            T[k][m] = (k + 1) + 4 * m;
        }
    }
    for(let k = 0; k <= 3; k++) {
        for(let m = 0; m <= 1; m++) {
            result = `${result} ${T[k][m]}, `;
        }
    }
    return result;
}
// end javascript


// start jquery
function fonction_jquery() {
    let T = [];
    let result = '';
    for(let k = 0; k <= 3; k++) {
        T[k] = [];
        for(let m = 0; m <= 1; m++) {
            T[k][m] = (k + 1) + 4 * m;
        }
    }
    for(let k = 0; k <= 3; k++) {
        for(let m = 0; m <= 1; m++) {
            result = `${result} ${T[k][m]}, `;
        }
    }
    return result;
}
// end jquery