<?php


$url = "https://datos.madrid.es/egob/catalogo/206974-0-agenda-eventos-culturales-100.json";

$devuelve = file_get_contents($url);

if($devuelve){
    $json = json_decode($devuelve,true);
}

?>

<table border= "1">
    <thead><th>Titulo</th>
    <th>Fecha</th>
    <tbody>
    <?php
        foreach ($json['@graph'] as $value) {
            echo "<tr>";
                echo "<td>";
                echo $value['title'];
                echo "</td>";
                if(isset($value['dtstart']))
                    echo "<td>".$value['dtstart']."</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
    </thead>
</table>
