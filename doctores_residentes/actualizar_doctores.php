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
        $actualizar = "update doctores set Nombre='{$Nombre}', Apellido='{$Apellido}', Direccion='{$Direccion}', Telefono='{$Telefono}' where Codigo='{$Codigo}'";
        //ejecutar el codigo en la base de datos
        $ejecutar = mysqli_query($conexion, $actualizar);
        
        $json = array(); //array para trasladar informacion en formato JSON, para la app Android

        $datos["Codigo"]=$Codigo;
        $datos["Nombre"]=$Nombre;
        $datos["Apellido"]=$Apellido; 
        $datos["Direccion"]=$Direccion;
        $datos["Telefono"]=$Telefono;
            
        $json['vehiculos'][]=$datos;
        echo json_encode($json);
        
    
?>