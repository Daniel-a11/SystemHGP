<?php
    // Datos de la conexión de la bd
    $host = "localhost";     
    $username = "root";     
    $password = "";        
    $database = "registrohospital";  

    // Crear la conexión
    $conexion = new mysqli($host, $username, $password, $database);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    } else {
        echo "Conexión exitosa a la base de datos.";
    }

    // $conexion = mysqli_connect("localhost", "root", "", "registrohospital")


?>
