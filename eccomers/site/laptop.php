<?php
include('header.php');
include('../config/dbconnecr.php');
?>
<section class="container">
    <div class="row">
        <div class="col-6 col-md-6 col-lg-6 m-auto">
            <div class="main text-center">
                <ul class="list m-auto">

                    <li><a href="index.php" class="ms-2">Home</a></li>
                    <li><a href="mobile.php">Mobile</a></li>
                    <li><a href="tv.php">Tv</a></li>
                    <li><a href="laptop.php">Laptop</a></li>
                    <li><a href="../admin/main.php" class="me-2">Admin</a></li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <?php
        $sqli = "SELECT * FROM `products`";
        $result = mysqli_query($conn, $sqli);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $mobile = $row['product_category'];
                if ($mobile == "leptop") {
        ?>
                    <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                        <div class="card m-auto  mt-5 mb-3" style="width: 20rem;">
                            <img src="../public/images/<?= $row['product_image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['product_name'] ?></h5>
                                <p class="card-text"><?= $row['product_price'] ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                    </div>
        <?php
                }
            }
        }

        ?>
    </div>
</section>
<?php include('footer.php'); ?>