<?php
/**
 * Este script PHP simula la descarga del launcher del juego después de verificar la sesión del usuario.
 *
 * Realiza las siguientes acciones:
 * - Inicia la sesión.
 * - Verifica si hay una sesión activa.
 * - Redirige al usuario al inicio de sesión si no hay sesión activa.
 * - Función para simular la descarga del archivo del launcher.
 * - Muestra mensajes de error si la simulación de descarga falla.
 */

session_start(); // Inicia la sesión

// Verifica si hay una sesión activa
if (!isset($_SESSION['user_name'])) {
    // Si no hay sesión activa, redirige al usuario al inicio de sesión
    header('Location: inicioSesion.html');
    exit();
}

// Nombre del archivo del launcher
$launcherFile = 'launcher.exe'; // Nombre del archivo del launcher

/**
 * Función para simular la descarga del archivo del launcher.
 *
 * @param string $rutaArchivo La ruta del archivo del launcher a simular la descarga.
 */
function simularDescargaLauncher($rutaArchivo) {
    // Simula la descarga mostrando un mensaje de alerta en JavaScript
    echo "<script>alert('Descargando launcher'); window.location.href='../paginaPrincipal.php';</script>";
    exit();
}

// Ruta donde está almacenado el archivo del launcher (simulación)
$rutaLauncher = '../launcher/' . $launcherFile;

// Llama a la función para simular la descarga del archivo del launcher
simularDescargaLauncher($rutaLauncher);
?>
