<?php
    $productos = ["1" => "Producto1","2" => "Producto2","3" => "Producto3"];
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="productos.csv"');
    foreach($productos as $id => $producto){
        echo($id.";".$producto."\n");
    }    
?>