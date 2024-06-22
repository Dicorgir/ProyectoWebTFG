<?php
/**
 * Este script PHP maneja el registro de usuarios en la base de datos y muestra una página de confirmación.
 *
 * Realiza las siguientes acciones:
 * - Configura los parámetros de conexión a la base de datos MySQL.
 * - Establece una conexión usando mysqli.
 * - Verifica si la conexión fue exitosa.
 * - Obtiene los datos del formulario de registro (nombre de usuario, correo y contraseña).
 * - Encripta la contraseña utilizando password_hash().
 * - Utiliza una consulta preparada para insertar los datos del usuario en la tabla 'Usuarios'.
 * - Muestra una página de confirmación si la inserción de datos fue exitosa.
 * - Muestra un mensaje de error si ocurre algún problema durante la inserción.
 * - Cierra la conexión a la base de datos al finalizar.
 */

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "launcher_videojuegos";
$port = 3307;

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre_usuario = $_POST['name'];
$correo = $_POST['email'];
$contrasena = $_POST['password']; // Obtener la contraseña del formulario

// Encriptar la contraseña
$hashed_password = password_hash($contrasena, PASSWORD_BCRYPT);

// Usar una consulta preparada para insertar datos en la tabla
$stmt = $conn->prepare("INSERT INTO Usuarios (nombre_usuario, correo, contrasena, juegos_descargados, tipo_usuario) VALUES (?, ?, ?, 'Null', 'Jugador')");
$stmt->bind_param("sss", $nombre_usuario, $correo, $hashed_password);

// Ejecutar la consulta y verificar si se insertaron los datos
if ($stmt->execute()) {
    // Los datos se insertaron correctamente, no se necesita hacer nada más aquí
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÁGINA DE CONFIRMACIÓN</title>
    <link rel="icon" href="/img/logo-davag-studio.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/stylePrincipal.css">
</head>
<style>
    /* Estilos de la página */
    @keyframes confirmationAnimation {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.2); opacity: 1; }
        100% { transform: scale(1); opacity: 1; }
    }
    /* Estilos del contenedor de la confirmación */
    .confirmation-container {
        display: flex;
        justify-content: center;
        align-items: center;
        animation: confirmationAnimation 1s ease-in-out;
    }
</style>
<body style="background-color: #cf9ee0;">
    <h1 style="color: blueviolet; text-align: center; padding-top: 120px; font-size: 50px;" class="confirmation-container">REGISTRO CONFIRMADO</h1>
    <div class="confirmation-container">
        <img src="/img/logo_Verificacion.png" alt="verificacion" style="width: 400px; height: 350px;">
    </div>
    <script>
        // Redireccionamiento después de 5 segundos
        window.addEventListener('load', function () { 
            setTimeout(function () {
                window.location.href = "../paginaPrincipal.php";
            }, 5000);
        });
    </script>
</body>
</html>
