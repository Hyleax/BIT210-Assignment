<?php
  session_start();
  require_once 'includes/profile.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/volunteer.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Volunteer Profile</title>
</head>
<body>
    <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="logo" class="logo" title="schoolHELP"></a>
    </div>

    <img src="images/profile.png" alt="profile" class="user-profile">

    <h2><?php echo $fullName?> (Volunteer)</h2>

    <div class="container">
        <h3>Select option below:</h3>
        <div class="d-grid gap-3 col-4">
            <a href="viewRequests.php" class="btn btn-primary" id="view-request">View Request</a>
        </div>    
    </div>
    
    <div class="footer">
        <footer>
            <p>Copyright &copy; 2022. All rights reserved</p>
        </footer>
    </div>

    <a class="btn btn-primary" id="sign-out" href="includes/logout.inc.php">Sign out</a>

</body>
</html>
