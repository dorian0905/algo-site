// start javascript
function fonction_javascript() {
    let array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    for(let i = 0; i <= Math.floor(array.length/2-1); i++) {
        transfert = array[i];
        array[i] = array[array.length-1-i];
        array[array.length-1-i] = transfert;
    }
    return array;
}
// end javascript


// start jquery
function fonction_jquery() {
    let array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    for(let i = 0; i <= Math.floor(array.length/2-1); i++) {
        transfert = array[i];
        array[i] = array[array.length-1-i];
        array[array.length-1-i] = transfert;
    }
    return array;
}
// end jquery