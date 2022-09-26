<?php
//Contar elementos array
    $arrayNombres = array("Candela","Maria","Alicia");
    echo (count($arrayNombres));
?>
<br>
<?php
//Crear cadena con el array
    echo(implode(" ", $arrayNombres));
?>
<br>
<?php
//Ordenar array alfabeticamente
    asort($arrayNombres);
    print_r($arrayNombres);
?>
<br>
<?php
//Invertir array
    print_r(array_reverse($arrayNombres));
?>
<br>
<?php
//Muestra la posicion de tu nombren en el array
    echo(array_search("Candela",$arrayNombres));
?>
<br>
<?php
//Crear un array de alumno con otro array dentro que contenga informacion de ellos
    $arrayAlumnos = array (
        array (0, "Candela Lucena", 22),
        array (1, "Juanma Perez", 21),
        array (2,"Maria Lucena", 18),
    )
?>
<br>
<?php
    echo '<table border="15">';
    echo '<tr>';
      echo '<th>'.$arrayAlumnos[0][0].'</th>';
      echo '<th>'.$arrayAlumnos[0][1].'</th>';
      echo '<th>'.$arrayAlumnos[0][2].'</th>';
        echo '<tr>';
      echo '<th>'.$arrayAlumnos[1][0].'</th>';
      echo '<th>'.$arrayAlumnos[1][1].'</th>';
      echo '<th>'.$arrayAlumnos[1][2].'</th>';
        echo'<tr>';
      echo '<th>'.$arrayAlumnos[2][0].'</th>';
      echo '<th>'.$arrayAlumnos[2][1].'</th>';
      echo '<th>'.$arrayAlumnos[2][2].'</th>';
    echo '</tr>';
    echo '</table>';
?>
<br>
<?php
    echo '<table border="15">';
    foreach ($arrayAlumnos as $valor1) {
        echo '<tr>';
        foreach ($valor1 as $valor2) {
            echo '<th>';
            echo "$valor2\n";
            echo '</th>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
<br>
<?php
    print_r(array_column($arrayAlumnos,$indexkey = 1));
?>
<br>
<?php
    $arrayNumeros = array (5, 10, 20, 25);
    echo(array_sum($arrayNumeros));
?>
<br>
<?php
    $color = array('blanco', 'verde', 'rojo');
    echo '<ul>';
    foreach ($color as $valor1){
        echo '<li>'; 
        echo "$valor1\n";
        echo '</li>';
    }
    echo '</ul>';
?>
<br>
<?php
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
<br>
<?php
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
<br>
<?php
    //Ordenar una cadena metiendola en un array
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
<br>
<?php
    //Ordenar un array asociativo
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
<br>
<?php
    //Generar contraseña aleatoria segun parametros
    //Nunca echo dentro de metodos
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
        $arrayAleatorio = [];

        for($i=0;$i<$upper;$i++){
            //Lo mismo
            $arrayAleatorio[] =  chr(rand(65, 90));
        }
        for($i=0;$i<$lower;$i++){
            //Que esto
            array_push($arrayAleatorio, chr(rand(97, 122)));
        }
        for($i=0;$i<$numeric;$i++){
            array_push($arrayAleatorio, chr(rand(48, 57)));
        }
        for($i=0;$i<$other;$i++){
            array_push($arrayAleatorio, chr(rand(33, 47)));
        }
        
        shuffle($arrayAleatorio);
        return implode($arrayAleatorio);
    }
    echo(rand_Pass());
?>
<br>
<?php
    //Calcular longitud maxima y minima de las cadenas de un array
    $arrayCadenas = array("cadena123","cadena1","cadena1234","cadena123456","cadena12");
    function compararCadenas($cadena1){
        return strlen($cadena1);
    }
    $arrayLongitudes = array_map("compararCadenas",$arrayCadenas);
    echo(max($arrayLongitudes)."<br>");
    echo(min($arrayLongitudes))
?>
<br>
<?php
    $cadenaDividir = "Hola me llamo Candela";

    function partList($cadenaADividir){
        $arrayDividido = explode(" ", $cadenaADividir);
        $arrayJunto = [];

        for($i=1; $i<count($arrayDividido); $i++){
            $string1 = implode(array_slice($arrayDividido,0,$i));
            $string2 = implode(array_slice($arrayDividido,$i,count($arrayDividido)));
            $arrayJunto = [$string1, $string2];
        }
        print_r($arrayJunto);
    }
    partList($cadenaDividir);
?>