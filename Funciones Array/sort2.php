<?php
//Más orden sort2.php
//Ordenar una cadena metiendola en un array
//A partir de una cadena con las temperaturas de un mes, realiza la media e imprime las 5 temperaturas mínimas y las 5 máximas
    $cadenaTemperatura = "20 30 25 32 40 10 28 29 10 4 2 20 21 24 16 17 19";
    $arrayTemperatura = explode(" ",$cadenaTemperatura);
    asort($arrayTemperatura);
    $arrayTemperaturaOrdenado = array_values( $arrayTemperatura);

    echo("Valores minimos <br>");
    for($i=0;$i<5;$i++){
        echo($arrayTemperaturaOrdenado[$i]."<br>");
    }
    
    echo("Valores maximos <br>");
    for($i = count($arrayTemperaturaOrdenado);$i >= count($arrayTemperaturaOrdenado) - 5;$i--){
        echo($arrayTemperaturaOrdenado[$i-1]."<br>");
    }
?>