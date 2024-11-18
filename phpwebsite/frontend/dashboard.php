<?php
session_start();
if (isset($_SESSION['name'])) {

?>

<?php include('header_1.php');?>
<?php include('footer_1.php');?>


<?php
} else {
    header('Location:singin.php');
}
?>