// start javascript
function fonction_javascript() {
    const sentence = document.getElementById('sentence').value;
    const vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
    let vowelsNumber = 0;
    for(let i = 0; i <= sentence.length-1; i++) {
        for(let j = 0; j <= 5; j++) {
            if(sentence[i] == vowels[j]) {
                vowelsNumber++;
            }
        }
    }
    return vowelsNumber;
}
// end javascript


// start jquery
function fonction_jquery() {
    const sentence = $('#sentence').val();
    const vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
    let vowelsNumber = 0;
    for(let i = 0; i <= sentence.length-1; i++) {
        for(let j = 0; j <= 5; j++) {
            if(sentence[i] == vowels[j]) {
                vowelsNumber++;
            }
        }
    }
    return vowelsNumber;
}
// end jquery