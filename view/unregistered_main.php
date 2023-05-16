<?php

require_once 'model/dbselect.php';


?>

<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.unregistered.main);
  }
</script>


<div class="container">
  <h1 class="display-4  mx-2 my-5 " style="text-align: center;"> My Gallery</h1>

  <div class="row g-2 g-lg-3 justify-content-center">

    <?php
    $res = displayData();
    if (mysqli_num_rows($res) > 0) {
      while ($row = mysqli_fetch_assoc($res)) {
    ?>
        <div class="col-md-4">
          <a href="view/unregistered_productpage.php?productID=<?php echo $row['productID']; ?>">
            <img class="card-img-top" src="<?php echo $row['picture']; ?>" alt="">
          </a>
        </div>

    <?php
      }
    }
    ?>


  </div>
  <div class="d-flex justify-content-center">


    <a href="view/register.php" class="btn btn-outline-dark mx-2 my-5" type="button" style="width: 200px" ;>Shop</a>



    <a href="index.html" class="btn btn-outline-dark mx-2 my-5" type="button" style="width: 200px" ;>Virtual Expo</a>



  </div>
</div>
</div>