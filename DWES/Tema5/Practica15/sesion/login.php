<?php
    //llamar a verifica sesion
    require_once("../funciones/validaSession.php");
    session_start();
    if(validaSession()){
        header("Location: ./paginas/menu.php");
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./sesion/login.php">Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="masthead bg-primary text-white text-center">
        <div class="content">
            <!--Formulario que paso por post -->
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="formulario" enctype="multipart/form-data">
                <div class="mb-3">    
                    <h1>Formulario de Alta de Usuarios </h1>
                </div>
                <div class="mb-3">
                    <label for="nombre">User:&nbsp;</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php                    
                        //mantenerAlfa();
                    ?>">
                    <?php                      
                        //validaAlfa();
                    ?>
                </div>
                <div class="mb-3">
                    <label for="password" id="password" name="password">Contraseña:&nbsp;</label>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña" value="<?php 
                        //mantenerPass();
                    ?>">
                    <?php
                        //validaPass();
                    ?>
                </div>
                <div class="mb-3">
                    <label for="password" id="password" name="password">Repita Contraseña:&nbsp;</label>
                    <input type="password" name="pass2" id="pass2" placeholder="Contraseña" value="<?php 
                        //mantenerPass();
                    ?>">
                    <?php
                        //validaPass();
                    ?>
                </div>
                <div class="mb-3">
                    <label for="email" id="email" name="email">Email:&nbsp;</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="<?php 
                        //mantenerEmail();
                    ?>">
                    <?php
                        //validaEmail();
                    ?>
                </div>
                <div class="mb-3">
                    <label>Fecha Nacimiento:&nbsp;</label>
                    <input type="date" name="fecha" id="fecha" value="<?php 
                        //mantenerFecha();
                    ?>">
                    <?php
                        //validaFecha();
                    ?>
                </div>
                <input type="submit" value="Enviar" name="Enviado" class="btn btn-danger">
                <input type="reset" value="Limpiar formulario" class="btn btn-danger">
            </form>  
        </div>
    </main>
    <footer class="footer text-center">©Copy Aaron de Diego</footer>
</body>
</html>