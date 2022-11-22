<?php
session_start();

// require db_connect.php file
require 'includes/db_connect.php';
include("includes/profile.inc.php");


$volunteerID = $_POST['volunteerID'];
$remark = $_POST['Remark'];
$requestID = $_POST['requestID'];

// Input validation
if (empty($remark)) {
    header("Location: ../submitOffer.php?erroremptyfields&remark= ".$remark);
    exit(); // exit
}
elseif (strlen($remark) > 200) {
    header("Location: ../submitOffer.php?error=remarkistoobig&remark".$remark);
    exit(); // exit
    echo "Your remark is too long";
}


$offerID = 

$sqlquery = "INSERT INTO offer(`offerStatus`, `offerDate`, `remarks`, `volunteerID`, `requestID`) VALUES ('PENDING','20-11-2022','$remark','$volunteerID','$requestID')";

// If data is inserted into database
if ($connection->query($sqlquery)) {
    header("Location: ./volunteerProfile.php?success=submitoffer");
    exit(); // exit
}else {
   $connection->error; // If failed to insert data into database
}

// Close connection
$connection->close();
?>