<?php
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

// Inicializar variables
$error_message = "";

// Obtener los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    // Consulta usando sentencias preparadas
    $stmt = $conn->prepare("SELECT nombre_usuario, contrasena FROM Usuarios WHERE correo = ?");
    
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    // Vincular los parámetros
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    // Verificar si el usuario existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nombre_usuario, $hashed_password);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($contrasena, $hashed_password)) {
            // Iniciar sesión exitosa, manejar la sesión aquí
            session_start();
            $_SESSION['user_name'] = $nombre_usuario;
            $_SESSION['user_email'] = $correo;

            // Redirigir a la página principal
            header("Location: ../paginaPrincipal.php");
            exit();
        } else {
            // Contraseña incorrecta
            $error_message = "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        $error_message = "Usuario no encontrado.";
    }

    // Cerrar la consulta
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html> <!-- Página de confirmación -->
<html lang="en"> <!-- Lenguaje de la página -->
<head> <!-- Encabezado de la página -->
    <meta charset="UTF-8"> <!-- Codificación de la página -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Escala de la página -->
    <title>PÁGINA DE ERROR</title> <!-- Título de la página -->
    <link rel="icon" href="/img/logo-davag-studio.ico" type="image/x-icon"> <!-- Ícono de la página -->
    <link rel="stylesheet" href="css/stylePrincipal.css"> <!-- Estilos de la página -->
</head>
<style>
    /* Estilos de la página */
    @keyframes confirmationAnimation {
        0% { transform: scale(0); opacity: 0; }
        50% { transform: scale(1.2); opacity: 1; }
        100% { transform: scale(1); opacity: 1; }
    }

    .confirmation-container {
        display: flex;
        justify-content: center;
        align-items: center;
        animation: confirmationAnimation 1s ease-in-out;
    }
</style>
<!-- Cuerpo de la página -->
<body style="background-color: #cf9ee0;">
    <!-- Encabezado de la página -->
    <h1 style="color: red; text-align: center; padding-top: 120px; font-size: 50px;" class="confirmation-container">¡ERROR!</h1>
    <!-- Contenedor de la imagen -->
    <div class="confirmation-container">
        <!-- Imagen de error -->
        <img src="/img/logo_error.png" alt="verificacion" style="width: 400px; height: 350px;">
    </div>
    <!-- Contenedor del mensaje -->
    <script>
        // Mensaje de confirmación
        window.addEventListener('load', function () { 
            setTimeout(function () {
                window.location.href = "../inicioSesion.html";
            }, 5000);
        });
    </script>
</body>
</html>
