// start javascript
function fonction_javascript() {
    const name1 = document.getElementById("name1").value.toLowerCase();
    const name2 = document.getElementById("name2").value.toLowerCase();
    const name3 = document.getElementById("name3").value.toLowerCase();
    if(name1 <= name2 && name2 <= name3) {
        return `Les noms sont rangés`;
    } else {
        return `Les noms ne sont pas rangés`;
    }
}
// end javascript


// start jquery
function fonction_jquery() {
    const name1 = $("#name1").val().toLowerCase();
    const name2 = $("#name2").val().toLowerCase();
    const name3 = $("#name3").val().toLowerCase();
    if(name1 <= name2 && name2 <= name3) {
        return `Les noms sont rangés`;
    } else {
        return `Les noms ne sont pas rangés`;
    }
}
// end jquery