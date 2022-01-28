

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="">Mi Perfil</label>

    <label for="user">User: </label>
        <input type="text" disabled name="user" id="user" value="<?php echo $usuario->codUsuario?> ">
        <input type="hidden" name="user" id="user" value="<?php echo $usuario->codUsuario?> ">
    <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $usuario->nombre?> ">
    <label for="perfil">Perfil: </label>
        <input type="text" name="perfil" id="perfil" value="<?php echo $usuario->perfil?> ">
    <input type="submit" value="Modificar" name="modificar">
    <input type="submit" value="Volver" name="volver">
</form>