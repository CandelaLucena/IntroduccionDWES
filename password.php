<?php
//Password aleatorio password.php
//Generar contraseña aleatoria segun parametros
//Nunca "echo" dentro de metodos
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