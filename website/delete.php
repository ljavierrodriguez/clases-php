<?php include './header.php' ?>
<?php include './buscar_product.php' ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>Delete Product</h4>
        </div>
        <div class="col-md-12">
            <p>Realmenete quiere eliminar este producto?</p>
        </div>
        <div class="col-md-12">
            <form action="./delete_product.php" method="post">

                <input type="hidden" name="id" value="<?php echo $row[0] ?>">

                <div class="form-group mb-3">
                    <label class="form-label" for="product_name">Product Name:</label>
                    <?php echo $row[1]; ?>
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="product_price">Product Price:</label>
                    <?php echo $row[2]; ?>
                </div>

                <button class="btn btn-danger btn-sm w-100">Delete Product</button>

            </form>
        </div>
        <div class="col-md-12">
        <a href="./products.php" class="btn btn-warning btn-sm my-2">Regresar</a>
        </div>
    </div>
</div>


<?php include './footer.php' ?>