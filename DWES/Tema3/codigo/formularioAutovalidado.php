<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>
<body>
    <header>
        <h1>Formulario</h1>
    </header>
    <main>
        <div class ="content">
            <div id ="title">
                <h1>DWES</h1>
                <h2>Desarrollo de Aplicaciones Web </h2>
                <h3>Autovalidado</h3>
            </div>
                <?php
                require_once("../../Librerias/funciones.php");
                    //1ª opción: Ver si hay algo en $_POST
                    /*if(count($_REQUEST)>0){ //$_REQUEST coge por $_get y por $_post
                        p("El formulario ha sido enviado");
                    }*/

                    if(isset($_REQUEST['Enviado'])){
                        p("El formulario ha sido enviado");
                        if(!empty($_REQUEST['nombre']))
                            p("El nombre es: ".$_REQUEST['nombre']);
                        if(!empty($_REQUEST['pass']))
                            p("El nombre es: ".$_REQUEST['pass']);
                        if(isset($_REQUEST['genero']))
                            p("El genero es: ".$_REQUEST['genero']);
                        if($_REQUEST['curso']=="seleccion"){
                            p("Debe seleccionar un curso");
                        }
                    }
                ?>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <br>
                    <br>
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" id="pass">
                    <br>
                    <br>
                    <label>Género</label>
                    <input type="radio" name="genero" id="masculino" value="masculino"><label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="femenino" value="femenino"><label for="femenino">Femenino</label>
                    <br>
                    <br>
                    <label for="curso">Ciclo:</label>
                    <select name="curso" id="curso">
                        <option value="seleccion">Seleccione una opcion</option>
                        <option value="dam">DAM</option>
                        <option value="daw">DAW</option>
                    </select>
                    <br>
                    <br>
                    <label> Aficiones: </label>
                        <input type="checkbox" name="aficiones[]" id="futbol" value="futbol"><label for="futbol">Futbol</label>
                        <input type="checkbox" name="aficiones[]" id="bar" value="bar"><label for="bar">Bar</label>
                        <input type="checkbox" name="aficiones[]" id="dormir" value="dormir"><label for="bar">Dormir</label>
                        <input type="checkbox" name="aficiones[]" id="lol" value="lol"><label for="lol">LoL</label>
                    <br>
                    <br>
                    <input type="submit" value="Enviar" name="Enviado">
                    <input type="reset" value="Limpiar formulario">
                </form>  
        </div>
        <br>
        <br>
        <a href="../index.html">
            <img src="../media/volver.svg">
            Volver al Index Tema 3
        </a>
    </main>
    <footer>
        ©Aarón de Diego Martín
    </footer>
</body>
</html>