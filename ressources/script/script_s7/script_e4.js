// start javascript
function fonction_javascript() {
    let array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    const index = parseInt(document.getElementById('index').value);
    for(let i = index; i <= array.length-2; i++) {
        array[i] = array[i+1];
    }
    array.pop();
    return array;
}
// end javascript


// start jquery
function fonction_jquery() {
    let array = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    const index = parseInt($('#index').val());
    for(let i = index; i <= array.length-2; i++) {
        array[i] = array[i+1];
    }
    array.pop();
    return array;
}
// end jquery