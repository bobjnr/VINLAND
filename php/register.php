<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0170857075.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/create.css" type="text/css">
    <title>Sign Up</title>
</head>
<body>
    
<div class="container-fluid">
        <div class="container py-4">
            <div class="row">
                <h1>VINLAND</h1>
                <div class="col-12">
<?php
include("db.php");

if(isset($_POST['submit'])){
    $user = mydestroy($_POST['username']);
    $email = mydestroy($_POST['email']);
    $phone = mydestroy($_POST['phone']);
    $pass1 = mydestroy($_POST['password']);
    $rpass = mydestroy($_POST['rpassword']);

    if($rpass==$pass1){
        $pass = password_hash($pass1,PASSWORD_DEFAULT);

        $select = mysqli_query($connect, "select * from users where username = '$user' ");
        $num = mysqli_num_rows($select);
        if($num>0){
            echo "username exist";
        }
        else{
            $sign = mysqli_query($connect, "insert into users (username, email, phone, password) 
            values('$user', '$email', '$phone', '$pass')") or die ('cant insert'.mysqli_error($connect));
            if($sign){echo 'Registration successful!';}
        }
    }
    if($rpass!=$pass1){
        echo 'password does not match';
    }
}

function mydestroy($dest){
    $dest = trim($dest);
    $dest = htmlentities($dest);
    $dest = htmlspecialchars($dest, ENT_QUOTES, "UTF-8");
    $dest = strip_tags($dest);
    $dest = stripslashes($dest);
    return $dest;
}
?>

                </div>
                 <div class="col-sm-12 mycreate">
                  <!--  <h3>Sign Up!</h3>
                    <hr>
                    <div>
                        <form action="" enctype="multipart/form-data" method="post">
                            <div class="form-group mt-4">
                                <label>Username</label>
                                <div class="user d-flex">
                                    <input type="text" placeholder="Enter Username" required>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label>Email</label>
                                <div class="myemail d-flex">
                                    <input type="email" placeholder="Enter Email Address" required>
                                </div>
                            </div>  
                            <div class="form-group mt-4">
                                <label>Phone Number</label>
                                <div class="phone d-flex">
                                    <input type="tel" placeholder="Enter Phone Number" required>
                                </div> 
                            </div>
                            <div class="form-group mt-4">
                                <label>Password</label>
                                <div class="pass d-flex">
                                    <input type="password" placeholder="Enter Password" id="mypass" required>
                                    <button type="button" onClick="show()"><i class="fa-sharp fa-solid fa-eye-slash fa-sm"></i></button>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label>Repeat Password</label>
                                <div class="pass d-flex">
                                    <input type="password" placeholder="Repeat Password" id="mypwd" required>
                                    <button type="button" onClick="show1()"><i class="fa-sharp fa-solid fa-eye-slash fa-sm"></i></button>
                                </div>  
                            </div>
                            <div class="form-group mybut">
                                <button type="submit" name="create-account" title="create account" class="btn">Create Account</button>
                            </div>
                            <div class="form-group">
                                <p>By signing up you accept our terms and conditions & privacy policy</p>
                            </div>
                            <div class="form-group">
                                <p>Already have an Account?</p>
                            </div> -->
                            <div class="mylogin">
                                <a href="#"><button type="button" name="login" title="login" data-bs-toggle="modal" data-bs-target="#myModal" class="btn"><strong>LOGIN</strong></button></a>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<!-- The Modal -->
 <?php
include("modal.php");
?>


</body>
<script src="../javascript/script.js"></script>
</html>