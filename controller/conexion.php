<?php
    $hostBD="localhost";
	$nombreBD="sanyo";
	$usuarioBD="root";
	$contraseñaBD="Juancho10*";
    $puertoBD="3306";

    $conexion = mysqli_connect($hostBD,$usuarioBD,$contraseñaBD, $nombreBD,$puertoBD);

    //consultas para loguearse
    $consulta1=("select correo from usuario");
    $consulta2=("select contraseña_usuario from usuario");
    $consulta3=("select id_rol from usuario");
    try {
        $conexion = mysqli_connect($hostBD,$usuarioBD,$contraseñaBD, $nombreBD, $puertoBD);
        print("conexión exitosa");
    } catch ( Exception $e) {
        echo "Error en la conexión: ".$e->getMessage()."\n";
        exit;
    }

    //matriz de las consultas

    $matrizresultado1=mysqli_query($conexion,$consulta1);
    $matrizresultado2=mysqli_query($conexion,$consulta2);
    $matrizresultado3=mysqli_query($conexion,$consulta3);

    //Se recorren las matrices para buscar los datos

    while ($fila=mysqli_fetch_row($matrizresultado1)) {
        $user[]=$fila[0];
    }
    while($fila=mysqli_fetch_row($matrizresultado2)){
        $pass[]=$fila[0];
    }
    while ($fila=mysqli_fetch_row($matrizresultado3)) {
        $rol[]=$fila[0];
    }

    mysqli_close($conexion);


?>