<?php
include('connection.php');
include('header.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =md5( $_POST['password']);

    $query = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
    $data = mysqli_query($conn , $query);
    $result = mysqli_fetch_array($data);
    $count = mysqli_num_rows($data);

    if($count === 1){
      $username = $result['name'];
      $images = $result['images'];
      session_start();
      $_SESSION['name'] = $username;
      $_SESSION['images'] = $images;
        header('Location:dashboard.php');
        
    }else{
      echo '<script>alert("Invailid : Email or Password")</script>';
    }
   
}

?>
<section class='container'>
    <div class='row'>
       <div class="col-12 mt-5">
       <div class='main shadow-lg'>
    <h3 class='text-center mt-2 mb-2 p-2'>SingIn</h3>
    <form action="" method='post'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name='email' class="form-control" require id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name='password' require class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>Login</button>
</form>
    </div>

</div>
    </div>
</section>

<?php include ('footer.php');?>