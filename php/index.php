<!DOCTYPE html>
<html lang="en">
<?php
include("db.php");

if(isset($_POST['submit'])){
    $user = $_POST['email'];
    $pass = $_POST['password'];

      $select = mysqli_query($connect, "SELECT * from users where binary email = '$user' ") or 
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
            echo "Sorry, wrong password!";
        }
      }else{
        echo "Wrong email!";
    }
  
  
}
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0170857075.js" crossorigin="anonymous"></script>
    <title>Vinland</title>
</head>
<body>

<div class="container-fluid scroll">
<!-- Nav Bar -->
  <?php
  include("header.php");
  ?>

<!-- Categories -->
  <?php
  include("categories.php");
  ?>
</div>


<!-- Welcome Message -->
<div class="container mypage" data-aos="zoom-in" data-aos-delay="200">
    <header class="text-center">
        <h1 style="color: black;">WELCOME!</h1>
    </header>
    <section class="text-center">
        <p>Enjoy a seamless shopping experience with secure transactions and exceptional customer service. 
            Start your journey with us today and let the excitement of shopping with Vinland begin!</p>
        <button class="btn-x">EXPLORE</button> 
    </section>
</div>
</p>


      
<!-- New Arrivals -->
<?php
include("newarrivals.php");
?>    


<!-- Carousel -->
<?php
include("carousel.php");
?>


<!-- Top Selling Items -->
<?php
include("topselling.php");
?>


<!-- Fashion Deals -->
<?php
include("fashion.php");
?>


<!-- Exciting Deals -->
<?php
include("excitingdeals.php");
?>


<!-- Phone Deals -->
<?php
include("phonedeals.php");
?>


<!-- Limited Stock Deals -->
<?php
include("limited.php");
?>

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign In</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
                <form action="index.php" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>Email Address or Phone Number</label>
                        <input type="text" name="email" class="form-control" placeholder=" Email Address OR Phone Number" required>
                    </div>
                    <div class="form-group mt-4">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group mt-3 modalbut">
                        <button type="submit" name="submit" title="login" class="btn">LOGIN</button>
                    </div>
                   
                </form>

                <div class="form-group mt-4">
                        <a href="create.php"><p>Don't have an account yet? Sign Up</p></a>
                    </div>
            </div>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>


<!-- footer -->
<?php
include("footer.php");
?>



</body>
<script src="../javascript/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" language="javascript">
  AOS.init({
    duration:1200,
  });
</script>
</html>