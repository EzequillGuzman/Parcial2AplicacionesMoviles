<?php
        //utilizar el archivo que tiene la conexión
        include_once 'conexion.php';
        //Recibir los datos que deseo insertar
        $Codigo=$_GET['Codigo'];
        $Nombre=$_GET['Nombre'];
        $Apellido=$_GET['Apellido'];
        $Direccion=$_GET['Direccion'];
        $Telefono=$_GET['Telefono'];

        //SQL para insertar datos;
        $insertar = "insert into doctores (Codigo, Nombre, Apellido, Direccion, Telefono) values('{$Codigo}','{$Nombre}','{$Apellido}','{$Direccion}','{$Telefono}')";
        //ejecutar el codigo en la base de datos
        $ejecutar = mysqli_query($conexion, $insertar);
        
        $json = array(); //array para trasladar informacion en formato JSON, para la app Android

        
        $datos["Codigo"]=$Codigo;
        $datos["Nombre"]=$Nombre;
        $datos["Apellido"]=$Apellido;
        $datos["Direccion"]=$Direccion;
        $datos["Telefono"]=$Telefono;
            
        $json['doctores'][]=$datos;
        echo json_encode($json);
        
    
?>