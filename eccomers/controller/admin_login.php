<?php
session_start();
include('../config/dbconnecr.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($res);
    if ($numrow == 1) {
        $_SESSION['admin'] = $email;
        header('location:../admin/main.php');
    } else {
        $_SESSION['error'] = "Invalid email or password!";
        header('location:../admin/index.php');
    }
}
