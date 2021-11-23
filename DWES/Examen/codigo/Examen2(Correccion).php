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
    $primeraValidacion = primera();
    if($primeraValidacion){
        if(segunda()){
            $asignaturas = implode(",",$_REQUEST["asig"]);
            header("Location: mostrar.php?nombre=".$_REQUEST["nombre"]."&exp=".$_REQUEST["exp"]."&curso=".$_REQUEST["curso"]."&asig=".$asignaturas);
        }
    }
    
    ?>
    <form action="./Examen2(Correccion).php" method="post">
        <label for="nombre">Nombre y apellidos:</label> <input type="text" name="nombre" id="nombre" value="<?php mantenerNom() ?>" <?php if($primeraValidacion) echo "readonly"; ?>>
        <?php validaNomApe(); ?>
        <br> <label for="exp">Expediente</label> <input type="text" name="exp" id="exp" value="<?php mantenerExp() ?>" <?php if($primeraValidacion) echo "readonly"; ?>>
        <?php validaExp(); ?>
        <br> <label for="curso">Curso:</label> <select name="curso" id="curso" <?php if($primeraValidacion) echo "disabled"; ?>>
            <option value="no">Selecione una opcion</option>
            <?php
                //Recorremos array para escribir las 3 opciones
                foreach ($array as $key => $value) {
                    echo "<option value='$key'".mantenerSel($key).">".$key."</option>";
                }
            ?>
        </select>
        <?php
        validaSel();
        if($primeraValidacion){
            echo "<input type='hidden' name='curso' value='".$_REQUEST["curso"]."'>";
            echo "<input type='hidden' name='enviado2' value='enviado2'>";

            foreach ($array[$_REQUEST["curso"]] as $asig) {
                echo "<input type='checkbox' name='asig[]' value='".$asig."' />".$asig."";
            }
        }
        validaCheck();
        ?>
        <br><input type="submit" name="Enviado" value="Enviar">
    </form>



</body>

</html>