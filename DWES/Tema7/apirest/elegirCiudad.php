<h1>El tiempo en Castilla y León</h1>
<h2>Seleccione la provincia sobre la que quiere saber el tiempo</h2>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

    <label>Provincia:&nbsp;&nbsp;</label>
    
    <select name="provincia">
        <option>León</option>
        <option>Zamora</option>
        <option>Salamanca</option>
        <option>Palencia</option>
        <option>Valladolid</option>
        <option>Ávila</option>
        <option>Burgos</option>
        <option>Segovia</option>
        <option>Soria</option>
    </select>
    <br>
    <br>
    <!-- Envio del form -->
    <input type="submit" name="Enviado" value="Ver Tiempo">
</form>
<?php
    // Recojo la provincia seleccionada
    if(isset($_REQUEST["Enviado"])){
        if(isset($_REQUEST["provincia"])){
            // Recojo la provincia seleccionada
            header("Location: ./tiempoApi.php");
            $provinciaSeleccionada = $_REQUEST["provincia"];
            echo $provinciaSeleccionada;
        }
    }
?>