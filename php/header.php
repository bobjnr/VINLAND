<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container head">
          <a class="navbar-brand" href="#">VINLAND</a>
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
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-regular fa-user"></i> Account</a>
                    <ul class="dropdown-menu">
                    <a href="#"><button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="signinbut">SIGN IN</button></a>
                    <p>New Customer? <a href="create.php">Sign up here</a></p>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal" href="#">My Account</a></li>
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