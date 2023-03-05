function check_pass(password) {
    var plength = password.length;
    if (plength < 6) {
        document.getElementById('msg').style.color = 'red';
        document.getElementById('msg').innerHTML = 'Your password is weak';
    } else if (plength >= 6 && plength <= 8) {
        document.getElementById('msg').style.color = '#F79115';
        document.getElementById('msg').innerHTML = 'Your password is medium';
    } else {
        document.getElementById('msg').style.color = '#0E7102';
        document.getElementById('msg').innerHTML = 'Your password is strong';
    }
}