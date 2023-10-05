<?php
include("db.php");

// sql to create table
$sql = "CREATE TABLE cart (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, 
price VARCHAR(50) NOT NULL, image VARCHAR(50) NOT NULL)";

if (mysqli_query($connect, $sql)) {
    echo "Table cart created succesfully";
}else{
    echo "Error creating table: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
