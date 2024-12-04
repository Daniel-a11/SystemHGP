<?php
// Importar libreria para realizar la conexion
include 'conexion.php';

// Capturar los datos enviados desde el formulario index mediante el método POST
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$contraseñaAdmin;
//$contraseña = password_hash($contraseña, PASSWORD_BCRYPT); //Incriptar contraseña

// Verificar si el correo o el usuario ya existen en la base de datos
// Aquí utilizamos una consulta SQL para seleccionar cualquier registro donde el correo o el usuario coincidan con los ingresados

$verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' OR usuario = '$usuario'");

if (mysqli_num_rows($verificar) > 0) {
    // Si existe un registro con el mismo correo o usuario, obtenemos ese registro
    $registroExistente = mysqli_fetch_assoc($verificar);

    // Verificamos si el correo ya existe y mostramos un mensaje adecuado
    if ($registroExistente['correo'] === $correo) {
        echo '
            <script>
                alert("Este correo ya está registrado.");
                window.location = "../index.php";
            </script>
        ';
    }
    // Verificamos si el nombre de usuario ya existe y mostramos un mensaje adecuado
    elseif ($registroExistente['usuario'] === $usuario) {
        echo '
            <script>
                alert("Este nombre de usuario ya está registrado.");
                window.location = "../index.php";
            </script>
        ';
    }
} else {
    // Si no existe ningún registro con el mismo correo o usuario, procedemos a registrar el nuevo usuario
    // Creamos la consulta SQL para insertar los datos en la tabla usuarios
    $registroUsuario = "INSERT INTO usuarios(nombre, correo, usuario, contraseña) 
                        VALUES('$nombre', '$correo', '$usuario', '$contraseña')";

    // Ejecutamos la consulta para insertar el nuevo usuario en la base de datos
    $ejecutar = mysqli_query($conexion, $registroUsuario);

    // Verificamos si la inserción fue exitosa
    if ($ejecutar) {
        // Si el registro fue exitoso, mostramos un mensaje de éxito y redirigimos al usuario a la página principal
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../principal.php";
            </script>
        ';
    } else {
        // Si hubo un error al guardar el usuario, mostramos un mensaje de error
        echo '
            <script>
                alert("Inténtalo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';
    }
}

// Cerramos la conexión con la base de datos para liberar recursos
mysqli_close($conexion);
