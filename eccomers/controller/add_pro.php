<?php
include('../config/dbconnecr.php');
if (isset($_POST['addproduct'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_qulity = $_POST['product_qulity'];
    $product_image = $_FILES['product_image']['name'];
    $category = $_POST['category'];

    $sql = "INSERT INTO `products`( `product_name`, `product_price`, `product_image`, `product_qulity`, `product_category`) 
VALUES ('$product_name','$product_price','$product_image','$product_qulity','$category')";
    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($_FILES['product_image']['tmp_name'], '../public/images/' . $product_image);
        echo "<script>alert('Product added successfully!'); window.location.href='../admin/main.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
