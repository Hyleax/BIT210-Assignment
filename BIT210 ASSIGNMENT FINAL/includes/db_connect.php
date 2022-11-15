<?php

//Connection to database
$server = "localhost";
$user = "root";
$password = "";
$database = "schoolhelp";

$connection = new mysqli($server, $user, $password, $database);

// Check connection
if (!$connection) {
    die("Failed to connect ". $connection->connect_error);
<<<<<<< HEAD:BIT210 ASSIGNMENT FINAL/db_connect.php
 }

=======
 } 
>>>>>>> origin/main:BIT210 ASSIGNMENT FINAL/includes/db_connect.php
?>