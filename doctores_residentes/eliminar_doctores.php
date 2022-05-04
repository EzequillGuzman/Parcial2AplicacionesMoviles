<?php
        //utilizar el archivo que tiene la conexión
        include_once 'conexion.php';
        //Recibir el codigo que se desea eliminar
        $Codigo=$_GET['Codigo'];
        //$delete = "delete from vehiculos where id=".$id;
        $delete = "delete from doctores where Codigo='{$Codigo}'";
        //ejecutar el codigo en la base de datos
        $ejecutar = mysqli_query($conexion, $delete);
        
        $json = array(); //array para trasladar informacion en formato JSON, para la app Android
 
        
        $datos["Codigo"]=$Codigo;
        $datos["Nombre"]="Nombre Eliminado";
        $datos["Apellido"]="Apellido Eliminado";
        $datos["Direccion"]="Direccion Eliminada";
        $datos["Telefono"]="Telefono Eliminado";
            
        $json['doctores'][]=$datos;
        echo json_encode($json);
        
    
?>