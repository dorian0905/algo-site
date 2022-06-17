// start javascript
function fonction_javascript() {
    const word = document.getElementById('word').value;
    const letters = 'abcdefghijklmnopqrstuvwxyza';
    let crypted = "";
    for(let i=0; i < word.length; i++) {
        crypted = crypted + letters[letters.indexOf(word[i])+1];
    }
    return crypted;
}
// end javascript


// start jquery
function fonction_jquery() {
    const word = $('#word').val();
    const letters = 'abcdefghijklmnopqrstuvwxyza';
    let crypted = "";
    for(let i=0; i < word.length; i++) {
        crypted = crypted + letters[letters.indexOf(word[i])+1];
    }
    return crypted;
}
// end jquery