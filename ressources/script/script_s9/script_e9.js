// start javascript
function fonction_javascript() {
    const sentence = document.getElementById('sentence').value;
    const key = document.getElementById('key').value;
    const letters = 'abcdefghijklmnopqrstuvwxyz';
    let crypted = '';
    let j = 0;
    for(let i=0; i < sentence.length; i++) {
        if(letters.includes(sentence[i])) {
            let iSentence = letters.indexOf(sentence[i]);
            let iKey = letters.indexOf(key[j]);
            crypted = crypted + letters[(iSentence + iKey) % 26];
            if(j == key.length - 1) {
                j=0;
            } else {
                j++;
            }
        } else {
            crypted = crypted + sentence[i];
        }
    }
    return crypted;
}
// end javascript


// start jquery
function fonction_jquery() {
    const sentence = $('#sentence').val();
    const key = $('#key').val();
    const letters = 'abcdefghijklmnopqrstuvwxyz';
    let crypted = '';
    let j = 0;
    for(let i=0; i < sentence.length; i++) {
        if(letters.includes(sentence[i])) {
            let iSentence = letters.indexOf(sentence[i]);
            let iKey = letters.indexOf(key[j]);
            crypted = crypted + letters[(iSentence + iKey) % 26];
            if(j == key.length - 1) {
                j=0;
            } else {
                j++;
            }
        } else {
            crypted = crypted + sentence[i];
        }
    }
    return crypted;
}
// end jquery