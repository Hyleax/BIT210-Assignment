// Assign every variable based on their ids
const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');
const fullName = document.getElementById('fullName');
const email = document.getElementById('email');
const phoneNumber = document.getElementById('phoneNo');
const staffID = document.getElementById('staffID');
const position = document.getElementById('position');
const button = document.getElementById('register-button');
const text = document.getElementById('text')
const signOutBtn = document.getElementById('sign-out')

signOutBtn.addEventListener('click', (e)=> {
    e.preventDefault()
    window.location = "login.html"    
})

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInput();

    validateButton();
})

// Function used for input validation
function validateInput() {

    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();
    const fullNameValue = fullName.value.trim();
    const emailValue = email.value.trim();
    let pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(usernameValue > 20){
        text.innerHTML = 'Username should contain 6 to 20 characters';
    }
    

    if(passwordValue < 6 || passwordValue > 20){
         text.innerHTML='Password must contain 6 to 20 characters.';
         return false;
    } 
    
    if(fullNameValue > 20){
        text.innerHTML = 'Name is too long.';
        return false;
    }
    
    if(phoneNumber.value <= 5) {
        text.innerHTML = 'Phone number is invalid.';
    }

    if(staffID.value <= 5) {
        text.innerHTML = 'Staff ID is invalid.'
    }

    if(position.value <= 5) {
        text.innerHTML = 'Position is invalid.'
    }

    if(emailValue.match(pattern)) {
        return true;
    }
    else {
        text.innerHTML = 'Email is invalid';
        return false;
    }
    
}

function validateButton() {
    alert('Registered successfully');

}
