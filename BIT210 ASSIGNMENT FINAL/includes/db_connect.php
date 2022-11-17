<?php

//Connection to database
$server = "localhost";
$user = "root";
$password = "";
$database = "colteach";

$connection = new mysqli($server, $user, $password, $database);

// Check connection
if (!$connection) {
    die("Failed to connect ". $connection->connect_error);
}

?>