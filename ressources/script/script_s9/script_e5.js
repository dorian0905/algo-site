// start javascript
function fonction_javascript() {
    let sentence = document.getElementById('sentence').value;
    const rankToDelete = parseInt(document.getElementById('rankToDelete').value);
    sentence = sentence.substr(0, rankToDelete) + sentence.substr(rankToDelete + 1, sentence.length-1);
    return sentence;
}
// end javascript


// start jquery
function fonction_jquery() {
    let sentence = $('#sentence').val();
    const rankToDelete = parseInt($('#rankToDelete').val());
    sentence = sentence.substr(0, rankToDelete) + sentence.substr(rankToDelete + 1, sentence.length-1);
    return sentence;
}
// end jquery