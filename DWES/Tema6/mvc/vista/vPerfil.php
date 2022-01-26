

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="">Mi Perfil</label>

    <label for="user">User: </label>
        <input type="text" name="user" id="user" value="<?php echo $_SESSION['user']?>">
    <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre']?>">
    <input type="submit" value="Modificar" name="modificar">
    <input type="submit" value="Volver" name="volver">
</form>