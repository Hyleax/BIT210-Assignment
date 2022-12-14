<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reviewOffer.css">
    <title>Review Offer Page</title>
</head>
<body>
    <div class="logo">
        <img src="images/logo.png" class="logo" alt="logo" title="SchoolHELP">
    </div>

    <a  href="includes/logout.inc.php" class="btn btn-primary" id="sign-out">Sign out</a>

    <div class="offer">
        <div class="offer-1">
            <h3>Offer 1</h3>
            <p>Date: 1-7-2022</p>
            <p>Remark: I'm willing to teach English, Mathematics, and Science subjects <br> for the students</p>
            <p>Name: Adam</p>
            <p>Age: 20</p>
            <p>Occupation: Student</p>
            <button class="btn btn-primary" id="accept-offer">Accept offer</button>
        </div>
        

        <div class="offer-2">
            <h3>Offer 2</h3>
            <p>Date: 5-7-2022</p>
            <p>Remark: I can donate resources such as laptops, desktop to the school.</p>
            <p>Name: James</p>
            <p>Age: 30</p>
            <p>Occupation: CEO</p>
            <button class="btn btn-primary" id="accept-offer">Accept offer</button>
        </div>
        
        <div class="offer-3">
            <h3>Offer 3</h3>
            <p>Date: 1-8-2022</p>
            <p>Remark: I can provide consultation for students who are having <br> mental health issue.</p>
            <p>Name: Natalie</p>
            <p>Age: 25</p>
            <p>Occupation: Teacher</p>
            <button class="btn btn-primary" id="accept-offer">Accept offer</button>
        </div>
    
    </div>
    
    <div class="close-request">
        <h3>Select request below to close:</h3>
            <h4>Request 1:</h4>
            <button class="btn btn-primary" id="btn">Close request</button>
            <h4>Request 2:</h4>
            <button class="btn btn-primary" id="btn">Close request</button>
            <h4>Request 3:</h4>
            <button class="btn btn-primary" id="btn">Close request</button>
    </div>
    
    <div class="footer">
        <footer>
            <p>Copyright &copy; 2022. All rights reserved</p>
        </footer>
    </div>
    <script src="javascript/reviewOffer.js"></script>

</body>
</html>
