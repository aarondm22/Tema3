<?php
    require_once ("../funciones/consultas.php");
    require_once ("../funciones/conexionBD.php");
    require_once ("../funciones/validaSession.php");
    require_once ("../funciones/config.php");

    session_start();

    if(isset($_REQUEST['comprar'])&&validaSession()&&validaCompra()){
        header("Location: ../sesionvalidada/finalizacompra.php");
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
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="./sesion.php">StopStore</a>
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
        <div class="caja">
            <?php

            $listaProductos = selectProd();
            foreach ($listaProductos as $key => $value) {
                ?>
                <div class="producto">
                    <div class="caratula">
                        <picture>
                            <img src="<?php echo RUTAIMG.$value['imagen']?>" alt="">
                        </picture>
                    </div>
                    <div class="nombreProducto">
                        <h5><?php echo $value['descripcion']?><span> <?php echo $value['precio']?>€</span></h5>
                        
                    </div>
                    <div class="productoInputs">
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                            <input type="hidden" name="precio" value="<?php echo $value['precio']?>">
                            <input type="hidden" name="codProducto" value="<?php echo $value['cod_producto']?>">
                            <input type="number" name="numProductos" id="numProductos">
                            <input type="submit" value="Comprar" name="comprar">
                        </form>
                    </div>
                </div>
                <?php
            }
           ?>
        </div>
    </header>
    <footer class="footer text-center">©Copy Aaron de Diego</footer>
</body>
</html>