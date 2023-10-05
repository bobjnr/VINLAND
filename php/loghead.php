<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">VINLAND</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="mynavbar">
            <div class="box">
                <form class="d-flex">
                    <input class="me-1 mybut" type="text" placeholder="Search Vinland">
                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                </form>
            </div>
           
            <ul class="navbar-nav fa-ul">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" 
                    data-bs-toggle="dropdown"><i class="fa-solid fa-user-check"></i><?php echo $user; ?></a>
                    <ul id="profilelist" class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php"><i class="fa-regular fa-user"></i> My Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-light fa-truck-fast"></i> My Orders</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-regular fa-heart"></i> My Saved Items</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-regular fa-envelope"></i> Inbox</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li id="mysign"><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                    </ul>
                
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">Help</a>
                    <ul id="profilelist" class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Help Center</a></li>
                        <li><a class="dropdown-item" href="#">Track Orders</a></li>
                        <li><a class="dropdown-item" href="#">Order Cancellation</a></li>
                        <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
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