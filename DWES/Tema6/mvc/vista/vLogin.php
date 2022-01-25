<?php

if(isset($_SESSION['mensaje'])){
    echo $_SESSION['mensaje'];
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="">Inicio Sesion</label>

    <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
    <label for="pass">Contraseña: </label>
        <input type="text" name="pass" id="pass">
    <input type="submit" value="Iniciar Sesion" name="iniciar">
    <input type="submit" value="Registro" name="registro">
    <input type="submit" value="Volver" name="volver">
</form>

<?php
if(isset($_SESSION['mensaje'])){
    unset($_SESSION['mensaje']);
}
?>