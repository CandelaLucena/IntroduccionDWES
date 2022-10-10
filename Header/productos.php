<?php
    $productos = ["1" => "Producto1","2" => "Producto2","3" => "Producto3"];
    $elegido= $_GET['producto'] ?? "";

    if(array_key_exists($elegido, $productos)){
        echo($productos[$elegido]);
    }else{
        echo(($_SERVER["http_response_code"]));
    }
?>