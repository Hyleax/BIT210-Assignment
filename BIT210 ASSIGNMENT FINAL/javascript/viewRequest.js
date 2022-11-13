const tableBody = document.getElementById('table--body')

// sorting buttons
const sortBySchoolsBtn = document.getElementById('sortbySchools-btn')
const sortByCityBtn = document.getElementById('sortbyCity-btn')
const sortByReqDateBtn = document.getElementById('sortbyReqDate-btn')

const requestsArray = []

// fetch viewRequest data from PHP file
fetch(`includes/viewRequests.inc.php`)
.then(res => res.json())
.then(requests => {
    requests.forEach((req) =>{
    requestsArray.push(req)
    })
    renderTable(requests)
})

console.log(requestsArray)

// SORTING FUNCTIONS
// sort requests by school
const sortBySchool = () => {
    requestsArray.sort((a, b)=> {
        if (a.schoolName > b.schoolName) return 1;
        if (a.schoolName < b.schoolName) return -1;
        return 0;
    })
    tableBody.innerHTML = "";
    renderTable(requestsArray)
}

// sort requests by city
const sortByCity = () => {
    requestsArray.sort((a, b)=> {
        if (a.city > b.city) return 1;
        if (a.city < b.city) return -1;
        return 0;
    })
    tableBody.innerHTML = "";
    renderTable(requestsArray)
}

// sort requests by Request date
const sortByReqDate = () => {
    requestsArray.sort((a, b)=> new Date(a.requestDate) - new Date(b.requestDate))
    tableBody.innerHTML = "";
    renderTable(requestsArray)
}

const renderTable = (reqArray) => {
    reqArray.forEach((request)=>{
 
        // function to show and hide request details
        const showDetails = () => {
            if (!detailsDisplayed){
                detailsDisplayed = true
                tableRowDetails.classList.remove('tableDataDetails')
                console.log("Details displayed");
            }
            else {
                detailsDisplayed = false
                tableRowDetails.classList.add('tableDataDetails')
                console.log("details Hidden");
            }
        }
    
        let detailsDisplayed = false;
    
        const tableRowWithData = document.createElement("tr")
        tableRowWithData.innerHTML = `
            <td scope="row">${request.requestDate}</td>
            <td>${request.description}</td>
            <td>${request.schoolName}</td>
            <td>${request.city}</td>
        `
        tableRowWithData.classList.add('tableRowData')
        tableBody.appendChild(tableRowWithData)
    
        // create table details elements
        let tableDataDetails;
        if ('studentLevel' in request){
            tableDataDetails = `
                <th scope="row">
                    <button class="btn btn-info btn-sm btn-block mx-2" id = "offerBtn">Offer Tutorial</button>
                </th>
                <td>class on: ${request.tutorialDate}</td>
                <td>level: ${request.studentLevel}</td>
                <td>${request.studentNum} students</td>
            `
        }
        else if ('resourceType' in request){
            tableDataDetails = `
                <th scope="row">
                <button class="btn btn-info btn-sm btn-block mx-2" id = "offerBtn">Offer Resources</button></th>
                </th>
                <td>device type: ${request.resourceType}</td>
                <td>${request.requireNum} devices needed</td>
                <td></td>
            `
        }

        const offerButtons = document.querySelectorAll('#offerBtn')

        offerButtons.forEach((btn) => {
            btn.addEventListener('click', () => {
                window.location = "submitOffer.html"
            })
        })
        
        const tableRowDetails = document.createElement("tr")
        // adding classes to row details
        tableRowDetails.classList.add('tableDataDetails')
        tableRowDetails.classList.add('bg-dark')
        tableRowDetails.classList.add('text-light')
        tableRowDetails.innerHTML = tableDataDetails
    
        tableBody.append(tableRowDetails)
    
        tableRowWithData.addEventListener('click', showDetails)
    })
}

sortBySchoolsBtn.addEventListener('click', sortBySchool)
sortByCityBtn.addEventListener('click', sortByCity)
sortByReqDateBtn.addEventListener('click', sortByReqDate)

