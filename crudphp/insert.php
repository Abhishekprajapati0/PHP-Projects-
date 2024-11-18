<?php
include('connect.php');
?>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = md5($password);

    $query = "INSERT INTO users(name,email,password) VALUE('$name','$email','$hash')";

    $result = mysqli_query($conn,$query);
    if($result){
     header("Location: display.php");
    
    }else{
        echo 'somthing went wrong';
    }
}

?>