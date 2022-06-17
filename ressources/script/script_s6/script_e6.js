// start javascript
function fonction_javascript() {
    let Suite = [];
    Suite[0] = 1;
    Suite[1] = 1;
    result = `${Suite[0]}
    ${Suite[1]}`;
    for(i = 2; i <= 7; i++) {
        Suite[i] = Suite[i-1] + Suite[i-2];
        result = `${result}
        ${Suite[i]}`;
    }
    return result;
}
// end javascript


// start jquery
function fonction_jquery() {
    let Suite = [];
    Suite[0] = 1;
    Suite[1] = 1;
    result = `${Suite[0]}
    ${Suite[1]}`;
    for(i = 2; i <= 7; i++) {
        Suite[i] = Suite[i-1] + Suite[i-2];
        result = `${result}
        ${Suite[i]}`;
    }
    return result;
}
// end jquery