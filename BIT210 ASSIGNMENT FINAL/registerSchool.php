<?php

include_once 'db_connect.php';


// Create variables based on input names
$school = $_POST['School'];
$schoolAddress = $_POST['SchoolAddress'];
$city = $_POST['City'];
$registerButton = $_POST['registerSchool'];

// Create input length
$schoolLength = strlen($school);
$schoolAddressLength = strlen($schoolAddress);
$cityLength = strlen($city);


// SQL query
$query = "INSERT INTO schoollist(School Name, Address, City) VALUES('$school', '$schoolAddress', '$city')";
$result = $connection->query($query);

if ($result){
    $row = $result->fetch_row();
    echo $row[0];
}

// User Validation
if (isset($registerButton)) {
    if (empty($school) || empty($schoolAddress) || empty($city)){
        echo "Input cannot be empty!";
        
        }elseif ($schoolLength > 20){
            echo "School name is too long.";
    
        }elseif ($schoolAddressLength < 10){
            echo "Invalid school address";
       
        }elseif ($cityLength > 20){
            echo "City name is too long";
        }
}
 
?>