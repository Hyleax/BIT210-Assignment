const form = document.getElementById('form')
const school = document.getElementById('school')
const schoolAddress = document.getElementById('school-address')
const city = document.getElementById('city')
const button = document.getElementById('register-button')
const text = document.getElementsByTagName('small')

button.addEventListener('click', e => {
    e.preventDefault();
    if (validateInput()){
        validateButton()
    }
})


const validateInput = () => {
    if (school.value === "" || schoolAddress.value ==="" 
    || city.value === ""){
        text[3].textContent = "Please fill up all fields"
        text[3].style.color = "red";
        return false
    }

    else if(school.value.length > 20) {
        text[0].textContent="School name is too long";
        text[0].style.color = "red";
        return false

    }
    else if(schoolAddress.value.length < 10) {
        text[1].textContent = "Invalid school address.";
        text[1].style.color = "red";
        return false
    }
    else if(city.value.length > 20) {
        text[2].textContent = "City name is too long";
        text[2].style.color = "red";
        return false
    }
   
    
}

const validateButton = () => {
    alert('Registered Successfully');
}
