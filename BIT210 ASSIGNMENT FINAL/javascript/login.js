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
        password: "987654321"
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
const schoolAdminArray = [
    {
        school : {
            schoolID: "SCH1",
            schoolName: "SJK(C) Puay Chai 2",
            schoolAddress: "Jalan BU 3/1, Bandar Utama",
            schoolCity: "Petaling Jaya"            
        }, 
        username: "pc2admin",
        password: "123456789",
        fullname: "Bobby Leong",
        email: "pc2admin@gmail.com",
        phone: "0122457890",
        staffID: "STF1",
        position: "school admin"
    },
    {
        school : {
            schoolID: "SCH2",
            schoolName: "SJK(C) Yuk Chai",
            schoolAddress: "Jalan SS 24/1, Taman Megah",
            schoolCity: "Petaling Jaya"            
        }, 
        username: "yukchaiadmin",
        password: "12456",
        fullname: "Constance Wu",
        email: "yukchaiadmin@gmail.com",
        phone: "0165578063",
        staffID: "STF2",
        position: "school admin"
    }
]

const loginToProfile = (e) => {
    e.preventDefault()

    // check if user is a superAdmin
    checkSuperAdmin()

    // check if user is a school admin
    checkSchoolAdmin()
        
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

// function to check if a user is a registered school admin
const checkSchoolAdmin = () => {
    schoolAdminArray.forEach((s)=> {
        if (loginUsername.value === s.username &&
            loginPassword.value === s.password){
                window.location = "schoolAdminProfile.html"
            }
    })
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
