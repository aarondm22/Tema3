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
                    if($minmax == "Minimum"){
                        foreach ($value as $temp => $valor) {
                            if($temp == "Value"){
                                echo "<td>";
                                echo $valor;
                                echo "</td>";
                            }
                        }
                    }else if($minmax == "Maximum"){
                        foreach ($value as $temp => $valor) {
                            if($temp == "Value"){
                                echo "<td>";
                                echo $valor;
                                echo "</td>";
                            }
                        }
                    }
                }
            echo "</tr>";
        }
    ?>
    </tbody>
    </thead>
</table>