<?php
    //Ejercicio introducir nombre
    $nombre = $_GET['nombre'] ?? "Candela";
    echo $nombre;
    //Ejercicio eliminar / / del nombre
    $nombreSin = trim($nombre, "/");
    echo $nombreSin;
?>

<br>

<?php
    //Ejercicio longitud del parametro nombre
    echo strlen($nombre);
?>

<br>

<?php
    //Ejercicio mayusculas
    echo strtoupper($nombre);
?>

<br>

<?php
    //Ejercicio minusculas
    echo strtolower($nombre);
?>

<br>

<?php
    //Ejercicio prefijo
    $prefijo = $_GET['prefijo'] ?? "";
    $comprobacion = strpos($nombre,$prefijo);
    if ($comprobacion==0){
        echo ("contiene el prefijo");
    }else{
        echo ("no contiene prefijo");
    }
?>

<br>

<?php
    //Contar letra a mayuscula o minuscula
    $nombreMinuscula = strtolower($nombre);
    echo substr_count($nombreMinuscula, 'a');
?>

<br>

<?php
    //Muestra la posicion de la primera a
    $letraBuscar = "a";
    $posicion = (stripos($nombreMinuscula, $letraBuscar));
    if ($posicion!==FALSE){
        echo ($posicion);
    }else{
        echo ("No esta");
    }
?>

<br>

<?php
    //Sustituir o por 0
    $nombreSustituido = str_ireplace("o","0",$nombre);
    echo ($nombreSustituido);
?>

<br>

<?php
    //Extraer partes de una URL
    $url = 'http://username:password@hostname:9090/path?arg=value';
    echo (parse_url($url,PHP_URL_SCHEME));
    echo("<br>");
    echo (parse_url($url,PHP_URL_USER));
    echo("<br>");
    echo (parse_url($url,PHP_URL_PATH));
    echo("<br>");
    echo (parse_url($url,PHP_URL_QUERY));
?>