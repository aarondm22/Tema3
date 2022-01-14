<?php
    require_once ("../funciones/validaSession.php");
    //Comprobar que hay sesion
    session_start();
    validaSession();
    //Comprobar que la pagina puede verse por el usuario logueado
   /* if(validaPagina(basename($_SERVER['PHP_SELF']))){
        header("Location: ");
    }*/
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
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="./sesion.php">StopStore</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#"><?php echo $_SESSION['nombre'];?></a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./sesion.php">Inicio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Comprar Productos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./misdatos.php">Mis datos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="../sesion/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <form style="padding-bottom: 305.5px;" action="" method="post" name="formulario" enctype="multipart/form-data">
                <div class="mb-3">    
                    <h1>Mis Datos</h1>
                </div>
                <div class="mb-3">
                    <label for="nombre">User:&nbsp;</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="password" id="password" name="password">Contraseña:&nbsp;</label>
                    <input type="password" name="pass" id="pass" value="<?php echo $_SESSION['pass']; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" id="email" name="email">Email:&nbsp;</label>
                    <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="fecha" id="fecha" name="fecha">Fecha Nacimiento:&nbsp;</label>
                    <input type="date" name="fecha" id="fecha" value="<?php echo $_SESSION['fecha']; ?>">
                </div>
                <input type="submit" value="Entrar" name="entrar" class="btn btn-danger">
                <a href="./registro.php" class="btn btn-danger">Registrar</a>
            </form>
        </div>
    </header>
    <footer class="footer text-center">©Copy Aaron de Diego</footer>
</body>
</html>