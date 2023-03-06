<?php
require_once('./config.php');
require_once('./conexion.php');
require_once('./todos/listar_tareas.php');

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Listado de Tareas</h3>
                <a href="./addtask.php" class="btn btn-primary btn-sm m-1">Agregar Tarea</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tarea</th>
                            <th>Estatus</th>
                            <th>Fecha</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>1</td>
                            <td>Comprar Pan</td>
                            <td>Pendiente</td>
                            <td>2023-03-06</td>
                        </tr> -->
                        <?php foreach ($tareas as $tarea) { ?>
                            <tr>
                                <td><?php echo $tarea[0] ?></td>
                                <td><?php echo $tarea[1] ?></td>
                                <td><?php if($tarea[2] == true){ echo "Realizada"; } else{ echo "Pendiente"; } ?></td>
                                <td><?php echo $tarea[3] ?></td>
                                <td><a href="edittask.php?id=<?php echo $tarea[0]?>" class="btn btn-warning btn-sm">Edit</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>