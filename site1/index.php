<?php

$usuarios = [
    array("id" => 1, "nombre" => "Hugo", "email" => "hugo@gmail.com", "selected" => false),
    array("id" => 2, "nombre" => "Paco", "email" => "paco@gmail.com", "selected" => true),
    array("id" => 3, "nombre" => "Luis", "email" => "luis@gmail.com", "selected" => true),
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="prueba.php">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <p class="box">RUT: <?php echo $_GET["rut"]; ?></p>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Listado de Nombres</h3>
                <table class="table table-bordered table-striped mx-auto mt-5 shadow">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                    <?php foreach ($usuarios as $usuario) { ?>
                        <tr class="<?php if ($usuario["selected"]) {
                                        echo "bg-success text-white";
                                    } else {
                                        echo "bg-danger text-white";
                                    } ?>">
                            <td><?php echo $usuario["id"] ?></td>
                            <td><?php echo $usuario["nombre"] ?></td>
                            <td><?php echo $usuario["email"] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="row">
            <?php foreach ($usuarios as $usuario) { ?>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card shadow">
                        <img src="https://picsum.photos/id/<?php echo $usuario["id"] ?>/800/400" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $usuario["nombre"] ?></h5>
                            <p class="card-text"><?php echo $usuario["email"] ?></p>
                            <a href="#" class="btn btn-primary">Ver detalle</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="./prueba2.php"></script>
</body>

</html>