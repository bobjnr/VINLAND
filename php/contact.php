<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0170857075.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <title>Contact Us</title>
</head>
<body>

    <!-- Nav Bar -->
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">VINLAND</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
            <!-- <div class="box">
                <form class="d-flex">
                    <input class="me-1 mybutt" type="text" placeholder="Search Vinland">
                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </form>
            </div> -->
           
            <ul class="navbar-nav fa-ul">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-regular fa-user"></i> Account</a>
                    <ul class="dropdown-menu">
                    <a href="#"><button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="signinbut">SIGN IN</button></a>
                    <p>New Customer? <a href="create.php">Sign up here</a></p>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">My Account</a></li>
                    <li><a class="dropdown-item" href="#">Orders</a></li>
                    <li><a class="dropdown-item" href="#">Saved Items</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">Help</a>
                    <ul id="profilelist" class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Help Center</a></li>
                    <li><a class="dropdown-item" href="#">Track Orders</a></li>
                    <li><a class="dropdown-item" href="#">Order Cancellation</a></li>
                    <li><a class="dropdown-item" href="#">Contact Us</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#"><i class="fa fa-cart-shopping"></i> Cart</a>
                </li>   
            </ul>
          </div>
        </div>
      </nav>  
</header>
 
<div class="container-fluid myhead">
    <div class="container">
        <h2 data-aos="fade-right" data-aos-delay="200">Contact Us</h2>
    </div>   
</div>
<div class="container-fluid myp">
    <p data-aos="fade-right" data-aos-delay="200">Need to reach us? Fill in the quick mesage form below to get assistance from our support unit or call (+234)813 700 2452</p>
</div>

<div class="container-fluid contact">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-7 mt-3">
                <form action="#" enctype="multipart/form-data" method="post" class="myform">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Message:</label>
                            <textarea name="message" cols="50" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mybut">
                            <button style="margin-left: 300px; background-color: orange; color: black;" type="submit" name="submit" title="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<section id="footer">
    <div class="container-fluid" id="main-footer">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 footers">
                    <div>
                        <h5 style="color: orange;">Get to Know Us</h5>
                        <ul>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="about.php">About Vinland</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Privacy Notice</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 footers">
                    <div>
                        <h5 style="color: orange;">Need Help?</h5>
                        <ul>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Your Account</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Your Orders</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Help Center</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Returns and Replacememts</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Report a Product</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 footers">
                    <div>
                        <h5 style="color: orange;">Payment Methods</h5>
                        <ul >
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Visa</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Verve</a></li>
                            <li><i class="fa-solid fa-angles-right" style="color: orange;"></i><a href="#">Mastercard</a></li>
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
            <div class="col-12 text-white py-3">
                Copyright &copy; 2023 Vinland.com. All rights reserved
            </div>
        </div>
       </div>
    </div>
</section>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" language="javascript">
  AOS.init({
    duration:1200,
  });
</script>
</html>