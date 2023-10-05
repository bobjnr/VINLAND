<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connect = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database Connected successfully";
?>