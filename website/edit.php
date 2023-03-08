<?php include './header.php' ?>
<?php include './buscar_product.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Edit Product</h4>
        </div>
        <div class="col-md-12">
            <form action="./edit_product.php" method="post">

                <input type="hidden" name="id" value="<?php echo $row[0] ?>">

                <div class="form-group mb-3">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input class="form-control" type="text" name="name" id="product_name" placeholder="Insert Product Name" value="<?php echo $row[1]; ?>">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="product_price">Product Price</label>
                    <input class="form-control" type="text" name="price" id="product_price" placeholder="Insert Product Price" value="<?php echo $row[2]; ?>">
                </div>

                <button class="btn btn-primary btn-sm w-100">Update Product</button>

            </form>
        </div>
        <div class="col-md-12">
        <a href="./products.php" class="btn btn-warning btn-sm my-2">Regresar</a>
        </div>
    </div>
</div>


<?php include './footer.php' ?>