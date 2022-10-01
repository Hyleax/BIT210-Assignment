const loginUsername = document.getElementById('login--username')
const loginPassword = document.getElementById('login--password')
const loginBtn = document.getElementById('loginBtn')
const volunteerArray = [
    {   
        id: 1,
        username: "hyleax",
        fullname: "Norman Yap",
        mobileNo: "0122361776",
        occupation: "student",
        dob: "05-09-2001",
        email: "normanyaptw@yahoo.com",
        password: "12345"
    }
    ,
    {
        id: 2,
        username: "slick",
        fullname: "Timmy Tam",
        mobileNo: "0122546686",
        occupation: "student",
        dob: "04-02-1994",
        email: "timmyTamw@gmail.com",
        password: "12629"
    },
    {
        id: 3,
        username: "hyper",
        fullname: "Bobby Wong",
        mobileNo: "0165543216",
        occupation: "Accountant",
        dob: "21-03-1984",
        email: "hyperbob@gmail.com",
        password: "12345"
    },
    {
        id: 4,
        username: "Danx",
        fullname: "Danny Tan",
        mobileNo: "0172217654",
        occupation: "teacher",
        dob: "10-10-1990",
        email: "danxxx@gmail.com",
        password: "12345"
    },
    {
        id: 5,
        username: "clev",
        fullname: "Christie Tan",
        mobileNo: "0145567874",
        occupation: "interior designer",
        dob: "04-01-1996",
        email: "christieuwu@gmail.com",
        password: "12345"
    }
]

const loginToProfile = (e) => {
    e.preventDefault()

    // check if user is a superAdmin
    checkSuperAdmin()
        
    // check if user is a volunteer
    checkVolunteer()
}

// function to check if user is a superAdmin
const checkSuperAdmin = () => {
    if (loginUsername.value === "superadmin1" && 
    loginPassword.value === "superadmin1"){
        window.location = "superAdminProfile.html"
    }
}

// function to check if a user is a registered volunteer
const checkVolunteer = () => {
    volunteerArray.forEach((v) => {
        if (loginUsername.value === v.username &&
            loginPassword.value === v.password){
                window.location = "volunteerProfile.html"
            } 
    })
}

loginBtn.addEventListener('click', loginToProfile)