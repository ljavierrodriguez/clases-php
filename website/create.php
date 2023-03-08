<?php include './header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Add Product</h4>
        </div>
        <div class="col-md-12">
            <form action="./crear_product.php" method="post">

                <div class="form-group mb-3">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input class="form-control" type="text" name="name" id="product_name" placeholder="Insert Product Name">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="product_price">Product Price</label>
                    <input class="form-control" type="text" name="price" id="product_price" placeholder="Insert Product Price">
                </div>

                <button class="btn btn-primary btn-sm w-100">Save Product</button>

            </form>
        </div>
        <div class="col-md-12">
        <a href="./products.php" class="btn btn-warning btn-sm my-2">Regresar</a>
        </div>
    </div>
</div>


<?php include './footer.php' ?>