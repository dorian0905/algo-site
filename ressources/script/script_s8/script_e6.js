// start javascript
function fonction_javascript() {
    const T =[[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 10, 5, 2],[1, 5, 9, 8, 7, 5, 2]];
    let max = T[0][0];
    for(let i = 0; i <= T.length-1; i++) {
        for(let j = 0; j <= T[0].length-1; j++) {
            if(T[i][j] > max) {
                max = T[i][j];
            }
        }
    }
    return max;
}
// end javascript


// start jquery
function fonction_jquery() {
    const T =[[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 7, 5, 2],[1, 5, 9, 8, 10, 5, 2],[1, 5, 9, 8, 7, 5, 2]];
    let max = T[0][0];
    for(let i = 0; i <= T.length-1; i++) {
        for(let j = 0; j <= T[0].length-1; j++) {
            if(T[i][j] > max) {
                max = T[i][j];
            }
        }
    }
    return max;
}
// end jquery