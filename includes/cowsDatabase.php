<?php

// Create variables to connect to the database
$servername = "127.0.0.1";
$username = "cowUsername";
$password = "cowPassword";
$dbname = "cows";

// Attempt to connect to the database based on the info above
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    // Stop running the script if we can't connect to the database
    die("Connection failed: " . mysqli_connect_error());
}
?>