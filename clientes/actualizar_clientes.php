<?php
include '../config/conexion.php'; 

    // Recuperamos los datos del formulario  

    $id = $_POST["id"];
    $apellido = $_POST["apellido"];
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];
    $sexo = $_POST["sexo"];
    $domicilio = $_POST["domicilio"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $datos = $_POST["datos"];
    $nombre = $_POST["nombre"];
   


    // Actualizamos los datos en la base de datos
   
    $sql = "UPDATE clientes SET nombre='$nombre',apellido='$apellido',dni=$dni,sexo='$sexo',domicilio='$domicilio',telefono='$telefono',correo='$correo',datos_importantes='$datos_importantes' WHERE id_cliente = $id";


    //Ejecutamos la consulta y el resultado la almacenamos en la variable.
    $resultado = mysqli_query($scon,$sql);

    //preguntamos si los datos se guardaron correctamente
    if ($resultado) {
        echo "<script> alert('Se han actualizado los datos')</script>";
        header("location:clientes.php");

    }else {
        echo "Ha ocurrido un error, intentalo de nuevo". mysqli_error($scon);
    }
   
?>
