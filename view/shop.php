<?php

require_once '../model/dbselect.php';
require_once 'innerhead.php';

?>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <?php
            $res = displayData();
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="product_page.php?productID=<?php echo $row['productID']; ?>">
                                <img class="card-img-top" src="<?php echo '.' . $row['picture']; ?>" alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $row['productName'] ?></h5>
                                    <!-- Product price-->
                                    <span><?php echo '£' . $row['price'] ?></span>
                                </div>
                            </div>

                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="../model/dbinsert.php?productID=<?php echo $row['productID'] ?>">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }


            ?>
        </div>

    </div>

</section>

<?php

require_once 'innerfooter.php';
?>