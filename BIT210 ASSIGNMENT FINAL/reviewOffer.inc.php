<?php

// Require db_connect.php 
require 'includes/db_connect.php';

// Query to select data from offer table
$sqlquery = "SELECT `offerStatus`, `offerID`, `offerDate`, `remarks`, `volunteerID`, `requestID` FROM `offer`";
?>