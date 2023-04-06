<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="./index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./products.php">Products</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./logout.php">Salir</a>
    </li>
    <li class="nav-item">
        <span class="nav-link"><?php echo $_SESSION['email'];?></span>
    </li>
</ul>