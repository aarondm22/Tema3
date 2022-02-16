<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="">Inicio Sesion</label>
    <br>
    <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
    <label for="pass">Contraseña: </label>
        <input type="password" name="pass" id="pass">
        <br>
    <label for="pass">Recuerdame </label>
        <input type="checkbox" name="recordar" id="recordar">
    <input type="submit" value="Entrar" name="iniciar">
</form>
