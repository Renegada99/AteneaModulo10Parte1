<?php

//Información PHP
//phpinfo();

include "punto1.html";

//Declaración de variables

$resultado= null;


if (isset($_POST['operar'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operaciones_aritmeticas'];

    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            echo 'La suma es: ' .$resultado;
            break;
        
        case 'resta':
            $resultado = $numero1 - $numero2;
            echo 'La resta es: ' .$resultado;
            break;

        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            echo 'La multiplicación es: ' .$resultado;
            break;

        case 'division':
            if($numero2 != 0){
                $resultado = $numero1 / $numero2;
                echo 'La división es: ' .$resultado;
            }else{
                echo 'División sobre 0';
            }            
            break;

        case 'potencia':
            $resultado= $numero1 ** $numero2;
            echo 'La potencia es: ' .$resultado;
            break;

        case 'raiz':
            $resultado = sqrt($numero1);
            echo 'La raiz cuadrada del primer número es: ' .$resultado .'<br>';
            $resultado = sqrt($numero2);
            echo 'La raiz cuadrada del segundo número es: ' .$resultado .'<br>' ;
            break;    

        default:
            echo "Opción invalida";
            break;
    }
}
?>
