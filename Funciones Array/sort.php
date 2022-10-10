<?php
//Ordenar un array sort.php
//Escribe un script PHP para ordenar un array asociativo
    $edades = array("Juan"=>"31",
    "María"=>"41",
    "Andrés"=>"39",
    "Berta"=>"40");
    //Edad Ascendente (ordena por el exterior)
    asort($edades);
    print_r($edades);
    echo("<br>");
    //Edad Descendente (le da orden inverso al exterior)
    arsort($edades);
    print_r($edades);
    echo("<br>");
    //Nombre Ascendente (ordena por el interior)
    ksort($edades);
    print_r($edades);
    echo("<br>");
    //Nombre Descendente (le da orden inverso al interior)
    krsort($edades);
    print_r($edades);
?>