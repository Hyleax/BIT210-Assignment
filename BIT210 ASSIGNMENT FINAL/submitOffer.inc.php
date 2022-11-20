<?php

// require db_connect.php file
require 'includes/db_connect.php';

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


$sqlquery = "INSERT INTO offer(`offerStatus`, `offerID`, `offerDate`, `remarks`, `volunteerID`, `requestID`) VALUES ('PENDING','$offerID','20-11-2022','$remark','V001','$requestID')";

// If data is inserted into database
if ($connection->query($sqlquery)) {
    echo "<h2>Data has been successfully insert into database.</h2>";
}else {
   $connection->error; // If failed to insert data into database
}

// Close connection
$connection->close();
?>