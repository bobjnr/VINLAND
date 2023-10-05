<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_COOKIE["oka"])) $user = $_COOKIE["oka"]; else header("location:vinland.php");
include("db.php");
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0170857075.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/profile.css" type="text/css">
    <title>profile</title>
</head>
<body>
    <!-- Header -->
<?php
include("loghead.php");
?>
 
 <!-- The Profile Modal -->
<div class="container">
    <div class="row mt-6">
        <div class="col-12">     
            <?php
            include("pmodal.php");
            ?>
        </div>
    </div>
</div>

    <!-- Account -->
<?php
include("account.php");
?>


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