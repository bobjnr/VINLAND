<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Images to MySQL</title>
    <style>
        input{
            width: 50%;
            height: 5%;
            border: 1px;
            border-radius: 5px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label>Choose a Pic:</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><p>

        <label>Enter Name:</label>
        <input type="text" name="name" placeholder="Enter name of product"><p>

        <label>Enter Price:</label>
        <input type="number" name="price"><p>

        <input type="submit" name="upload" value="Upload Image/Data"><p>
    </form>
</body>


<?php

session_start();
include("db.php");

if(isset($_POST['upload'])){
    $name = $_POST["name"];
    $price = $_POST["price"];
    if($_FILES["image"]["error"] === 4){
        echo 
        "<script> alert('Image does not exist'); </script>";
    }else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.',$fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo 
            "<script> alert('Invalid Image Extension'); </script>";
        }else if($fileSize > 1000000){
            echo
            "<script> alert('Image Size is too large'); </script>";
        }else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            $query = "INSERT INTO shopping_cart VALUES('', '$newImageName', '$name', '$price')";
            mysqli_query($connect, $query);
            echo
            "<script> alert('Successfully Added'); </script>";
        }
    }

}
?>
</html>
