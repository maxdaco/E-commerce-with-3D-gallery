<?php

require_once 'innerhead.php';
require_once '../model/dbselect_details.php';
echo 'welcome' . $_SESSION['customerID'];



?>
<section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row  align-items-center">
            <div class="col-md-6">
                <?php
                $res = productDetails();
                if ($res->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>


                        <img class="card-img-top mb-5 mb-md-0" src="<?php echo '.' . $row['picture']; ?>" alt="..." />


            </div>
            <div class="col-md-6">
                <div class="small mb-1"><?php echo 'Size: ' . $row['size'] ?></div>
                <h1 class="display-5 fw-bolder"><?php echo $row['productName'] ?></h1>
                <div class="">
                    <span><?php echo '£' . $row['price'] ?></span>
                </div>
                <p class="lead"><?php echo $row['myDescription'] ?></p>


                <div class="d-flex">

                    <a class="btn btn-outline-dark mt-auto" href="../model/dbinsert.php?productID=<?php echo $row['productID'] ?>">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
<?php
                    }
                }

?>
</div>
</section>

<?php

require_once 'innerfooter.php';
?>