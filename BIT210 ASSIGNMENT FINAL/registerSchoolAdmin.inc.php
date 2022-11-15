<?php

require 'db_connect.php';

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

   if (empty($username) || empty($password) || empty($fullName)|| empty($email)|| empty($phoneNo)
   || empty($staffID)|| empty($position)) {
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


$sqlquery = "INSERT INTO schooladminlist(`username`, `password`, `fullName`, `email`, `phone`, `staffID`, `position`) 
             VALUES ('$username','$password','$fullName','$email',$phoneNo,'$staffID','$position')";

// If data is inserted into database
if (mysqli_query($connection, $sqlquery)) {
   echo "<h2>Data has been successfully insert into database.</h2>";
}
// If failed to insert data into database
else {
  $connection->connect_error;
}

// Close connection
$connection->close();


?>