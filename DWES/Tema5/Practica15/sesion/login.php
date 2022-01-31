<?php
    //llamar a verifica sesion
    require_once("../funciones/validaSession.php");
    require_once("../funciones/funciones.php");
    session_start();
    if(isset($_REQUEST['entrar'])&&validaSession()&&validaLogin()){
        header("Location: ../sesionvalidada/index.php");
    }else{
        echo "Error";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 15</title>
    <link href="../webroot/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">StopStore</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../index.html">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Comprar</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./login.php">Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="masthead bg-primary text-white text-center">
        <div class="content">
            <!--Formulario que paso por post -->
            <form style="padding-bottom: 305.5px;" action="../funciones/valida.php" method="post" name="formulario" enctype="multipart/form-data">
                <div class="mb-3">    
                    <h1>Login</h1>
                </div>
                <div class="mb-3">
                    <label for="nombre">User:&nbsp;</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                    <?php                      
                        validaUserLogin();
                    ?>
                </div>
                <div class="mb-3">
                    <label for="password" id="password" name="password">Contraseña:&nbsp;</label>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                    <?php
                        validaPassLogin();
                    ?>
                </div>
                <input type="submit" value="Entrar" name="entrar" class="btn btn-danger">
                <a href="./registro.php" class="btn btn-danger">Registrar</a>
            </form>
    </main>
    <footer class="footer text-center">©Copy Aaron de Diego</footer>
</body>
</html>