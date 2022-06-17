// start javascript
function fonction_javascript() {
    const age = document.getElementById('age').value;
    const gender = document.getElementById('gender').value;
    if((age > 20 && gender == "Homme") || (age > 18 && age < 35 && gender == "Femme")) {
        return 'L\'habitant est imposable';
    } else {
        return 'L\'habitant est non imposable';
    } 
}
// end javascript


// start jquery
function fonction_jquery() {
    const age = $('#age').val();
    const gender = $('#gender').val();
    if((age > 20 && gender == "Homme") || (age > 18 && age < 35 && gender == "Femme")) {
        return 'L\'habitant est imposable';
    } else {
        return 'L\'habitant est non imposable';
    } 
}
// end jquery