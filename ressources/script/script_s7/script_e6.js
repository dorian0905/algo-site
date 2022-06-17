// start javascript
function fonction_javascript() {
    const array = [1, 5, 7, 2, 9, -8, -12, 7, -1, 21, -12];
    let minValue = array[0];
    let maxValue = array[0];
    for(let i = 0; i < array.length; i++) {
        if(array[i] < minValue) {
            minValue = array[i];
        }
        if(array[i] > minValue) {
            maxValue = array[i];
        }
    }
    return `La différence max est de ${maxValue - minValue}`;
}
// end javascript


// start jquery
function fonction_jquery() {
    const array = [1, 5, 7, 2, 9, -8, -12, 7, -1, 21, -12];
    let minValue = array[0];
    let maxValue = array[0];
    for(let i = 0; i < array.length; i++) {
        if(array[i] < minValue) {
            minValue = array[i];
        }
        if(array[i] > minValue) {
            maxValue = array[i];
        }
    }
    return `La différence max est de ${maxValue - minValue}`;
}
// end jquery