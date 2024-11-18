<?php include('connect.php');

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id = '".$id."'";
$result = mysqli_query($conn,$query);
if($result){
    ?>
    <script>
        alert('you want to delete this data');
    </script>
    <?php
    header('Location:display.php');
}else{
    echo 'somthing went wrong';
}
?>