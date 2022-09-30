<?php
//Recorrer array foreach.php
//Escribe un script en PHP que muestre un array de colores como una lista desordenada
    $color = array('blanco', 'verde', 'rojo');
    echo '<ul>';
    foreach ($color as $valor1){
        echo '<li>'; 
        echo "$valor1\n";
        echo '</li>';
    }
    echo '</ul>';
?>