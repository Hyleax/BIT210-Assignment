<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registerSchool.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    
    <title>Register School Page</title>
</head>
<body>

    <div class="logo">
        <img src="images/logo.png" class="logo" alt="logo" title="SchoolHELP">
    </div>
    
    <a href="login.php" class="btn btn-primary" id="sign-out">Sign out</a>
    
        <div class="form-container">
            <form id="form" action="registerSchool.inc.php" method="post">
                        <h3>Register Form</h3>
                        <label for="school"  class="form-label">School:</label> <br>
                        <input type="text" class="form-control error" id="school" name="School" required 
                        placeholder="Enter school"> 
                        <small id="text"></small> <br>
                        
                        <label for="schoolAddress" class="form-label">School Address:</label> <br>
                        <input type="text" class="form-control success" id="school-address" name="SchoolAddress" required                    
                         placeholder="Enter school address"> 
                         <small id="text"></small> <br>
                        
                        <label for="city"  class="form-label">City:</label> <br>
                        <input type="text" class="form-control error" id="city" name="City" required 
                        placeholder="Enter city"> 
                        <small id="text"></small> <br>
                    
                <button type = "submit" class="btn btn-primary" id ="register-button" name="registerSchool">Register School</button>
                <small id="text"></small>
            </form>
        </div>
        <div class="link">
            <a href="registerSchoolAdmin.php">Click here to register school administator</a>
        </div>

        <div class="footer">
            <footer>
                <p>Copyright &copy; 2022. All rights reserved</p>
            </footer>
        </div>
    
        <script src="javascript/registerSchools.js"></script>
</body>
</html>