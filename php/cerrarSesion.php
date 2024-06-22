<?php
/**
 * Este script PHP maneja la finalización de la sesión actual del usuario.
 *
 * Se encarga de:
 * - Iniciar la sesión.
 * - Eliminar todas las variables de sesión.
 * - Destruir la sesión actual.
 * - Redirigir al usuario a la página principal después de finalizar la sesión.
 */

session_start(); // Inicia la sesión

session_unset(); // Elimina todas las variables de la sesión

session_destroy(); // Destruye la sesión

header("Location: ../paginaPrincipal.php"); // Redirige al usuario a la página principal

exit(); // Finaliza el script
?>
