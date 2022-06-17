// start javascript
function fonction_javascript() {
    let tutu = parseInt(document.getElementById("tutu").value);
    const toto = parseInt(document.getElementById("toto").value);
    const tata = document.getElementById("tata").value;
    if(tutu > toto + 4 || tata == "OK") {
        tutu ++;
    } else {
        tutu --;
    }
    return `tutu = ${tutu}`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let tutu = parseInt($("#tutu").val());
    const toto = parseInt($("#toto").val());
    const tata = $("#tata").val();
    if(tutu > toto + 4 || tata == "OK") {
        tutu ++;
    } else {
        tutu --;
    }
    return `tutu = ${tutu}`;
}
// end jquery