<!DOCTYPE html>

<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <style>
        *,
        input {
            margin: 10px;
        }
    </style>
    <?php
    require_once("../libreria/funciones.php");
    require_once("./validarFormulario.php");
    $array = array(
        "1DAM" => array("ENDE", "BD", "LM", "SI", "FOL"),
        "2DAM" => array("DI", "SGE", "ACDA", "EIE", "PSP"),
        "2DAW" => array("DWES", "DWEC", "DIW", "EIE")
    );
    //Validación de la primera parte
    if(isset($_REQUEST['Enviado'])&& validaForm()){
        header('Location: muestraFormulario.php');
    }
    ?>
    <form action="./Examen2.php" method="post">
        <label for="nombre">Nombre y apellidos:</label> <input type="text" name="nombre" id="nombre" value="<?php mantenerNom() ?>">
        <?php validaNomApe(); ?>
        <br> <label for="exp">Expediente</label> <input type="text" name="exp" id="exp" value="<?php mantenerExp() ?>">
        <?php validaExp(); ?>
        <br> <label for="curso">Curso:</label> <select name="curso" id="curso">
            <option value="no">Selecione una opcion</option>
            <?php
                //Recorremos array para escribir las 3 opciones
                foreach ($array as $key => $value) {
                    echo "<option value='$key'".mantenSel($key).">".$key."</option>";
                }
            ?>
        </select>
        <?php
        validaSel();
        ?>
        <input type="hidden" name="curso" value="">
        <br><input type="submit" name="Enviado" value="Enviar">
    </form>



</body>

</html>