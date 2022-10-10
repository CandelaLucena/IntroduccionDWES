<?php
//Calcular longitud maxima y minima de las cadenas de un array
//Callbacks callback.php
//Escribe un script php que calcule la longitud máxima y mínima de las cadenas de un array
    $arrayCadenas = array("cadena123","cadena1","cadena1234","cadena123456","cadena12");
    function compararCadenas($cadena1){
        return strlen($cadena1);
    }
    $arrayLongitudes = array_map("compararCadenas",$arrayCadenas);
    echo(max($arrayLongitudes)."<br>");
    echo(min($arrayLongitudes))
?>