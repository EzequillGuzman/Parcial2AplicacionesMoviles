<?php
    $host="localhost";
    $usuario="id18324553_residentes";
    $contra="[teo+2iHOgA|j{K2";
    $basedatos="id18324553_doctores";
    
    $conexion = mysqli_connect($host, $usuario, $contra,$basedatos);
    if(!$conexion){
        echo "Error en conexión a MySQL";
    }
?>