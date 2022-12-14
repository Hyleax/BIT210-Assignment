<?php
session_start();
include("includes/db_connect.php");
include("includes/profile.inc.php");

//get request ID
$requestID = $_POST['requestType'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/submitOffer.css">
    <title>Submit Offer Page</title>
</head>
<body>

    <div class="logo">
        <img src="images/logo.png" alt="schoolHELP logo" class="logo" 
        title="SchoolHELP">

        <a  href="includes/logout.inc.php" class="btn btn-primary" id="sign-out">Sign out</a>

    </div>
    <div class="form-container">
        <form action="submitOffer.inc.php" method="post">
            <h2>Submit your offer here:</h2>
            <input type="text" name= "volunteerID" value = "<?php echo $volunteerID?>" hidden>
            <input type="text" name= "requestID" value = "<?php echo $requestID; ?>" hidden>
                <label for="remark">Enter remark here:</label>
                <textarea class="form-control" id="remark" rows="5" name="Remark" required></textarea> 
                <small id="text"></small> <br>
                <br>

                <div class="d-grid gap-4">
                    <button class="btn btn-primary" id="submit" >Submit</button>
                </div>
                
        </form>
    </div>
    
    <div class="footer">
        <footer>
            <p>Copyright &copy; 2022. All rights reserved</p>
        </footer>
    </div>

    <script src="javascript/submitOffer.js"></script>
</body>
</html>
