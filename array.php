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