<?php require_once('./listar_products.php') ?> <!-- Traemos toda la informacion de los productos existentes o filtrados por el buscador -->
<?php include './header.php' ?>

<!-- Contenido Pagina Productos -->
<div class="container">
    <div class="row">
        <!-- Titulo Pagina y Buscador -->
        <div class="col-md-12 d-flex justify-content-between py-2">
            <!-- Titulo Pagina-->
            <h4>Products</h4>
            <!-- Buscador -->
            <form action="./products.php">
                <div class="input-group">
                    <input type="search" class="form-control" name="search" placeholder="Search...." value="<?php echo @$search ?>">
                    <button class="btn btn-primary btn-sm"><i class="fa-solid fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <!-- Tabla de Productos -->
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
                        <!-- Listado de Productos -->
                        <!-- Variable totalizadora -->
                        <?php $total = 0; ?>
                        <!-- $rows es el resultado de la consulta SQL -->
                        <?php foreach ($products as $product) : ?>
                            <?php $total += $product[2]; ?>
                            <tr>
                                <td><?php echo $product[0]; ?></td><!-- Id -->
                                <td><?php echo $product[1]; ?></td><!-- Name -->
                                <td>$<?php echo $product[2]; ?></td><!-- Price -->
                                <td><?php echo $product[3]; ?></td><!-- Created At -->
                                <td><?php echo $product[4]; ?></td><!-- Updated At -->
                                <td>
                                    <a href="./edit.php?id=<?php echo $product[0]; ?>" class="btn btn-warning">
                                        <i class="fa-solid fa-edit"></i>
                                        <!-- Edit -->
                                    </a>
                                </td>
                                <td>
                                    <a href="./delete.php?id=<?php echo $product[0]; ?>" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                        <!-- Delete -->
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- Fin de Listado de Productos -->
                    </tbody>
                    <tfoot>
                        <tr class="bg-light">
                            <td colspan="2" class="border-end-0 text-end fw-bolder">Total:</td>
                            <td colspan="5" class="border-start-0 fw-bolder">
                                $<?php echo $total; ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <!-- Enlace para agregar producto -->
                <a href="./create.php" class="btn btn-success btn-sm my-2">Add Product</a>
            </div>
        </div>
    </div>
</div>
<!-- Fin Contenido Pagina Productos -->

<?php include './footer.php' ?>