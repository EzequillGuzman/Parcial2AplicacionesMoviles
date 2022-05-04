<?php
    //utilizar el archivo que tiene la conexión
    include_once 'conexion.php';
    //obtener todos los datos de la tabla 
    $busqueda = "select * from doctores"; 

    //ejecutar el codigo y obtener el resultado (variable de conexion, variable con codigo sql)
    $resultado_busqueda = mysqli_query($conexion,$busqueda);
    
    //array para tranformar los datos a formato JSON
    $json = array();
    //ver si existen o no registros
    $contar = 0;
    while($datos = mysqli_fetch_array($resultado_busqueda)){
        $json['doctores'][]=$datos;
        $contar = $contar+1;
    }
    if($contar==0){
        $datos["Codigo"]="Código no localizado";
        $datos["Nombre"]="Nombre no localizado";
        $datos["Apellido"]="Apellido no localizado";
        $datos["Dirección"]="Dirección no localizada";
        $datos["Telefono"]="Telefono no localizado";
        $json['doctores'][]=$datos;
    }

    mysqli_close($conexion);//cerrar la conexion
    
    //convertir los datos del array en JSON y mostrarlo
    echo json_encode($json);
    


?>