<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Práctica 09</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <header>
        <h1>Práctica 09: Formulario y expresiones regulares</h1>
    </header>
    <main>
        <div class ="content">
                <div id ="title">
                    <h2>Desarrollo Web en Entorno Servidor</h2>
                    <h3>Formulario y expresiones regulares</h3>
                    <br>
                </div>
                <?php
                    require_once("../libreria/funciones.php");
                    //require_once("./validarFormulario.php");
                    /*if(isset($_REQUEST['Enviado'])&& validaForm()){
                        header('Location: muestraFormulario.php');
                    }*/
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="formulario" enctype="multipart/form-data">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php                    
                        mantenerNom();
                    ?>">
                    <?php                      
                        validaNom();
                    ?>
                    <br>
                    <br>
                    <label for="apellido">Apellidos:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?php 
                        mantenerApe();
                    ?>">
                    <?php
                        validaApe();
                    ?>
                    <br>
                    <br>
                    <input type="submit" value="Enviar" name="Enviado" class="btn btn-danger">
                    <input type="reset" value="Limpiar formulario" class="btn btn-danger">
                </form>
        </div>
        <br>
        <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../../media/lupa.svg">
        </a>
        <br>
        <br>
        <a href="../index.html">
            <img src="../../media/volver.svg">
            Volver al Index Práctica 09
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
    
</body>
</html>
