<?php
session_start();
include('header.php'); ?>
<section class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12 m-auto">
            <div class="form mt-5 " style="width: 400px; height:auto; padding: 20px; 
            margin: auto; border: 2px solid #000 ;">
                <h3 class="text-center text-primary mb-3 mt-3">Admin_Login</h3>
                <?php
                if (isset($_SESSION['error'])) {
                ?>
                    <p class="alert alert-danger"><?= $_SESSION['error']; ?></p>
                <?php
                    unset($_SESSION['error']);
                }

                ?>
                <form action="../controller/admin_login.php" method="post">
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="email" required class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="password" name="password" required class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <input type="submit" value="Login" name="login" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>