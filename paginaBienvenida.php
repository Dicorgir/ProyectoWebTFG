<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(45deg, #d9abef, #c444d5);
            font-family: 'Arial', sans-serif;
            overflow: hidden; /* Oculta cualquier contenido que se desborde */
        }
        .titulo {
            font-size: 90px;
            color: #fff;
            position: relative; /* Posicionamiento relativo para animaciones */
            animation: glitch 1s infinite; /* Aplica la animación 'glitch' de 1 segundo infinitamente */
        }
        @keyframes glitch {
            0% {
                text-shadow: 2px 2px #00ffea, -2px -2px #ff007c; /* Sombra de texto en diagonal */
                transform: translate(0); /* Sin transformación inicial */
            }
            20% {
                text-shadow: 2px -2px #00ffea, -2px 2px #ff007c; /* Cambia la sombra de texto */
                transform: translate(-2px, 2px); /* Pequeña traslación */
            }
            40% {
                text-shadow: -2px 2px #00ffea, 2px -2px #ff007c; /* Cambia la sombra de texto */
                transform: translate(2px, -2px); /* Otra pequeña traslación */
            }
            60% {
                text-shadow: -2px -2px #00ffea, 2px 2px #ff007c; /* Cambia la sombra de texto */
                transform: translate(-2px, -2px); /* Otra pequeña traslación */
            }
            80% {
                text-shadow: 2px 2px #00ffea, -2px -2px #ff007c; /* Cambia la sombra de texto */
                transform: translate(2px, 2px); /* Otra pequeña traslación */
            }
            100% {
                text-shadow: -2px -2px #00ffea, 2px 2px #ff007c; /* Cambia la sombra de texto */
                transform: translate(0); /* Sin transformación final */
            }
        }
        .background {
            position: absolute; /* Posición absoluta para el fondo */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Capa detrás del contenido principal */
            overflow: hidden; /* Oculta cualquier contenido que se desborde */
        }
        .glitch-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(90deg, transparent, rgba(0,0,0,0.1), transparent),
                linear-gradient(45deg, #00ffea, #ff007c);
            background-size: 400% 400%;
            animation: glitch-background 10s linear infinite;
        }
        @keyframes glitch-background {
            0% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 0%;
            }
            100% {
                background-position: 0% 0%;
            }
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="glitch-background"></div> <!-- Fondo animado con efecto glitch -->
    </div>
    <div class="titulo">REDIRIGIENDO <br> A LA PÁGINA PRINCIPAL...</div> <!-- Texto de bienvenida con efecto glitch -->
    <script>
        // Redirección después de 6 segundos
        setTimeout(function() {
            window.location.href = 'paginaPrincipal.php'; // Redirige a paginaPrincipal.php después de 7 segundos
        }, 6000);
    </script>
</body>
</html>
