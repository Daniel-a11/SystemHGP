<?php
session_start();
include 'conexion.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$validar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'
    and contraseña = '$contraseña'");

if (mysqli_num_rows($validar) > 0) {
    $_SESSION['usuario'] = $correo;
    header('location: ../indexHGP.php');
    exit;
} else {
    echo '
            <script>
                alert("Usuario ni existe, favor de verificar los datos");
                window.location = "../index.php";
            </script>
        ';
    exit;
}
