<?php

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
                <h3>Añadir Tareas</h3>
                <form action="./todos/agregar_tarea.php" method="post">
                    <div class="form-group mb-3">
                        <label for="task" class="form-label">Tarea</label>
                        <input type="text" class="form-control" id="task" name="task" placeholder="Añadir Tarea">
                    </div>
                    <div class="form-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="done" id="done_true" value="true">
                            <label class="form-check-label" for="done_true">
                                Realizada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="done" id="done_false" value="false" checked>
                            <label class="form-check-label" for="done_false">
                                Pendiente
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100">Agregar Tarea</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>