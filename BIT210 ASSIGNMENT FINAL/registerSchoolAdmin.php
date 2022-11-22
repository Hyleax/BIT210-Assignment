<?php
session_start();


    if (isset($_GET['school'])){
        $schoolName = $_GET['school'];

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registerSchoolAdmin.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Register School Administrator</title>
</head>
<body>

    <div class="logo">
        <img src="images/logo.png" alt="logo" class="logo" title="SchoolHELP">
    </div>

    <a  href="includes/logout.inc.php" class="btn btn-primary" id="sign-out">Sign out</a>

        <div class="form-container">
            <form action="registerSchoolAdmin.inc.php" method="post" id="form">
                    <input type="text" name = "schoolname" value = "<?php echo $schoolName?>" hidden>

                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" 
                    placeholder="Enter username" name="Username" required> <br>
                
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" 
                    placeholder="Enter password" name="Password" required> <br>
                
        
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" 
                    placeholder="Enter full name" name="Fullname" required> <br>
                
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" 
                    placeholder="Enter email" name="Email" required> <br>
              
                    <label for="phoneNo">Phone</label>
                    <input type="text" class="form-control" id="phoneNo" 
                    placeholder="Enter phone number" name="PhoneNo" required> <br>
                
                    <label for="staffID">Staff ID:</label>
                    <input type="text" class="form-control" id="staffID" 
                    placeholder="Enter staff ID" name="StaffID" required> <br>
                
                    <label for="position">Position:</label>
                    <input type="text" class="form-control success" id="position" 
                    placeholder="Enter position" name="Position" required> <br>

                    <button class="btn btn-primary" id="register-button" name="registerButton">Register Account</button> <br>
                    <small id="text"></small>
        </form>
        </div>
        <div class="footer">
            <footer>
                <p>Copyright &copy; 2022. All rights reserved</p>
            </footer>
        </div>
        
        <script src="javascript/schoolAdmins.js"></script>

</body>
</html>
