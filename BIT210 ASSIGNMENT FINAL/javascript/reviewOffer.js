// Assign variables by by id name
const buttons = document.querySelectorAll('#accept-offer')
const offer = document.querySelector('.offer');
const closeReqButtons = document.querySelectorAll('#btn');

// List of offers inside offerArray
const offerArray = [
    {
        Date: '1-7-2022',
        Remark: `I'm willing to teach English, Mathematics, and Science subjects for the students`,
        Name: 'Adam',
        Age: 20,
        Occupation: 'Student',
    },

    {
        Date: '5-7-2022',
        Remark: `I can donate resources such as laptops, desktop to the school.`,
        Name: 'James',
        Age: 30,
        Occupation: 'CEO',
    },

    {
        Date: '1-8-2022',
        Remark: `I can provide consultation for students who are having mental health issue.`,
        Name: 'Natalie',
        Age: 25,
        Occupation: 'Teacher',
    },
]


// Add event listener to button
buttons.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        console.log("button is clicked");
        e.preventDefault()
    
        validateButton();
        
    })

    function validateButton() {
        if(btn.textContent === 'Accept offer'){
            btn.textContent = "ACCEPTED";
            btn.style.backgroundColor = "#16de31";
            return true
        }
        else{
            btn.textContent = 'Accept offer'
            btn.style.backgroundColor = 'blue'
            return false
            }
    }
})

/* button turns green and display "ACCEPTED" when school admin accepts offer
 * become original button if school admin cancels to accept the offer
 */

/**
 * closeReqButton event listener
 */

 closeReqButtons.forEach((closeReqButton) => {
    closeReqButton.addEventListener('click', (e)=>{
        e.preventDefault();
        closeButton()  
    })

        /** 
     * function for closing request
     * Button turns red and display "Closed" when the request is closed
     * become original button if school admin cancels to close the request
    */
const closeButton = () => {
    if(closeReqButton.textContent === 'Close request'){
        closeReqButton.style.backgroundColor = 'red';
        closeReqButton.textContent = 'Closed'; }
        else {
            closeReqButton.style.backgroundColor = '#4fd10f'
            closeReqButton.textContent = 'Close request'
        }
}
 })




