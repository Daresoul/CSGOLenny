<?php
$servername = "localhost";
$username = "blacktom_tomato";
$password = "xx1234567";
$dbname = "blacktom_CSGOLenny";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>