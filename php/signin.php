<?php
include("db.php");

if(isset($_POST['submit'])){
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $select = mysqli_query($connect, "select * from users where binary email = '$user' ") or 
    die("could not login".mysqli_error($connect));
    $num = mysqli_num_rows($select);
    if(mysqli_num_rows($select)){
        while($rows=mysqli_fetch_assoc($select)){
            $use = $rows['email'];
            $pwd = $rows['password'];
        }
        if(password_verify($pass, $pwd)){
            if($num>0){
                setcookie("oka", $use, time()+3600);
                header("location:vinland.php");
            }
        }else{
            echo "Sorry, wrong password";
        }
    }else{
        echo "Wrong email";
    }
}
?>

