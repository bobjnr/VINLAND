<div class="container-fluid">
        <div class="container py-4">
            <div class="row">
                <h1>VINLAND</h1>
                <div class="col-sm-12 mycreate">
                    <h3>Sign Up!</h3>
                    <hr>
                    <div>
                        <form action="register.php" enctype="multipart/form-data" method="post">
                            <div class="form-group mt-4">
                                <label>Username</label>
                                <div class="user d-flex">
                                    <input name="username" type="text" placeholder="Enter Username" required>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label>Email</label>
                                <div class="myemail d-flex">
                                    <input name="email" type="email" placeholder="Enter Email Address" required>
                                </div>
                            </div>  
                            <div class="form-group mt-4">
                                <label>Phone Number</label>
                                <div class="phone d-flex">
                                    <input name="phone" type="tel" placeholder="Enter Phone Number" required>
                                </div> 
                            </div>
                            <div class="form-group mt-4">
                                <label>Password</label>
                                <div class="pass d-flex">
                                    <input name="password" type="password" placeholder="Enter Password" id="mypass" required>
                                    <button type="button" onClick="show()"><i class="fa-sharp fa-solid fa-eye-slash fa-sm"></i></button>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label>Repeat Password</label>
                                <div class="pass d-flex">
                                    <input name="rpassword" type="password" placeholder="Repeat Password" id="mypwd" required>
                                    <button type="button" onClick="show1()"><i class="fa-sharp fa-solid fa-eye-slash fa-sm"></i></button>
                                </div>  
                            </div>
                            <div class="form-group mybut">
                                <button type="submit" name="submit" title="create account" class="btn">Create Account</button>
                            </div>
                            <div class="form-group">
                                <p>By signing up you accept our terms and conditions & privacy policy</p>
                            </div>
                            <div class="form-group">
                                <p>Already have an Account?</p>
                            </div> 
                            <div class="mylogin">
                                <a href="#"><button type="button" name="login" title="login" data-bs-toggle="modal" data-bs-target="#myModal" class="btn"><strong>LOGIN</strong></button></a>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
