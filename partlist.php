<?php
//Partlist partlist.php
//Escribe función partlist que devuelva todas las formas de dividir una lista (array) de al menos dos
// elementos en dos partes no vacías que contengan todos los elementos.
//Cada dos partes no vacías estarán en un par
//Cada parte estará en una cadena
//Los elementos de un par deben estar en el mismo orden que en el array original

    $cadenaDividir = "Hola me llamo Candela";

    function partList($cadenaADividir){
        $arrayDividido = explode(" ", $cadenaADividir);
        $arrayJunto = [];
        
        for($i=1; $i<count($arrayDividido); $i++){
            $string1 = implode(" ", array_slice($arrayDividido,0,$i));
            $string2 = implode(" ", array_slice($arrayDividido,$i,count($arrayDividido)));
            $arrayJunto = [$string1, $string2];
            $arrayFusion[] = $arrayJunto;
        }
        print_r($arrayFusion);
    }
    partList($cadenaDividir);
?>