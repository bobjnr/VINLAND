<!DOCTYPE html>
<?php
if(isset($_COOKIE["oka"])) $user = $_COOKIE["oka"]; else header("location:signin.php");
include("db.php");

if(isset($_COOKIE["oka"])){
  $cookie = $_COOKIE["oka"];
  $sql = mysqli_query($connect, "select * from users where email = '$cookie' ") 
  or die("could Not Select profile".mysqli_error());

  while ($row = mysqli_fetch_assoc($sql)){
    $id = $row['id'];
    $user = $row['username'];
    $email = $row['email'];
    $phone = $row['phone'];
  }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0170857075.js" crossorigin="anonymous"></script>
    <title>Vinland</title>
</head>
<body>



    <!-- Nav Bar -->
<?php
include("loghead.php");
?>


    <!-- Categories -->
<?php
include("categories.php");
?>
      
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




<!-- footer -->
<section id="footer">
    <div class="container-fluid" id="main-footer" data-aos="fade-down" data-aos-delay="200">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 footers" id="foot">
                    <div>
                        <h5 style="color: orange;">Get to Know Us</h5>
                        <ul>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="about.php"> About Vinland</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Privacy Notice</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 footers">
                    <div>
                        <h5 style="color: orange;">Need Help?</h5>
                        <ul>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="profile.php"> Your Account</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Your Orders</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Help Center</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Returns and Replacememts</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Report a Product</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 footers">
                    <div>
                        <h5 style="color: orange;">Payment Methods</h5>
                        <ul >
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Visa</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Verve</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#"> Mastercard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 footers">
                    <div>
                        <h5 style="color: orange;">NEW TO VINLAND?</h5>
                        Subscribe to get updates on our latest offers!<br>
                        <form action="" enctype="multipart/form-data" method="post">
                            <input type="text" placeholder="Enter your email">
                            <button type="button" title="submit" name="submit">Submit</button>
                        </form></p>
                        <div class="col-12 icons">
                            <h5 style="color: orange;">Connect with Us</h5>
                            Follow us on our social media networks to receive news on new products.<br></p>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="minor-footer">
       <div class="container">
        <div class="row">
            <div class="col-12 text-white py-3" style="text-align: center;">
                Copyright &copy; 2023 Vinland.com. All rights reserved
            </div>
        </div>
       </div>
    </div>
  </section>


  <!-- The Login Modal -->
<?php
include("modal.php");
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