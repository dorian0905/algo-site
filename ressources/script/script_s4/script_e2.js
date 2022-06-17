// start javascript
function fonction_javascript() {
    let hours = parseInt(document.getElementById("hours").value);
    let minutes = parseInt(document.getElementById("minutes").value);
    const totalMinutes = 60 * hours + minutes + 1;
    const todayMinutes = totalMinutes % (60 * 24);
    hours = Math.floor(todayMinutes / 60);
    minutes = todayMinutes % 60;
    return `Dans une minute, il sera ${hours} heure(s) ${minutes} minutes`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let hours = parseInt($("#hours").val());
    let minutes = parseInt($("#minutes").val());
    const totalMinutes = 60 * hours + minutes + 1;
    const todayMinutes = totalMinutes % (60 * 24);
    hours = Math.floor(todayMinutes / 60);
    minutes = todayMinutes % 60;
    return `Dans une minute, il sera ${hours} heure(s) ${minutes} minutes`;
}
// end jquery