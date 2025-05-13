<?php include('header.php'); ?>
<section class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12 m-auto">
            <div class="from">
                <h3 class="text-center text-primary mb-3 mt-3">AddProducts</h3>
                <form action="../controller/add_pro.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="product_name" required class="form-control" placeholder="Product_name">
                        </div>
                        <div class="col">
                            <input type="text" name="product_price" required class="form-control" placeholder="Product_price">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="product_qulity" required class="form-control" placeholder="Product_qulity">
                        </div>
                        <div class="col">
                            <input type="file" name="product_image" required class="form-control" placeholder="Product_image">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="category">
                                <option value="home">Home</option>
                                <option value="mobile">Mobile</option>
                                <option value="leptop">Leptop</option>
                                <option value="tv">Tv</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="AddProduct" name="addproduct" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php"); ?>