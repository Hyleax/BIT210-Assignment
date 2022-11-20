<?php

require 'includes/db_connect.php';

$remark = $_POST['Remark'];

// Input validation
if (empty($remark)) {
    echo "Input cannot be empty!";
}
elseif (strlen($remark) > 200) {
    echo "Your remark is too long";
}


$sqlquery = "INSERT INTO offer(`Remark`, `Offer Status`) VALUES ('$remark', 'PENDING')";

// If data is inserted into database
if ($connection->query($sqlquery)) {
    echo "<h2>Data has been successfully insert into database.</h2>";
}else {
   $connection->error; // If failed to insert data into database
}

// Close connection
$connection->close();
?>