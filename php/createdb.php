<?php
include("connect.php");

// Create database
$sql = "CREATE DATABASE vinland";
if ($connect->query($sql) === TRUE){
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $connect->error;
}

$connect->close();
?>
