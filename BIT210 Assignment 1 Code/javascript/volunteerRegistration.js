// INPUTS FOR VOLUNTEER PAGE
const usernameEL = document.getElementById('username')
const fullNameEL = document.getElementById('fullname')
const phoneNumberEl = document.getElementById('phoneNumber')
const occupationEl = document.getElementById('occupation')
const birthdateEl = document.getElementById('birthdate')
const emailEl = document.getElementById('email')
const passwordEl = document.getElementById('password')
const confirmPasswordEl = document.getElementById('confirmPassword')
const submitBtn = document.getElementById('volunteerRegister-btn')

let actualErrorMsg = ""

// validation for volunteer registration
const volunteerRegistrationValidation = () => {
    
    // FUNCTIONS FOR VALIDATION CRITERIA
    if (checkEmailAddress() && // check if email contains '@' and '.com'
        checkPasswordStrength() && // check if password is strong enough
        checkSamePassword() &&  //check if password and confirmPassword are the same
        checkForEmptyInput()) {// check if all fields in the form have been filled    
        clearForm()

        let nextSibling = submitBtn.nextElementSibling;
        nextSibling.classList.add('successMsg')
            nextSibling.textContent = " Volunteer has been registered"
        setTimeout(()=> {
            window.location = "login.html"
        }, 2000)
    }

}

// checking if inputs fields are empty
const checkForEmptyInput = () => {
    if (usernameEL.value === "" || fullNameEL.value === "" || 
        phoneNumberEl.value === "" || occupationEl.value === "" || 
        birthdateEl.value === "" || emailEl.value === "" || 
        passwordEl.value === "" || confirmPasswordEl.value === ""){
            actualErrorMsg = " Please fill up all fields"
            let nextSibling = submitBtn.nextElementSibling;
            nextSibling.classList.add('errorMsg')
            nextSibling.textContent = actualErrorMsg
            makeErrorMsgDisapper(nextSibling)
            return false
        }
    
        else{
            return true
        }
}   

// check if email contains '@' and '.com'
const checkEmailAddress = () => {
    if (!(emailEl.value.includes("@")) || !(emailEl.value.includes(".com"))){
        actualErrorMsg = " This is not a valid email address"
        let prevSibling = emailEl.previousElementSibling;
        prevSibling.classList.add('errorMsg')
        prevSibling.textContent = actualErrorMsg
        makeErrorMsgDisapper(prevSibling)
        return false
    }
    return true
}

// checking if password contains capital letter and has more than 7 characters
const checkPasswordStrength = () => {
    if (passwordEl.value.length <= 8 || !checkPasswordUpperCase){ 
        actualErrorMsg = " Password is Too Weak"
        let prevSibling = passwordEl.previousElementSibling;
        prevSibling.classList.add('errorMsg')
        prevSibling.textContent = actualErrorMsg
        makeErrorMsgDisapper(prevSibling)
        return false
    }
    return true
}

// check if password contains uppercase
const checkPasswordUpperCase = () => {
    let passVal = passwordEl.value
    for (let i = 0; i < passVal.length; i++){
        if (passVal[i] === passVal[i].toUpperCase()){
            return true
        }
        return false
    }
}

// check if password and confirmPassword fields are the same
const checkSamePassword = () => {
    if (passwordEl.value === confirmPasswordEl.value){
        return true
    }
    else {
        actualErrorMsg = " Passwords do not match"
        let prevSibling = confirmPasswordEl.previousElementSibling;
        prevSibling.classList.add('errorMsg')
        prevSibling.textContent = actualErrorMsg
        makeErrorMsgDisapper(prevSibling)
        return false 
    }
}

//takes 2 seconds for error msg to disapper
const makeErrorMsgDisapper = (sibling) => {
    setTimeout(()=>{
        sibling.textContent = ""
    }, 2000)
}

// clears the form after submitBtn is clicked
const clearForm = () => {
    usernameEL.textContent = ""
    fullNameEL.textContent = ""
    phoneNumberEl.textContent = ""
    occupationEl.textContent = ""
    birthdateEl.textContent = ""
    emailEl.textContent = ""
    passwordEl.textContent = ""
    confirmPasswordEl.textContent = ""
}

submitBtn.addEventListener('click', volunteerRegistrationValidation)

