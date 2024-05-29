<?php
// Script to connect to the database
$servername  = "localhost";
$username = "root";
$password = "";
$database = "user_data";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>