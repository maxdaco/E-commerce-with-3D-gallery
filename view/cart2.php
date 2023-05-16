<?php

require_once '../model/dbconn.php';
require_once '../view/innerhead.php';





?>

<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <p><span class="h2">Shopping Cart </span></p>
        <?php
        $id = $_SESSION['customerID'];


        $conn = dbConnection();

        $sql = "SELECT products.productID, products.productName, products.myDescription, 
          products.picture, products.size, products.price, cart.quantity
           FROM products JOIN cart ON products.productID= cart.productID WHERE cart.customerID= '$id'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
          $grantotal = 0;
          while ($row = mysqli_fetch_assoc($res)) {

        ?>
            <div class="card mb-4">
              <div class="card-body p-4">

                <div class="row align-items-center">
                  <div class="col-md-2">
                    <img src="<?php echo '.' . $row['picture']; ?>" class="img-fluid" alt="Generic placeholder image">
                  </div>
                  <div class="col-md-2 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Name</p>
                      <p class="lead fw-normal mb-0"><?php echo $row['productName']; ?></p>
                    </div>
                  </div>
                  <div class="col-md-2 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Size</p>
                      <p class="lead fw-normal mb-0"><?php echo $row['size']; ?></p>
                    </div>
                  </div>
                  <div class="col-md-1 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Quantity</p>
                      <p class="lead fw-normal mb-0"><?php echo $row['quantity']; ?></p>
                    </div>
                  </div>
                  <div class="col-md-2 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Price</p>
                      <p class="lead fw-normal mb-0"><?php echo '£' . $row['price']; ?></p>
                    </div>
                  </div>
                  <?php
                  $total = $row['quantity'] * $row['price'];

                  $grantotal += $total;
                  ?>
                  <div class="col-md-2 d-flex justify-content-center">
                    <div>
                      <p class="small text-muted mb-4 pb-2">Total</p>
                      <p class="lead fw-normal mb-0"><?php echo '£' . $total; ?></p>
                    </div>


                  </div>
                  <div class="col-md-1 d-flex justify-content-center">

                    <div>

                      <a href="../model/dbdelete.php?productID=<?php echo $row['productID']; ?>"><img src="../images/icons8-bin-48.png" class="mt-2" alt=""></a>

                    </div>
                  </div>


                </div>
              </div>
            </div>
        <?php
          }
        } else {

          $grantotal = "0";
          header("Location:empty_cart.php");
        }
        ?>


        <div class="card mb-5">
          <div class="card-body p-4">

            <div class="float-end">
              <p class="mb-0 me-5 d-flex align-items-center">
                <span class="small text-muted me-2">Order total:</span> <span class="lead fw-normal"><?php echo '£' . $grantotal ?></span>

              </p>
            </div>




          </div>
        </div>

        <div class="d-flex justify-content-end">
          <a href="shop.php"><button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button></a>
          <a href="checkout.php"><button type="button" class="btn btn-dark btn-lg">Checkout</button></a>
        </div>

      </div>
    </div>
  </div>
</section>

<?php

require_once 'innerfooter.php';
?>