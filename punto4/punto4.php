<?php

include 'punto4.html';
 
$mayoria_edad = 18;
// const $mayoria_edad = 18;
$edad_minima = 0;
// const $edad_minima;


    if (isset($_POST['comprobar'])) {
        $fecha_nacimiento = new DateTime($_POST['fecha']);
       
        $fecha_actual = new DateTime(date("y-m-d"));

        $diferencia = $fecha_nacimiento->diff($fecha_actual);

        $edad_actual = $diferencia->y;
        $edad_meses = $diferencia->m;
        $edad_dias = $diferencia->d;

        if (($edad_actual < $mayoria_edad) && ($edad_actual >= $edad_minima)) {

            echo "Su edad es: " .$edad_actual." años ".$edad_meses." meses ".$edad_dias ." días <br>";
            echo "Por tanto: No es mayor de edad"; 

        }elseif ($edad_actual >= $mayoria_edad ) {
            echo "Su edad es: " .$edad_actual." años ".$edad_meses." meses ".$edad_dias ." días <br>";
            echo "Por tanto: Es mayor de edad"; 

        } else {
            echo "Ha digitado una edad erronea";
        }

    }

?>