<?php

include_once 'db_connect.php';

// Create variables based on input names
$username = $_POST['Username'];
$password = $_POST['Password'];
$fullName = $_POST['FullName'];
$email = $_POST['Email'];
$phoneNo = $_POST['PhoneNo'];
$staffID = $_POST['StaffID'];
$position = $_POST['Position'];
$registerButton = $_POST['registerButton'];


// Create input length using strlen()
$usernameLen = strlen[$username];
$passwordLen = strlen[$password];
$fullNameLen = strlen[$fullName];
$phoneNoLen = strlen[$phoneNo];
$staffIDLen = strlen[$staffID];
$positionLen = strlen[$position]



// Input Validation
// Username validation
if(isset(registerButton)) {
   if (empty($username) || empty($password) || empty($fullName)|| 
   empty($email)|| empty($phoneNo)|| empty($staffID)|| empty($position)) {
      echo "Input fields cannot be empty!";
   }

   elseif($usernameLen > 20){
      echo "<br> Username should contain 6 to 20 characters";
   
     // Password validation   
     }elseif ($passwordLen > 20) {
        echo "<br> Password";
     
     // Full name validation
     }elseif ($fullNameLen > 20) {
        echo "<br> Name is too long."; 
     
     }
     // Email validation
     elseif(!preg_match("~([a-zA-Z0-9!#$%&'*+-/=?^_`{|}~])@([a-zA-Z0-9-]).([a-zA-Z0-9]{2,4})~", $email)) {
        echo "<br> Invalid email";
     
     // Phone Number validation
     }elseif ($phoneNoLen > 20) {
        echo "<br> Phone number is invalid.";
     
     // Staff ID validation
     }elseif ($staffIDLen > 10) {
        echo "<br> Staff ID is too long.";
     
     // Position validation 
     }elseif ($positionLen <= 5) {
        echo "<br> Position is invalid.";
     }
}



// Check connection
// Server: localhost
// username: root
// Password: ""
// Database name: schoolhelp
$connection = new mysqli('localhost', 'root', '', 'schoolhelp');
   
// Insert values
// Retrieve values
$sqlquery = "INSERT INTO schooladminlist VALUES('$username', '$password', '$fullName', 
                                                '$email', '$staffID', '$position')";

// If data is inserted into database
if ($connection->query($sqlquery)) {
    echo "<h2>Data has been successfully insert into database.</h2>";
}
// If failed to insert data into database
else {
   mysqli_error($connection);
}

// Close connection
$connection->close();
?>