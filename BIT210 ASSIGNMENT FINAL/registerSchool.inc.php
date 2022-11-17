<?php

// require db_connect.php to run
require 'includes/db_connect.php';

// Assign variables based on names
$school = $_POST['School'];
$schoolAddress = $_POST['SchoolAddress'];
$city = $_POST['City'];

// Input validation
if (empty($school) ||empty($schoolAddress) || empty($city)) {
    echo "Input cannot be empty!";
}
// Check school length
elseif (strlen($school) > 20) {
  echo "School name is too long";
}
// Check school address length
elseif (strlen($schoolAddress) > 20) {
  echo "School name is too long";
}
// Check city length
elseif (strlen($city) > 20) {
  echo "Invalid city!";
}

// Insert query

$sqlquery = "INSERT INTO `school`(`schoolID`, `schoolName`, `schoolAddress`, `city`) VALUES ('S001','$school','$schoolAddress','$city')";

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