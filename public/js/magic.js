function showRegistro() {
    document.getElementById('signIn').classList.remove('centerDiv');
    document.getElementById('signIn').classList.add('upDiv');
    
    document.getElementById('signUp').classList.remove('downDiv');
    document.getElementById('signUp').classList.add('centerDiv');
}

function signUptoIn() {
    document.getElementById('signUp').classList.remove('centerDiv');
    document.getElementById('signUp').classList.add('downDiv');
    
    document.getElementById('signIn').classList.remove('upDiv');
    document.getElementById('signIn').classList.add('centerDiv');
}