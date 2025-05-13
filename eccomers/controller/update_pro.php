    <?php
    session_start();
    include('../config/dbconnecr.php');
    $id = $_GET['id'];
    if (isset($_POST['updateproduct'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_qulity = $_POST['product_qulity'];
        $product_image = $_FILES['product_image']['name'];
        $category = $_POST['category'];

        $old_product_image = $_POST['old_product_image'];
        if ($product_image == "") {
            $product_image = $old_product_image;
        }
        unlink('../public/images/' . $old_product_image);
        $sqli = "UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price',`product_image`='$product_image',`product_qulity`='$product_qulity',`product_category`='$category' WHERE id=$id";
        if (mysqli_query($conn, $sqli)) {
            move_uploaded_file($_FILES['product_image']['tmp_name'], '../public/images/' . $product_image);
            $_SESSION['update'] = "Product updated successfully!";
            header('location:../admin/main.php');
        } else {
            echo "Error: " . $sqli . "<br>" . mysqli_error($conn);
        }
    }
    ?>
