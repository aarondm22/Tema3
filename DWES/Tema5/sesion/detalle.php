<?php

session_start();
if(isset($_SESSION['validada'])){
    echo "Nombre:" . $_SESSION['user']. "<br>";
    if(isset($_SESSION['contador']))
        echo $_SESSION['contador'] . "<br>";
    echo session_id();
}else{
    header("Location: ./login.php");
    exit;
}

?>
    <form action="./modifica.php" method="post">
        <?php if(!isset($_SESSION['contador'])) {?>
        <input type="submit" value="crear" name="crear">
        <?php } else{?>
        <input type="submit" value="+" name="sumar">
        <input type="submit" value="-" name="restar">
        <input type="submit" value="reset" name="reset">
        <?php } ?>
    </form>

    <br>
    <a href="./logout.php">Logout</a>