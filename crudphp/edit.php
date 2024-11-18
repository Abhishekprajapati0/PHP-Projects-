<?php include('head.php');?>
<?php
include('connect.php');
$id = $_GET['id'];
$query = "SELECT * FROM users  WHERE  id = '$id'";
$data = mysqli_query($conn , $query);
$row = mysqli_fetch_array($data);

?>

<section class='container bg'>
    <div class='row stime'> 
<div class="col-sm-12 col-md-6 col-lg-6 col-12">
    <center>
        <img src="https://t3.ftcdn.net/jpg/04/45/30/00/360_F_445300032_8BOeLM2RyS8hFgjPgZ8OMPXUelRCySun.jpg" alt="" class=' mt-4 img-thumbnail' width='500px'>
    </center>

</div>
<div class="col-sm-12 col-md-6 col-lg-6 col-12">
    <h3 class='text-center mt-3 mb-3 p-1 text-primary '>update Form</h3>
<form action = 'update.php?id=<?php echo $row['id']?>' method='post'>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name='name' class="form-control" id="exampleInputEmail1" value='<?php echo $row['name']?>' aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name='email' class="form-control" id="exampleInputEmail1" value='<?php echo $row['email']?>' aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name='password' class="form-control" id="exampleInputPassword1">
  </div> -->
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" name='update' class='btn btn-primary' value='Update'>
</form>
</div>
    </div>
</section>
<?php include('foot.php');?>