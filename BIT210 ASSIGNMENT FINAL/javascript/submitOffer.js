// Assign variables
const remark = document.getElementById('remark');
const text = document.querySelector('small');
const button = document.getElementById('submit');

// Button event listener
button.addEventListener('click', (e) =>{
    e.preventDefault();

    if(validateInput()) {
        validateButton()
        window.location = "volunteerProfile.html"
    }

})

// validateInput() function
const validateInput = () => {
    if(remark.value === "") {
        text.textContent = "Remark cannot be empty!"
        text.style.color = "red"
        return false
    }
    else {
        return true
    }
}
// validateButton() function
const validateButton = () => {
    alert("Your offer has been submitted.");
}