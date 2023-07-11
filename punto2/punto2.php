<?php

include "punto2.html";

$edad = null;
$edad_minima = 0;
$edad_mayoria = 18;

if (isset($_POST['calcular'])) {

    $edad = $_POST['edad'];

    if (($edad < $edad_mayoria) && ($edad > $edad_minima)) {
        echo "No es mayor de edad!!!";
    }elseif ($edad >= $edad_mayoria) {
        echo "Es mayor de edad!!";
    } else {
        echo "Ha ingresado una edad incorrecta";
    }
}

?>