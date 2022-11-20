// Declare variables based on their ids
const form = document.getElementById('form')
const school = document.getElementById('school')
const schoolAddress = document.getElementById('school-address')
const city = document.getElementById('city')
const button = document.getElementById('register-button')
const text = document.getElementsByTagName('small')

// button.addEventListener
button.addEventListener('click', e => {
    if (validateInput()){
        validateButton()
    }
})

// validateInput() function
const validateInput = () => {
    if (school.value === "" || schoolAddress.value ==="" // If user didn't enter anything into the input
    || city.value === ""){
        text[3].textContent = "Please fill up all fields"
        text[3].style.color = "red";
        return false
    }

    // If school length is > 20
    else if(school.value.length > 20) {
        text[0].textContent="School name is too long";
        text[0].style.color = "red";
        return false

    }
    // if school address length is < 10
    else if(schoolAddress.value.length < 10) {
        text[1].textContent = "Invalid school address.";
        text[1].style.color = "red";
        return false
    }
    // if city length is > 20
    else if(city.value.length > 20) {
        text[2].textContent = "City name is too long";
        text[2].style.color = "red";
        return false
    }
    return true
    
}
// validateButton() function for register button
const validateButton = () => {
    alert('Registered Successfully');
}
