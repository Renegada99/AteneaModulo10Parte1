<?php

// include "punto3.html";


if (isset($_GET['guardar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];
    echo 'Nombre: ' .$nombre .'<br>';
    echo 'Apellido: ' .$apellido .'<br>';
    echo 'Cédula: ' .$cedula .'<br>';
}
?>