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
const text = document.querySelector('small');

// Button event listener
button.addEventListener('click', (e) => {
    e.preventDefault()
    if(validateInput()){
        validateButton()}
})

// Function used for input validation
function validateInput() {

    let pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(username.value === "" || password.value === "" || fullName.value === "" || email.value === "" 
    || phoneNumber.value === "" || staffID.value === "" || position.value === "" ){
        text.textContent = 'Input cannot be blanked.'
        text.style.color = 'red'
        return false
    }

    else if(username.value.length > 20){
        text.textContent = 'Username should contain 6 to 20 characters';
        text.style.color = 'red'
        return false
    }
    

    else if(password.value.length < 6 || password.value.length > 20){
         text.textContent='Password must contain 6 to 20 characters.';
         text.style.color = 'red'
         return false
    } 
    
    else if(fullName.value.length > 20){
        text.textContent = 'Name is too long.';
        text.style.color = 'red'
        return false
    }
    
    else if(phoneNumber.value.length > 20) {
        text.textContent = 'Phone number is invalid.';
        text.style.color = 'red'
        return false
    }

    else if(staffID.value.length > 10) {
        text.textContent = 'Staff ID is too long.'
        text.style.color = 'red'
        return false
    }

    else if(position.value.length <= 5) {
        text.textContent = 'Position is invalid.'
        text.style.color = 'red'
        return false

    }

    if(email.value.match(pattern)) {
        return true
    }
    else {
        text.textContent = 'Email is invalid'
        text.style.color = 'red'
        return false
    }
    
}

// validateButton() function
function validateButton() {
    alert('Registered successfully');
}
