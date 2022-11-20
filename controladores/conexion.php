<?php
    $hostBD="localhost";
	$nombreBD="sanyo_associate";
	$usuarioBD="root";
	$contraseñaBD="Juancho10*";
    $puertoBD="3306";

    //conexión con base de datos
    try {
        $conexion = mysqli_connect($hostBD,$usuarioBD,$contraseñaBD, $nombreBD, $puertoBD);
        
    } catch ( Exception $e) {
        echo 'Error en la conexión: ', $e->getMessage(), "\n"
    }




?>