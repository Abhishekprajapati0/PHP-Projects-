<?php include('header.php');?>
<section class='container'>
    <div class='row'>
       <div class="col-12 mt-5">
       <div class='main shadow-lg '>
    <h3 class='text-center mt-2 mb-2 p-2'>SingUp</h3>
    <form action='#' method='post'>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"name='password' class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
</form>
    </div>

</div>
    </div>
</section>
<?php include('connection.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "insert into users(name,email,password) value('$name','$email','$password')";
    $result = mysqli_query($conn, $query);
    if($result){
        header('location:singup.php');
    }else{
        echo 'somthing went wrong';
    }
}

?>
<?php include ('footer.php');?>