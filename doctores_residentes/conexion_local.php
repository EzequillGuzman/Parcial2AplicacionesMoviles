<?php
    $host="localhost";
    $usuario="root";
    $contra="";
    $basedatos="residentes";
    
    $conexion = mysqli_connect($host, $usuario, $contra,$basedatos);
    if(!$conexion){
        echo "Error en conexión a MySQL";
    }
?> 