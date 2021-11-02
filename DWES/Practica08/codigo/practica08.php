<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Práctica 08: Formulario</h1>
    </header>
    <main>
        <div class ="content">
            <div id ="title">
                <h2>Desarrollo Web en Entorno Servidor</h2>
                <h3>Formulario de Registro</h3>
                <br>
            </div>
                <?php
                require_once("../libreria/funciones.php");
                    //1ª opción: Ver si hay algo en $_POST
                    /*if(count($_REQUEST)>0){ //$_REQUEST coge por $_get y por $_post
                        p("El formulario ha sido enviado");
                    }*/
                    /*
                    if(isset($_REQUEST['Enviado'])){
                        p("El formulario ha sido enviado");
                        if(!empty($_REQUEST['nombre']))
                            p("El nombre es: ".$_REQUEST['nombre']);
                        if(!empty($_REQUEST['pass']))
                            p("La contraseña es: ".$_REQUEST['pass']);
                        if(isset($_REQUEST['genero']))
                            p("El genero es: ".$_REQUEST['genero']);
                        if($_REQUEST['curso']=="seleccion"){
                            p("Debe seleccionar un curso");
                        }
                        if(!isset($_REQUEST['aficiones']))
                            p("No ha elegido ninguna afición, espabila");
                        elseif(count($_REQUEST['aficiones'])>3)
                            p("Debes elegir como mucho 3");

                        //La variable superglobal que guarda los ficheros es $_FILES
                        print_r($_FILES);
                        if(isset($_FILES)){
                            $guarda = "../uploads/";
                            $rutaConNombre = $guarda . $_FILES['fichero']['name'];
                            echo $rutaConNombre;
                            if(move_uploaded_file($_FILES['fichero']['tmp_name'], $rutaConNombre))
                                p("Guardado");
                            else
                                p("Error");
                        }

                    }
                    */
                    require_once("./validarFormulario.php");
                    /*if(isset($_REQUEST['Enviado'])){
                        validaForm();
                    }/*else{*/
                    
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="formulario" enctype="multipart/form-data">
                    <label for="nombre">Alfabetico:</label>
                    <!--Validar que cuando escribamos un nombre se quede cuando Enviemos el formulario-->
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php 
                        require_once("../libreria/funciones.php");
                        mantenerAlfa();
                    ?>">
                    <?php
                        //Validar que se ha escrito algo o no en el campo nombre
                        require_once("../libreria/funciones.php");
                        validaAlfa();
                    ?>
                    <br>
                    <br>
                    <label for="nombreOpcional">Alfabetico Opcional:</label>
                    <input type="text" name="nombreOpcional" placeholder="Nombre" id="nombreOpcional" value="<?php 
                        require_once("../libreria/funciones.php");
                        mantenerAlfaOp();
                    ?>">
                    <br>
                    <br>
                    <label for="apellido">Alfanumérico:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" value="<?php 
                        require_once("../libreria/funciones.php");
                        mantenerNum();
                    ?>">
                    <?php
                        //Validar que se ha escrito algo o no en el campo nombre
                        require_once("../libreria/funciones.php");
                        validaNum();
                    ?>
                    <br>
                    <br>
                    <label for="apellidoOpcional">Alfanumérico Opcional:</label>
                    <input type="text" name="apellidoOpcional" placeholder="Apellido" id="apellidoOpcional"value="<?php 
                        require_once("../libreria/funciones.php");
                        mantenerNumOp();
                    ?>">
                    <br>
                    <br>
                    <label>Fecha</label>
                    <input type="date" name="fecha" id="fecha" value="<?php 
                        require_once("../libreria/funciones.php");
                        mantenerFecha();
                    ?>">
                    <?php
                        //Validar que se ha introducido una fecha
                        require_once("../libreria/funciones.php");
                        validaFecha();
                    ?>
                    <br>
                    <br>
                    <label>Fecha Opcional</label>
                    <input type="date" name="fechaOp" id="fechaOp" value="<?php 
                        require_once("../libreria/funciones.php");
                        mantenerFechaOp();
                    ?>">
                    <br>
                    <br>
                    <label>Radio obligatorio</label>
                    <br>
                    <input type="radio" name="opciones" id="opcion1" value="opcion1" checked><label for="opcion1">Opcion1</label>
                    <input type="radio" name="opciones" id="opcion2" value="opcion2"><label for="opcion2">Opcion2</label>
                    <input type="radio" name="opciones" id="opcion3" value="opcion3"><label for="opcion3">Opcion3</label>
                    <br>
                    <?php
                        //Validar que se ha introducido una fecha
                        require_once("../libreria/funciones.php");
                        validaOp();
                    ?>
                    <br>
                    <label for="seleccion">Elige una Opción:</label>
                    <select name="seleccion" id="seleccion">
                        <option value="sel">Seleccione</option>
                        <option value="sel1">Algo</option>
                        <option value="sel2">Cosa</option>
                        <option value="sel3">Eso</option>
                    </select>
                    <br>
                    <br>
                    <label>Elige al menos 1 y máximo 3:</label>
                    <br>
                        <input type="checkbox" name="caja[]" id="caja1" value="caja1"><label for="caja1">Check1</label>
                        <input type="checkbox" name="caja[]" id="caja2" value="caja2"><label for="caja2">Check2</label>
                        <input type="checkbox" name="caja[]" id="caja3" value="caja3"><label for="caja3">Check3</label>
                        <input type="checkbox" name="caja[]" id="caja4" value="caja4"><label for="caja4">Check4</label>
                        <input type="checkbox" name="caja[]" id="caja5" value="caja5"><label for="caja5">Check5</label>
                        <input type="checkbox" name="caja[]" id="caja6" value="caja6"><label for="caja6">Check6</label>
                    <br>
                    <br>
                    <br>
                    <label for="telefono" id="telefono" name="telefono">Nº Telefono: </label>
                    <input type="tel" id="telefono" name="telefono" placeholder="654987321">
                    <br>
                    <br>
                    <label for="email" id="email" name="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <br>
                    <br>
                    <label for="password" id="password" name="password">Contraseña:</label>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                    <br>
                    <br>
                    <label for="fichero" id="fichero" name="fichero">Subir documento</label>
                    <input type="file" name="fichero" id="fichero">
                    <br>
                    <br>
                    <input type="submit" value="Enviar" name="Enviado" class="btn btn-danger">
                    <input type="reset" value="Limpiar formulario" class="btn btn-danger">
                </form>  

                <?php
                    //}
                ?>
        </div>
        <br>
        <br>
        <a href="../index.html">
            <img src="../../../media/volver.svg">
            Volver al Index Practica08
        </a>
        <br>
        <br>
        <a href="codigo.php?paginaPHP=<?php $pagina = basename($_SERVER['SCRIPT_FILENAME']);
            echo $pagina;?>">
            Ver codigo <img style="width:35px;"src="../../../media/lupa.svg">
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>