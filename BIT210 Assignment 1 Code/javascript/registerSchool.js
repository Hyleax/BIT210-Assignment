const form = document.getElementById('form')
const school = document.getElementById('school')
const schoolAddress = document.getElementById('school-address')
const city = document.getElementById('city')
const button = document.getElementById('register-button')
const text = document.getElementById('text')


form.addEventListener('submit', e => {
    e.preventDefault();

    validateInput();

    validateButton();
})

function validateInput() {
    if(school.value > 20) {
        text.innerHTML="School name is too long";
        text.style.color = red;

    }
    if(schoolAddress.value < 10) {
        text.innerHTML = "Invalid school address.";
        text.style.color = red;

    }
    if(city.value > 20) {
        text.innerHTML = "City name is too long";
        text.style.color = red;
    }
}

function validateButton() {
    alert('Registered Successfully');
}
