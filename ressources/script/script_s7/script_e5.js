// start javascript
function fonction_javascript() {
    const array = ['arbre', 'bol', 'cool', 'flute', 'kamel', 'novembre', 'zebre'];
    const word = document.getElementById('word').value;
    let indexMin = 0;
    let indexMax = array.length - 1;
    let finished = false;
    let presentIndex = 0;
    while(finished == false) {
        presentIndex = Math.floor((indexMax - indexMin)/2) + indexMin;
        if(array[presentIndex] == word) {
            return "Mot trouvé";
        } else if(word < array[presentIndex]) {
            indexMax = presentIndex - 1;
        } else {
            indexMin = presentIndex + 1;
        }
        if(indexMax < indexMin) {
            finished = true;
        }
    }
    return "Le mot n'existe pas";
}
// end javascript


// start jquery
function fonction_jquery() {
    const array = ['arbre', 'bol', 'cool', 'flute', 'kamel', 'novembre', 'zebre'];
    const word = $('#word').val();
    let indexMin = 0;
    let indexMax = array.length - 1;
    let finished = false;
    let presentIndex = 0;
    while(finished == false) {
        presentIndex = Math.floor((indexMax - indexMin)/2) + indexMin;
        if(array[presentIndex] == word) {
            return "Mot trouvé";
        } else if(word < array[presentIndex]) {
            indexMax = presentIndex - 1;
        } else {
            indexMin = presentIndex + 1;
        }
        if(indexMax < indexMin) {
            finished = true;
        }
    }
    return "Le mot n'existe pas";
}
// end jquery