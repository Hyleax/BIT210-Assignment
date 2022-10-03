const tutorialRadio = document.getElementById('tutorial-radio')
const resourceRadio = document.getElementById('resource-radio')
const tutorialLbl = document.getElementById('tutorial-label')
const resourceLbl = document.getElementById('resource-label')
const tutorialContainer = document.querySelector('.tutorial--container')
const resourceContainer = document.querySelector('.resource--container')
const submitRequestBtn = document.getElementById('submitRequest-btn')
submitRequestBtn.style.display = "none"
const requestArray = []

// inputs for TUTORIAL request
const tutDescription = document.getElementById('tutorial-description')
const tutTime = document.getElementById('tutorial-time')
const studentLevel = document.getElementById('student-level')
const noOfStudents = document.getElementById('no-of-students')

// inputs for RESOURCE request
const resourceDesc = document.getElementById('resource-description')
const resourceType = document.getElementById('resource-type')
const noOfResources = document.getElementById('number-of-resources')

// display the correct inputs depending on the type of request
const checkRequestType = () => {
    if (tutorialRadio.checked){
        tutorialLbl.style.fontWeight = "800"
        resourceLbl.style.fontWeight = "normal"
        tutorialContainer.style.display = "block"
        resourceContainer.style.display = "none"
        submitRequestBtn.style.display = "block"    
    }
    else if (resourceRadio.checked){
        resourceLbl.style.fontWeight = "800"
        tutorialLbl.style.fontWeight = "normal"
        resourceContainer.style.display = "block"
        tutorialContainer.style.display = "none"
        submitRequestBtn.style.display = "block"
    }
}

// make sure entered request is valid
const requestValidation = () => {
    if (checkForEmptyInput()){
        alert("Request has been submitted")
        newRequest = {requestDate: Date.now()}
        if (tutorialRadio.checked){
            requestArray.push(
                {
                    ...newRequest,
                    requestType: 'tutorial',
                    tutorialDescription: tutDescription.value,
                    tutorialTime: tutTime.value,
                    studentLevel: studentLevel.value,
                    noOfStudents: noOfStudents.value
                }
            )
        }
        else [
            requestArray.push(
                {
                    ...newRequest,
                    requestType: 'resource',
                    resourceDescription: resourceDesc.value,
                    resourceType: resourceType.value,
                    noOfResources: noOfResources.value
                }
            )
        ]
        console.log(requestArray);
    }
}

// checking if inputs fields are empty
const checkForEmptyInput = () => {
    if (tutorialRadio.checked){
        if (tutDescription.value === "" || tutTime.value === "" ||
            studentLevel.value === "" || noOfStudents.value === ""){
                displayErrorMsg()
                return false
            }
    }

    else if (resourceRadio.checked){
        if (resourceDesc.value === "" || resourceType.value === "" ||
            noOfResources.value === ""){
                displayErrorMsg()
                return false
            }
    }
    return true
}

//display error msg if input is not filled
const displayErrorMsg = () =>{
    actualErrorMsg = ` some fields are not filled for
        ${tutorialRadio.checked ? "tutorial":"resource"} request`
            let nextSibling = submitRequestBtn.nextElementSibling;
            nextSibling.classList.add('errorMsg')
            nextSibling.textContent = actualErrorMsg
            makeErrorMsgDisapper(nextSibling)
}

//takes 2 seconds for error msg to disapper
const makeErrorMsgDisapper = (sibling) => {
    setTimeout(()=>{
        sibling.textContent = ""
    }, 2000)
}

tutorialRadio.addEventListener('click', checkRequestType)
resourceRadio.addEventListener('click', checkRequestType)
submitRequestBtn.addEventListener('click', requestValidation)





