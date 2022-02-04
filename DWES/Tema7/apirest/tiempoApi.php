<?php


$url = "http://dataservice.accuweather.com/forecasts/v1/daily/5day/303121?apikey=N80aDXLfQnfRczkqPgbifxQQ9Vt5z9EX&language=es&metric=true";

$devuelve = file_get_contents($url);

if($devuelve){
    $json = json_decode($devuelve,true);
}

?>

<table border= "1">
    <thead>
    <th>Fecha</th>
    <th>Temperatura Minima</th>
    <th>Temperatura Maxima</th>
    <tbody>
    <?php
        foreach ($json['DailyForecasts'] as $date) {
            echo "<tr>";
                echo "<td>";
                echo $date['Date'];
                echo "</td>";
                foreach ($date["Temperature"] as $minmax => $value) {
                    foreach ($value as $temp => $valor) {
                        echo "<td>";
                        echo $valor;
                        echo "</td>";
                    }
                }
            echo "</tr>";
        }
            
                /*foreach ($value['DailyForecasts'] as $clave => $valor) {
                    echo "<td>";
                    echo $key["Date"];
                    echo "</td>";
                    /*foreach ($valor['Temperature'] as $key => $temp) {
                        echo "<td>";
                        echo ;
                        echo "</td>";
                    }
                    
                }*/
            echo "</tr>";
    ?>
    </tbody>
    </thead>
</table>