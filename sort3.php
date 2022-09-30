<?php
//Ordenar según nuestro criterio sort3.php
//Ordenar un array asociativo
//Tenemos un array asociativo con nombre => descripción Realiza un script php que ordene el array por la longitud de la descripción
    $arrayAsociativo = array("nombre1" => "descripcion123",
    "nombre2" => "descripcion1",
    "nombre3" => "descripcion12");

    /*
    function funcionComparacion($a,$b){
        if(strlen($a) == strlen($b)){
            return 0;
        }else if(strlen($a) > strlen($b)){
            return -1;
        }else if(strlen($a) < strlen($b)){
            return 1;
        }
    }
    */
    function funcionComparacion($a,$b){
        if(strlen($a) == strlen($b)){
            return 0;
        } return (strlen($a) > strlen($b) ? -1 : 1);
    }
    uasort($arrayAsociativo, "funcionComparacion");
    print_r($arrayAsociativo);
    /*
    foreach ($arrayAsociativo as $valor1) {
        echo($valor1."<br>");
    }
    */
?>