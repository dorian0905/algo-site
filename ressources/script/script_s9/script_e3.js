// start javascript
function fonction_javascript() {
    const sentence = document.getElementById('sentence').value;
    let spacesNumber = 0;
    for(let i = 0; i <= (sentence.length-1); i++) {
        if(sentence[i] == ' ') {
            spacesNumber++;
        }
    }
    return spacesNumber + 1;
}
// end javascript


// start jquery
function fonction_jquery() {
    const sentence = $('#sentence').val();
    let spacesNumber = 0;
    for(let i = 0; i <= (sentence.length-1); i++) {
        if(sentence[i] == ' ') {
            spacesNumber++;
        }
    }
    return spacesNumber + 1;
}
// end jquery