// start javascript
function fonction_javascript() {
    const array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    // const array = [5, 3, 5, 8, 6, 7, 8, 1, 7];
    for(let i = 1; i <= array.length - 1; i++) {
        if(array[i] != array[i-1] + 1) {
            return 'Faux';
        }
    }
    return 'Vrai';
}
// end javascript


// start jquery
function fonction_jquery() {
    const array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    // const array = [5, 3, 5, 8, 6, 7, 8, 1, 7];
    for(let i = 1; i <= array.length - 1; i++) {
        if(array[i] != array[i-1] + 1) {
            return 'Faux';
        }
    }
    return 'Vrai';
}
// end jquery