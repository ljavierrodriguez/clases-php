<?php require_once('./listar_products.php') ?>
<?php include './header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between py-2">
            <h4>Products</h4>
            <form action="./products.php">
                <div class="input-group">
                    <input type="search" class="form-control" name="search" placeholder="Search...." value="<?php echo @$search?>">
                    <button class="btn btn-primary btn-sm"><i class="fa-solid fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $row) : ?>
                            <tr>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td>$<?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td>
                                    <a href="./edit.php?id=<?php echo $row[0]; ?>" class="btn btn-warning">
                                    <i class="fa-solid fa-edit"></i>
                                    <!-- Edit -->
                                    </a>
                                </td>
                                <td>
                                    <a href="./delete.php?id=<?php echo $row[0]; ?>" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                    <!-- Delete -->
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="./create.php" class="btn btn-success btn-sm my-2">Add Product</a>
            </div>
        </div>
    </div>
</div>


<?php include './footer.php' ?>