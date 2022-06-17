// start javascript
function fonction_javascript() {
    const score1 = document.getElementById('score1').value;
    const score2 = document.getElementById('score2').value;
    const score3 = document.getElementById('score3').value;
    const score4 = document.getElementById('score4').value;
    if(score1 > 50) {
        return 'Le candidat est élu';
    } else if(score1 < 12.5 || score2 > 50 || score3 > 50 || score4 > 50) {
        return 'Le candidat est battu';
    } else if(score1 > Math.max(score2, score3, score4)) {
        return 'Le candidat est en ballottage favorable';
    } else {
        return 'Le candidat est en ballottage défavorable';
    }
}
// end javascript


// start jquery
function fonction_jquery() {
    const score1 = $('#score1').val();
    const score2 = $('#score2').val();
    const score3 = $('#score3').val();
    const score4 = $('#score4').val();
    if(score1 > 50) {
        return 'Le candidat est élu';
    } else if(score1 < 12.5 || score2 > 50 || score3 > 50 || score4 > 50) {
        return 'Le candidat est battu';
    } else if(score1 > Math.max(score2, score3, score4)) {
        return 'Le candidat est en ballottage favorable';
    } else {
        return 'Le candidat est en ballottage défavorable';
    }
}
// end jquery