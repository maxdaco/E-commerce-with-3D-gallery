<?php
require_once '../model/dbconn.php';
require_once 'innerhead.php';
?>

<div class="container">
  <div class="py-5 text-center">
    
    <h2>Checkout</h2>
    <p class="lead">Plese fill in the following form with the details to whom and where you would like your art to be delivered.</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        </h4>
        <?php
          $id = $_SESSION['customerID'];

     
          $conn=dbConnection();
   
          $sql = "SELECT products.productID, products.productName, products.myDescription, 
          products.picture, products.size, products.price, cart.quantity
           FROM products JOIN cart ON products.productID= cart.productID WHERE cart.customerID= '$id'";        
          $res=mysqli_query($conn, $sql);
          if(mysqli_num_rows($res)>0){
              $grantotal=0;
              while ($row = mysqli_fetch_assoc($res)){
               
                  ?>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0"><?php echo $row['productName']; ?></h6>
            <small class="text-muted"><?php echo $row['myDescription']; ?></small>
          </div>
          <?php
                $total= $row['quantity'] * $row['price'];
                
                $grantotal +=$total;
                ?>
          <span class="text-muted"><?php echo '£' . $total ?></span>
        </li>
        <?php
              }
            }

       
              ?>
       </ul>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong><?php echo '£' . $grantotal ?></strong>
        </li>
      </ul>
      

      
            <a href="cart2.php" class="btn btn-outline-dark">Edit Cart</a>
         
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>



        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control needs-validation" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">County</label>
            <input type="text" class="form-control" required>
            <div class="invalid-feedback">
              Please select a valid County.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">City</label>
            <input type="text" class="form-control" required>
            <div class="invalid-feedback">
              Please provide a valid City.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-5">Payment</h4>
      
  

        

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <a href="order_placed.php" class="btn btn-outline-dark btn-lg btn-block mb-5">Place order</a>
      </form>
    </div>
  </div>
</div>

<?php 

require_once 'innerfooter.php';
?>


<script src="../js/checkout_validation.js"></script>