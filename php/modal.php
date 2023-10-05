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
                        <input type="text" name="email" class="form-control" placeholder=" Email Address OR Phone Number">
                    </div>
                    <div class="form-group mt-4">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Password">
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