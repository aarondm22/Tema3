<?php
echo "Mi pagina de inicio";


?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="submit" value="Login" name="login">
</form>