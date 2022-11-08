<?php

// Check connection
$host = "localhost";
$user = "root";
$password = "";
$database = "schoolhelp";

$connection = new mysqli($host, $user, $password, $database);

// Failed to connect to database
if (!$connection){
    die("Failed to connect ". $connection->connect_error);
 } else {
    echo "Successfully connected.";
}

?>