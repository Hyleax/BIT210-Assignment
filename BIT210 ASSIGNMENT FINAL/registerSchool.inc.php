<?php

// require db_connect.php to run
require 'db_connect.php';

// Assign variables based on names
$school = $_POST['School'];
$schoolAddress = $_POST['SchoolAddress'];
$city = $_POST['City'];

// Input validation
if (empty($school) ||empty($schoolAddress) || empty($city)) {
    echo "Input cannot be empty!";
}

// Insert query

$sqlquery = "INSERT INTO schoollist(`School Name`, `Address`, `City`) VALUES ('$school', '$schoolAddress', '$city')";

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