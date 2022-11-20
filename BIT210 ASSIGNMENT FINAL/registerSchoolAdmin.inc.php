<?php

// Require db_connect.php
require 'includes/db_connect.php';

// Create variables based on input names
$username = $_POST['Username'];
$password = $_POST['Password'];
$fullName = $_POST['FullName'];
$email = $_POST['Email'];
$phoneNo = $_POST['PhoneNo'];
$staffID = $_POST['StaffID'];
$position = $_POST['Position'];
$registerButton = $_POST['registerButton'];


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
$sqlquery = "INSERT INTO `schooladministrator`(`username`, `password`, `fullname`, `email`, `phoneNum`, `staffID`, `position`, `schoolID`) 
             VALUES ('$username','$password','$fullName','$email','$phoneNo','$staffID','$position','12345')";

// If data is inserted into database
if ($connection->query($sqlquery)) {
   echo "<h2>Data has been successfully insert into database.</h2>";
}
// If failed to insert data into database
else {
  $connection->connect_error;
}

// Close connection
$connection->close();


?>
