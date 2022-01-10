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
    <link href="../webroot/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>StopStore</h1>
        <ul>
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a href="#">Comprar Productos</a>
            </li>
        </ul>
        <a class="log" href="index.html">
            Logout
        </a>
        <a class="log" href="./sesion/login.php">
            Login
        </a>
        <br>
        <br>
    </header>
    <main>
        <div class="content">
            <!--Formulario que paso por post -->
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="formulario" enctype="multipart/form-data">
                <label for="nombre">Alfabetico:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php                    
                    //mantenerAlfa();
                ?>">
                <?php                      
                    //validaAlfa();
                ?>
                <br>
                <br>
                <label for="nombreOpcional">Alfabetico Opcional:</label>
                <input type="text" name="nombreOpcional" placeholder="Nombre" id="nombreOpcional" value="<?php               
                    //mantenerAlfaOp();
                ?>">
                <br>
                <br>
                <label for="apellido">Alfanumérico:</label>
                <input type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?php 
                    //mantenerNum();
                ?>">
                <?php
                    //validaNum();
                ?>
                <br>
                <br>
                <label for="apellidoOpcional">Alfanumérico Opcional:</label>
                <input type="text" name="apellidoOpcional" placeholder="Apellido" id="apellidoOpcional"value="<?php 
                    //mantenerNumOp();
                ?>">
                <br>
                <br>
                <label>Fecha</label>
                <input type="date" name="fecha" id="fecha" value="<?php 
                    //mantenerFecha();
                ?>">
                <?php
                    //validaFecha();
                ?>
                <br>
                <br>
                <label>Fecha Opcional</label>
                <input type="date" name="fechaOp" id="fechaOp" value="<?php 
                    //mantenerFechaOp();
                ?>">
                <br>
                <br>
                <label>Radio obligatorio</label>
                <br>
                <input type="radio" name="opciones" id="opcion1" value="opcion1" <?php 
                    //mantenerOpcion("opcion1");
        
                ?>><label for="opcion1">Opcion1</label>
                <input type="radio" name="opciones" id="opcion2" value="opcion2" <?php 
                    //mantenerOpcion("opcion2");
                
                ?>><label for="opcion2">Opcion2</label>
                <input type="radio" name="opciones" id="opcion3" value="opcion3" <?php 
                    //mantenerOpcion("opcion3");
                
                ?>><label for="opcion3">Opcion3</label>
                <br>
                <?php
                    //validaOp();
                ?>
                <br>
                <label for="seleccion">Elige una Opción:</label>
                <select name="seleccion" id="seleccion">
                    <option value="sel" <?php 
                        //mantenerSeleccion("sel");
                    ?>>Seleccione</option>
                    <option value="sel1"<?php 
                        //mantenerSeleccion("sel1");
                    ?>>Algo</option>
                    <option value="sel2"<?php 
                        //mantenerSeleccion("sel2");
                    ?>>Cosa</option>
                    <option value="sel3"<?php 
                        //mantenerSeleccion("sel3");
                    ?>>Eso</option>
                </select>
                <br>
                <?php
                    //validaSel();
                ?>
                <br>
                <label>Elige al menos 1 y máximo 3:</label>
                <br>
                    <input type="checkbox" name="caja[]" id="caja1" value="caja1" <?php 
                        //mantenerCheck("caja1");
                    ?>><label for="caja1">Check1</label>
                    <input type="checkbox" name="caja[]" id="caja2" value="caja2"<?php 
                        //mantenerCheck("caja2");
                    ?>><label for="caja2">Check2</label>
                    <input type="checkbox" name="caja[]" id="caja3" value="caja3"<?php 
                        //mantenerCheck("caja3");
                    ?>><label for="caja3">Check3</label>
                    <input type="checkbox" name="caja[]" id="caja4" value="caja4"<?php 
                        //mantenerCheck("caja4");
                    ?>><label for="caja4">Check4</label>
                    <input type="checkbox" name="caja[]" id="caja5" value="caja5"<?php 
                        //mantenerCheck("caja5");
                    ?>><label for="caja5">Check5</label>
                    <input type="checkbox" name="caja[]" id="caja6" value="caja6"<?php 
                        //mantenerCheck("caja6");
                    ?>><label for="caja6">Check6</label>
                <br>
                <?php
                    //validaCheck();
                ?>
                <br>
                <br>
                <label for="telefono" id="telefono" name="telefono">Nº Telefono: </label>
                <input type="tel" id="telefono" name="telefono" placeholder="654987321" value="<?php 
                    //mantenerTel();
                ?>">
                <?php
                    //validaTel();
                ?>
                <br>
                <br>
                <label for="email" id="email" name="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" value="<?php 
                    //mantenerEmail();
                ?>">
                <?php
                    //validaEmail();
                ?>
                <br>
                <br>
                <label for="password" id="password" name="password">Contraseña:</label>
                <input type="password" name="pass" id="pass" placeholder="Contraseña" value="<?php 
                    //mantenerPass();
                ?>">
                <?php
                    //validaPass();
                ?>
                <br>
                <br>
                <label for="fichero" id="fichero" name="fichero">Subir documento</label>
                <input type="file" name="fichero" id="fichero" >
                <?php 
                    //mantenerFich();
                ?>
                <br>
                <?php
                    //validaFich();
                ?>
                <br>
                <input type="submit" value="Enviar" name="Enviado" class="btn btn-danger">
                <input type="reset" value="Limpiar formulario" class="btn btn-danger">
            </form>  
        </div>
    </main>
    <footer>©Copy Aaron de Diego</footer>
</body>
</html>