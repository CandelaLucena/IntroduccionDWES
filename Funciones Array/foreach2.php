<?php
//Recorrer array II foreach2.php
//Escribe un script en PHP que muestre un array de colores como una lista desordenada y con un enlace a la página indicada en el valor
    $colorDos = array('blanco'=>'blanco.html', 
    'verde' => 'verde.html', 
    'rojo' => 'rojo.html');

    echo '<ul>';
    foreach ($colorDos as $color => $url){
        echo '<li>'; 
        echo "<a href = '$url'> $color </a>";
        echo '</li>';
    }
    echo '</ul>';
?>