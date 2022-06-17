// start javascript
function fonction_javascript() {
    let hours = parseInt(document.getElementById('hours').value);
    let minutes = parseInt(document.getElementById('minutes').value);
    let seconds = parseInt(document.getElementById('seconds').value);
    const totalSeconds = 3600 * hours + 60 * minutes + seconds + 1;
    const todaySeconds = totalSeconds % (3600 * 24);
    hours = Math.floor(todaySeconds / 3600);
    minutes = Math.floor((todaySeconds - hours * 3600) / 60);
    seconds = todaySeconds - hours * 3600 - minutes * 60;
    return `Dans une seconde, il sera ${hours} heure(s), ${minutes} minute(s) et ${seconds} seconde(s)`;
}
// end javascript


// start jquery
function fonction_jquery() {
    let hours = parseInt($('#hours').val());
    let minutes = parseInt($('#minutes').val());
    let seconds = parseInt($('#seconds').val());
    const totalSeconds = 3600 * hours + 60 * minutes + seconds + 1;
    const todaySeconds = totalSeconds % (3600 * 24);
    hours = Math.floor(todaySeconds / 3600);
    minutes = Math.floor((todaySeconds - hours * 3600) / 60);
    seconds = todaySeconds - hours * 3600 - minutes * 60;
    return `Dans une seconde, il sera ${hours} heure(s), ${minutes} minute(s) et ${seconds} seconde(s)`;
}
// end jquery