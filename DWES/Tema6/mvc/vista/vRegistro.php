
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="">Registro</label>

    <label for="user">User: </label>
        <input type="text" name="user" id="user">
    <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
    <label for="pass">Contraseña: </label>
        <input type="text" name="pass" id="pass">
    <label for="repPass">Repetir contraseña: </label>
        <input type="text" name="repPass" id="repPass">

    <input type="submit" value="Registrar" name="registro">
</form>