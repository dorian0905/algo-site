// start javascript
function fonction_javascript() {
    let X=[];
    let Val=1;
    let result = '';
    for(let i = 0; i <= 1; i++) {
        X[i] = [];
        for(let j = 0; j <= 2; j++) {
            X[i][j] = Val;
            Val++;
        }
    }
    for(let i = 0; i <= 1; i++) {
        for(let j = 0; j <= 2; j++) {
            result = `${result} ${X[i][j]}, `
        }
    }
    return result;
}
// end javascript


// start jquery
function fonction_jquery() {
    let X=[];
    let Val=1;
    let result = '';
    for(let i = 0; i <= 1; i++) {
        X[i] = [];
        for(let j = 0; j <= 2; j++) {
            X[i][j] = Val;
            Val++;
        }
    }
    for(let i = 0; i <= 1; i++) {
        for(let j = 0; j <= 2; j++) {
            result = `${result} ${X[i][j]}, `
        }
    }
    return result;
}
// end jquery