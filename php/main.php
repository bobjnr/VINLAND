<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>

<!-- <!DOCTYPE html>
<!-- <?php

// session_start();

// include("db.php");

// if(isset($_POST['addtocart'])){

//     if(isset($_SESSION['cart'])){
//         $session_array_id = array_column($_SESSION['cart'], "id");

//         if(!in_array($_GET['id'], $session_array_id)){
//             $session_array = array(
//                 'id' => $_GET['id'],
//                 "name" => $_POST['name'],
//                 "price" => $_POST['price']
//             );
    
//             $_SESSION['cart'][] = $session_array;
//         }
//     }else{
//         $session_array = array(
//             'id' => $_GET['id'],
//             "name" => $_POST['name'],
//             "price" => $_POST['price']
//         );

//         $_SESSION['cart'][] = $session_array;
//     }
// }  

?> -->


<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cart</title>
</head>
<body>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Shopping Cart Data</h2>
                    <div class="col-md-12">
                        <div class="row">

                    


                     <!-- <?php -->

                    // $query = "SELECT * FROM cart";
                    // $result = mysqli_query($connect, $query);

                    // while ($row = mysqli_fetch_array($result)) {?> -->
                    <!-- //     <div class="col-md-4">
                    //         <form method="post" action="cart.php?id=<?=$row['id'] ?>">
                    //             <img src = "images/<?= $row['image'] ?>" style='height: 150px;'>
                    //             <h5 class="text-center"><?= $row['name']; ?></h5>
                    //             <h5 class="text-center">&#8358;<?= $row['price']; ?></h5>
                    //             <input type="hidden" name="name" value="<?= $row['name'] ?>">
                    //             <input type="hidden" name="price" value="<?= $row['price'] ?>">
                    //             <input type="submit" name="addtocart" class="btn btn-warning my-2" value="Add to Cart">
                    //         </form>
                    //     </div> -->

                    <!-- <?php  -->


                     

                    // ?>
                        </div>
                    </div> -->
                <!-- </div>
                <div class="col-md-6">
                    <h2 class="text-center">Items Selected</h2> -->
                    <!-- <?php

                        // $total = 0;
                    
                        // $output = "";

                        // $output .= "
                        //     <table class='table table-bordered table-striped'>
                        //         <tr>
                        //             <th>ID</th>
                        //             <th>Item Name</th>
                        //             <th>Item Price</th>
                        //             <th>Total Price</th>
                        //             <th>Action</th>
                        //         </tr>
                        // ";

                        // if(!empty($_SESSION['cart'])){
                        //     foreach ($_SESSION['cart'] as $key => $value){
                        //         $output .= "
                        //             <tr>
                        //                 <td>".$value['id']."</td>
                        //                 <td>".$value['name']."</td>
                        //                 <td>&#8358;".$value['price']."</td>
                        //                 <td>&#8358;".$value['price']."</td>
                        //                 <td>
                        //                     <a href='cart.php?action=remove&id=".$value['id']."'>
                        //                         <button class='btn btn-danger btn-block'>Remove</button>
                        //                     </a>
                        //                 </td>
                        //         "; -->

                        //          $total += $value['price'];
                        //     }

                        //     $output .= "
                        //         <tr>
                        //             <td colspan='3'></td>
                        //             <td></b>Total Price</b></td>
                        //             <td>&#8358;".$total."</td>
                        //             <td>
                        //                 <a href='cart.php?action=clearall'>
                        //                     <button class='btn btn-warning'>Clear</button>
                        //                 </a>
                        //             </td>
                        //         </tr>
                        //     ";
                        // }

                        // echo $output;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php

    // if(isset($_GET['action'])) {

    //     if($_GET['action'] == "clearall") {
    //         unset($_SESSION['cart']);
    //     }

        
    //     if($_GET['action'] == "remove") {
            
    //         foreach($_SESSION['cart'] as $key => $value) {

    //             if($value['id'] == $_GET['id']) {
    //                 unset($_SESSION['cart'][$key]);
    //             }
    //         }
    //     }
    // }

    ?> -->
<!-- </body>
</html> --> 

<!-- <?php -->

// session_start();

// include("db.php");

// if(isset($_POST['addtocart'])){

//     if(isset($_SESSION['cart'])){
//         $session_array_id = array_column($_SESSION['cart'], "id");

//         if(!in_array($_GET['id'], $session_array_id)){
//             $session_array = array(
//                 'id' => $_GET['id'],
//                 "name" => $_POST['name'],
//                 "price" => $_POST['price']
//             );
    
//             $_SESSION['cart'][] = $session_array;
//         }
//     }else{
//         $session_array = array(
//             'id' => $_GET['id'],
//             "name" => $_POST['name'],
//             "price" => $_POST['price']
//         );

//         $_SESSION['cart'][] = $session_array;
//     }
// }  

// $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//     $pname = $_POST['name'];
//     $price = $_POST['price'];

//     $query = "INSERT INTO `shopping_cart`(`image`,`name`,`price`) VALUES ('$file','$pname','$price')";
//     $query_run = mysqli_query($connect,$query);

//     if($query_run)
//     {
//         echo '<script type="text/javascript"> alert("Image Profile Uploaded") </script>';
//     }
//     else
//     {
//         echo '<script type="text/javascript"> alert("Image Profile Not Uploaded") </script>';
//     }

// ?>