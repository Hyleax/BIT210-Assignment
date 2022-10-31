const tableBody = document.getElementById('table--body')

// sorting buttons
const sortBySchoolsBtn = document.getElementById('sortbySchools-btn')
const sortByCityBtn = document.getElementById('sortbyCity-btn')
const sortByReqDateBtn = document.getElementById('sortbyReqDate-btn')


const requestsArray = [
    {
        requestID: `REQ1`,
        requestStatus: "NEW",
        requestType: "Tutorial",
        requestDate: "02-10-2020",
        description: "Students need english lessons",
        schoolName: "SJK(C Puay Chai 2",
        city: "Petaling Jaya",
        requestDetails: {
            tutorialDate: "02-02-2021 2:00 P.M.",
            studentLevel: "primary-2",
            numOfStudents: 10
        }
    },
    {   
        requestID: `REQ2`,
        requestStatus: "NEW",
        requestType: "Resource",
        requestDate: "05-22-2021",
        description: "In need of mobile devices",
        schoolName: "SMK Kuchai Lama",
        city: "Kuchai Lama",
        requestDetails: {
            resourceType: "digital-device",
            numRequired: 5
        }
    },
    {
        requestID: `REQ3`,
        requestStatus: "NEW",
        requestType: "Resource",
        requestDate: "03-04-2021",
        description: "Students need laptop to study",
        schoolName: "SK Warna Biru",
        city: "Kuantan",
        requestDetails: {
            resourceType: "digital-device",
            numRequired: 5
        }
    },
    {
        requestID: `REQ4`,
        requestStatus: "NEW",
        requestType: "Tutorial",
        requestDate: "02-05-2020",
        description: "Add Maths help",
        schoolName: "SMJK(C) Chong Wen",
        city: "Kuala Lumpur",
        requestDetails: {
            tutorialDate: "10-05-2020 12:00 P.M.",
            studentLevel: "secondary-4",
            numOfStudents: 25
        }
    },
    {
        requestID: `REQ5`,
        requestStatus: "NEW",
        requestType: "Tutorial",
        requestDate: "07-21-2022",
        description: "Preparation for SPM BM",
        schoolName: "SMK Bukit Mewah",
        city: "Kuantan",
        requestDetails: {
            tutorialDate: "29-07-2022 9:30 A.M.",
            studentLevel: "secondary-5",
            numOfStudents: 20
        }
    },
    {
        requestID: `REQ6`,
        requestStatus: "NEW",
        requestType: "Resource",
        requestDate: "03-12-2022",
        description: "Students do not have internet",
        schoolName: "SK Tidak Tahu",
        city: "Gombak",
        requestDetails: {
            resourceType: "networking-equipment",
            numRequired: 15
        }
    }
]

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
            console.log(tableBody.offsetHeight);
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
        if (request.requestType === "Tutorial"){
            tableDataDetails = `
                <th scope="row">
                    <button id ="navigateToSubmitOfferBtn" class="btn btn-info btn-sm btn-block mx-2">Offer to Tutor</button>
                </th>
                <td>class on: ${request.requestDetails.tutorialDate}</td>
                <td>level: ${request.requestDetails.studentLevel}</td>
                <td>${request.requestDetails.numOfStudents} students</td>
            `
        }
        else if (request.requestType === "Resource"){
            tableDataDetails = `
                <th scope="row">
                <button id ="navigateToSubmitOfferBtn" class="btn btn-info btn-sm btn-block mx-2">Offer Resources</button></th>
                </th>
                <td>device type: ${request.requestDetails.resourceType}</td>
                <td>${request.requestDetails.numRequired} devices needed</td>
                <td></td>
            `
        }


        
        
        const tableRowDetails = document.createElement("tr")
        // adding classes to row details
        tableRowDetails.classList.add('tableDataDetails')
        tableRowDetails.classList.add('bg-dark')
        tableRowDetails.classList.add('text-light')
        tableRowDetails.innerHTML = tableDataDetails
    
        tableBody.append(tableRowDetails)
    
        tableRowWithData.addEventListener('click', showDetails)


        const navigateToSubmitOfferBtn = document.getElementById('navigateToSubmitOfferBtn')

        navigateToSubmitOfferBtn.addEventListener('click', (e) => {
            e.preventDefault()
            window.location = "submitOffer.html"
        })
    })
}

sortBySchoolsBtn.addEventListener('click', sortBySchool)
sortByCityBtn.addEventListener('click', sortByCity)
sortByReqDateBtn.addEventListener('click', sortByReqDate)

renderTable(requestsArray)

