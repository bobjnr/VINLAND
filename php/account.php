
<div class="container-fluid mt-3 py-5">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-3 myprofile">
                    <div>
                        <ul>
                            <li><a href="#">My Profile</a></li>
                            <li data-bs-toggle="modal" data-bs-target="#myModal"><a href="id=<?php echo $id[$ice]?>">Edit Profile</a></li>
                            <li><a href="#">My orders</a></li>
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Saved Items</a></li>
                            <li><a href="#">Account Management</a></li>
                            <li><a href="#">Delete Account</a></li>
                            <hr>
                            <li><a href="logout.php"><strong>LOGOUT</strong></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 myaccount">
                    <h4>Account Overview</h4>
                    <hr>
                    <form action="" enctype="multipart/form-data" method="get">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>First Name</label>
                                <input disabled type="text" class="form-control" value='<?php if(isset($fname)) echo $fname; ?>'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Last Name</label>
                                <input disabled type="text" class="form-control" value='<?php if(isset($lname)) echo $lname; ?>'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email Address</label>
                                <input disabled type="email" class="form-control" value='<?php if(isset($email)) echo $email; ?>'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Phone Number</label>
                                <input disabled type="tel" class="form-control" value='<?php if(isset($phone)) echo $phone; ?>'>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Shipping Address</label>
                                <input disabled type="text" class="form-control" value='<?php if(isset($address)) echo $address; ?>'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>