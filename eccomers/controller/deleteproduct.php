<?php
session_start();
$id = $_GET['id'];
include("../config/dbconnecr.php");
$sql = "DELETE FROM products WHERE id=$id";
mysqli_query($conn, $sql);
$_SESSION['delete'] = "Product deleted successfully!";
header('location:../admin/main.php');
