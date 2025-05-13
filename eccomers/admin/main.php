<?php
session_start();
include("../config/dbconnecr.php");
include('header.php');
?>
<?php
if (isset($_SESSION['admin'])) {
?>
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-primary mt-5"> Products_List</h3>

                <?php if (isset($_SESSION['delete'])) {
                ?>
                    <p class="alert alert-danger"><?= $_SESSION['delete']; ?></p>
                <?php
                    unset($_SESSION['delete']);
                } ?>

                <?php if (isset($_SESSION['update'])) {
                ?>
                    <p class="alert alert-danger"><?= $_SESSION['update']; ?></p>
                <?php
                    unset($_SESSION['update']);
                } ?>
                <p>

                    <a class=" btn btn-danger btn-sm" aria-current="page" href="../controller/logout.php">Logout</a>
                    <a href="addproduct.php" class="btn btn-primary float-end">AddProduct</a>

                </p>

                <div class="table-resposive">
                    <table class="table table-striped border mt-5">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Product_name</th>
                            <th scope="col">Product_price</th>
                            <th scope="col">Product_image</th>
                            <th scope="col">Product_qulity</th>
                            <th scope="col">Product_category</th>
                            <th scope="col">Action</th>
                        </tr>
                        <tbody>
                            <?php
                            $index = 1;
                            $sql = "SELECT * FROM products";
                            $res = mysqli_query($conn, $sql);
                            $numrow = mysqli_num_rows($res);
                            if ($numrow) {
                                while ($row = mysqli_fetch_array($res)) {
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $index++; ?></td>
                                        <td scope="row"><?php echo $row['product_name']; ?></td>
                                        <td scope="row"><?php echo $row['product_price']; ?></td>
                                        <td scope="row"><img src="../public/images/<?php echo $row['product_image']; ?>" width="50px" height="50px" alt=""></td>
                                        <td scope="row"><?php echo $row['product_qulity']; ?></td>
                                        <td scope="row"><?php echo $row['product_category']; ?></td>
                                        <td scope="row">
                                            <a href="editproduct.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                            <a href="../controller/deleteproduct.php?id=<?php echo $row['id']; ?>"
                                                class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?php

} else {
    header('location:../admin/index.php');
}
?>



<?php include('footer.php'); ?>