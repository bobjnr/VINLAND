<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Product Submission form</title>
</head>
<body>
    <h1>Product Submission Form</h1>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="" enctype="multipart/form-data" method="post">
                        <div class="col-md-12 form-group">
                            <label>Product Name:</label>
                            <input type="text" name="product-name" required class="form-control">
                        </div>
                        <div class="col-md-12 form-group mt-4">
                            <label>Product Description:</label><br>
                            <textarea name="product_description" rows="4" cols="50" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 form-group mt-4">
                            <label>Product Price:</label>
                            <input type="number" name="product_price" class="form-control" required>
                        </div>
                        <div class="col-md-12 form-group mt-4">
                            <label>Product image:</label>
                            <input type="file" name="product_image" class="form-control" required>
                        </div>  
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>