<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('location: index.php');
    exit;
}

require_once('./database.php');

$email = "";
$password = "";

$email_error = "";
$password_error = "";
$login_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (empty(trim($_POST['email']))) {
        $email_error = "El email no puede estar vacio";
    } else {
        $email = trim($_POST['email']);
    }

    if (empty(trim($_POST['password']))) {
        $password_error = "El password no puede estar vacio";
    } else {
        $password = trim($_POST['password']);
    }

    if (empty($email_error) && empty($password_error)) {
        $query = "SELECT * FROM users WHERE email='{$email}'and password='{$password}';";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_row($result);

        if ($user) {
            session_start();
            
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $user[0];
            $_SESSION['email'] = $user[1];

            header('location: index.php');
        } else {
            $login_error = "Email/Password son incorrectos";
        }
    }
}


?>
<!-- El archivo de encabezado de la pagina web (css)-->
<?php include './header.php' ?>

<!-- Contenido Pagina Principal -->
<div class="container">
    <div class="row">
        <div class="col-md-12 pb-3">
            <?php if (!empty($login_error)) : ?>
                <div class="alert alert-danger alert-dismissible fade show w-50 mx-auto mt-5" role="alert">
                    <?php echo $login_error; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <form action="login.php" class="w-50 mx-auto my-5 px-5" method="POST">
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="john.doe@example.com">
                    <?php if (!empty($email_error)) : ?>
                        <small class="text-danger"><?php echo $email_error; ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="********">
                    <?php if (!empty($password_error)) : ?>
                        <small class="text-danger"><?php echo $password_error; ?></small>
                    <?php endif; ?>
                </div>
                <button class="btn btn-primary btn-sm w-100">LOGIN</button>
            </form>
        </div>
    </div>
</div>
<!-- Fin del Contenido Pagina Principal -->

<!-- El archivo de pie de la pagina web (scripts) -->
<?php include './footer.php' ?>