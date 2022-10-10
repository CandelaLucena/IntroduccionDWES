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
//Crea una tabla html en la que se muestren todos los datos de los alumnos
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
//Crea una tabla html en la que se muestren todos los datos de los alumnos con foreach
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
// Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla
    print_r(array_column($arrayAlumnos,$indexkey = 1));
?>

<br>

<?php
//Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números
    $arrayNumeros = array (5, 10, 20, 25);
    echo(array_sum($arrayNumeros));
?>

