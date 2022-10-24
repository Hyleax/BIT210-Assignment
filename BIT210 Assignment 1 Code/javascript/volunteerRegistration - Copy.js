
/**
 * 
 * 
 * JAVASCRIPT FOR REGISTERING VOLUNTEER
 * 
 * 
 * 
 */


// INPUTS FOR VOLUNTEER REGISTER PAGE
const usernameEL = document.getElementById('username')
const fullNameEL = document.getElementById('fullname')
const phoneNumberEl = document.getElementById('phoneNumber')
const occupationEl = document.getElementById('occupation')
const birthdateEl = document.getElementById('birthdate')
const emailEl = document.getElementById('email')
const passwordEl = document.getElementById('password')
const confirmPasswordEl = document.getElementById('confirmPassword')
const submitBtn = document.getElementById('volunteerRegister-btn')
const volunteerArray = [
        {
            id: 1,
        username: "timmyTam",
        fullname: "Chris",
        mobileNo: "0122361776",
        occupation: "student",
        dob: "05-09-2001",
        email: "chris@gmail.com",
        password: "12345"
        }
]
let volunteerID = 0

let actualErrorMsg = ""

// validation for volunteer registration
const volunteerRegistrationValidation = (e) => {
    e.preventDefault()
    // FUNCTIONS FOR VALIDATION CRITERIA
    if (checkEmailAddress() && // check if email contains '@' and '.com'
        checkPasswordStrength() && // check if password is strong enough
        checkSamePassword() &&  //check if password and confirmPassword are the same
        checkForEmptyInput()) {// check if all fields in the form have been filled    
        
        // create and register volunter
        createVolunteer()
        
            let nextSibling = submitBtn.nextElementSibling;
        nextSibling.classList.add('successMsg')
            nextSibling.textContent = " Volunteer has been registered"

        setTimeout(()=> {
            clearForm()
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
    usernameEL.value = ""
    fullNameEL.value = ""
    phoneNumberEl.value = ""
    occupationEl.value = ""
    birthdateEl.value = ""
    emailEl.value = ""
    passwordEl.value = ""
    confirmPasswordEl.value = ""
}

// function to create and register a volunteer
const createVolunteer = () => {
    let newVolunteer = {
        id: volunteerID++,
        username: usernameEL.value,
        fullname: fullNameEL.value,
        mobileNo: phoneNumberEl.value,
        occupation: occupationEl.value,
        dob: birthdateEl.value,
        email: emailEl.value,
        password: passwordEl.value
    }
    volunteerArray.push(newVolunteer)

    console.log(volunteerArray);
}

submitBtn.addEventListener('click', volunteerRegistrationValidation)

