<?php
session_start();
require_once '../model/dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- keywords for SEO -->
     <meta name="keywords" content=" art, sparkle, passion, flowers, nature, painting,
      paintings, acrylic, crystals, sparkling, light, passion,
      contemporary art, pop art, liverpool, local artist " >
    
    <!-- description -->
    <meta name="description" content="An artist with a passion for sparkle, creating original, 
    one of a kind statement pieces to enhance any space"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparkle Passion</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">



</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../view/main.php">
    <img src="../images/SP_final_logo.png" alt="" width="60" height="60" class="d-inline-block ">
Sparkle Passion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="main.php">Home</a>
        <a class="nav-link" href="about.php">About me</a>
        <a class="nav-link" href="contact.php">Contact</a>
        <a class="nav-link" href="shop.php">Shop</a>
        <a class="nav-link" href="../virtual_gallery.html">VR Gallery</a>
        <a class="nav-link" href="signout.php">Sign out</a>
      </div>
      <form class="d-flex">
                        <a href="../view/cart2.php" class="btn btn-outline-dark">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">


  <?php
   $conn=dbConnection();
     //will use this id as a customer id the sql query
     $id=$_SESSION['customerID'];

     //we use the SUM() function to display how many item in the cart
     // AS total is a temporary table column
    $sql="SELECT SUM(quantity) AS total FROM products JOIN cart
    ON products.productID=cart.productID AND cart.customerID='$id'";

    $res=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($res)>0){
        $rows=mysqli_fetch_assoc($res);

        if($rows['total']!=NULL){
            echo  $rows['total'];

        }
        
        else{
            echo "(" . "0" . ")";
        }
    }

    


     ?>
                            </span>
                        </a>
                    </form>
</nav>

    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>