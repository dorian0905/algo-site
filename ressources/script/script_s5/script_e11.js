var currentSession = [];
currentSession['continue'] = false;

// start javascript
function fonction_javascript() {
    const startingHorses = parseInt(document.getElementById('startingHorses').value);
    const playedHorses = parseInt(document.getElementById('playedHorses').value);
    let numerator = 1;
    let denominator = 1;
    let factP = 1;
    for(i = 1; i <= startingHorses; i++) {
        numerator *= i;
    }
    for(j = 1; j <= (startingHorses-playedHorses); j++) {
        denominator *= j;
    }
    for(k = 1; k <= playedHorses; k++) {
        factP *= k;
    }
    x = numerator/denominator;
    y = x / factP;
    return `Dans l’ordre : une chance sur ${x} de gagner
    Dans le désordre : une chance sur ${y} de gagner`;
}
// end javascript


// start jquery
function fonction_jquery() {
    const startingHorses = parseInt($('#startingHorses').val());
    const playedHorses = parseInt($('#playedHorses').val());
    let numerator = 1;
    let denominator = 1;
    let factP = 1;
    for(i = 1; i <= startingHorses; i++) {
        numerator *= i;
    }
    for(j = 1; j <= (startingHorses-playedHorses); j++) {
        denominator *= j;
    }
    for(k = 1; k <= playedHorses; k++) {
        factP *= k;
    }
    x = numerator/denominator;
    y = x / factP;
    return `Dans l’ordre : une chance sur ${x} de gagner
    Dans le désordre : une chance sur ${y} de gagner`;
}
// end jquery