<?php

// Require db_connect.php
require 'includes/db_connect.php';





// Create variables based on input names
$schoolName = $_POST['schoolname'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$fullName = $_POST['Fullname'];
$email = $_POST['Email'];
$phoneNo = $_POST['PhoneNo'];
$staffID = $_POST['StaffID'];
$position = $_POST['Position'];
$registerButton = $_POST['registerButton'];

// getting schoolID
$query = "SELECT * FROM school WHERE schoolName = '$schoolName'";
$result = mysqli_query($connection, $query);
$schoolID;

if($result){
    if($result && mysqli_num_rows($result) > 0){
    $school = mysqli_fetch_assoc($result);
    $schoolID = $school["schoolID"];
    }
}

// Input validation
if (empty($username) || empty($password) || empty($fullName)|| empty($email)|| empty($phoneNo)|| empty($staffID)|| empty($position)) {
      echo "Input fields cannot be empty!";
   }
   elseif (strlen($username) > 20) {
      echo "Username is too long";
   }
   elseif (strlen($password) > 20) {
      echo "Password is too long";
   }
   elseif (strlen($fullName) > 20) {
      echo "Name is too long";
   }
   elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email!";
   }
   elseif (strlen($staffID) > 10) {
      echo "Invalid staff ID!";
   }
   elseif (strlen($position) > 20) {
      echo "Invalid position!";
   }
   
// SQL query
$sqlquery = "INSERT INTO `schooladministrator`(`username`, `password`, `fullname`, `email`, `phoneNum`, `position`, `schoolID`) 
             VALUES ('$username','$password','$fullName','$email','$phoneNo','$position', $schoolID)";

// If data is inserted into database
if ($connection->query($sqlquery)) {
   header("Location: ./superAdminProfile.php?sucess=schooladminregis");
   exit();
}
// If failed to insert data into database
else {
  $connection->connect_error;
}

// Close connection
$connection->close();


?>
