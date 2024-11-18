<?php
include('connect.php');
$id = $_GET['id'];

if (isset($_POST['update'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];

  
    $query = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Data update done');</script>";
        header("Location:display.php");
    } else {
        echo "<script>alert('Data update failed: " . mysqli_error($conn) . "');</script>";
    }
}
?>
