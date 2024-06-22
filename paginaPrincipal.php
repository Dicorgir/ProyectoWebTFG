<?php // Se inicia la programación en PHP
session_start(); // Se inicia la sesión
?> 

<!DOCTYPE html> <!-- Se inicia el código HTML -->
<html lang="es"> <!-- Se establece el lenguaje en español ("es") -->
<head> <!-- Se inicia la cabecera de la página -->
  <meta charset="UTF-8"> <!-- Se establece la codificación de caracteres en UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Se establece la escala de la página -->
  <title>INICIO</title> <!-- Se establece el título de la página, en este caso es la página de Inicio -->
  <link rel="stylesheet" href="css/estiloPaginaPrincipal.css"> <!-- Se enlaza el archivo de estilos de la página en formato css -->
  <link rel="icon" href="img/logo-davag-studio.ico" type="image/x-icon"> <!-- Se establece el icono de la página -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- Se enlaza el archivo de estilos de Bootstrap -->
</head>
<body class="fondo-personalizado"> <!-- Se establece el cuerpo de la página con un fondo personalizado y dinámico -->
  <div id="particles-js"></div>  <!-- Se establece el contenedor de las partículas -->
  <header> <!-- Se inicia el encabezado de la página -->
    <div class="container"> <!-- Se establece el contenedor del encabezado -->
      <img src="img/logoCompletoDavagStudio.png" alt="Logo Davag Studio"> <!-- Se establece la imagen del logo de Davag Studio -->
      <nav> <!-- Se inicia la franja de navegación de la página -->
        <ul> <!-- Se establece la lista de elementos de la franja de navegación -->
          <li><b><a href="#">INICIO</a></b></li> <!-- Se establece el elemento de la lista con un enlace a la página de "Inicio" (en este caso nos lleva a la misma porque ya estamos en ella) -->
          <li><b><a href="sobreNosotros.php">SOBRE NOSOTROS</a></b></li> <!-- Se establece el elemento de la lista con un enlace a la página de "Sobre Nosotros" -->
          <li style="margin-right: 20px;"><b><a href="paginaQueEs.php">¿QUÉ ES DAVAG STUDIO?</a></b></li> <!-- Se establece el elemento de la lista con un enlace a la página de "¿Qué es Davag Studio?" -->
            <?php // Se establece el inicio de la programación en PHP
            if (isset($_SESSION['user_name'])) { // Se establece una condición para verificar si el usuario ha iniciado sesión
              echo '<button class="boton_inicio" id="userButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">' . htmlspecialchars($_SESSION['user_name']) . '</button>'; // Se muestra el nombre del usuario en un botón
            } else { // Si no se cumple la condición anterior
              echo '<button class="boton_inicio"><a href="inicioSesion.html">INICIAR SESIÓN</a></button>'; // Se muestra un botón para iniciar sesión
            } // Se cierra la condición
            ?>
          <label class="ui-switch"> <!-- Se establece una etiqueta para el switch de la página -->
            <input type="checkbox"> <!-- Se establece un input de tipo checkbox -->
            <div class="slider"> <!-- Se establece un contenedor para el switch -->
              <div class="circle"/></div> <!-- Se establece un círculo para el switch -->
            </div>
          </label>
        </ul>
      </nav>
    </div> 
  </header>
  <section> <!-- Se inicia la primera sección de la página -->
    <div class="container"> <!-- Se establece el contenedor de la sección -->
      <h2 style="text-align: center; font-family: Showcard Gothic Normal, monospace;"><b>Bienvenido a </b></h2> <!-- Se establece un título principal para la sección -->
      <h1 class="titulo">DAVAG STUDIO</h1> <!-- Se establece un título secundario para la sección (nombre de la empresa) -->
      <div class="logo-container"> <!-- Se establece un contenedor para el logo de la empresa -->
        <img src="img/logo-davag-studio.png" align="center" alt="logo sin titulo"> <!-- Se establece la imagen del logo de la empresa -->
      </div>
    </div>
  </section>
  <section> <!-- Se inicia la segunda sección de la página -->
    <div class="container2"> <!-- Se establece el contenedor de la sección -->
      <video controls autoplay width="640" height="360"> <!-- Se establece un video con controles, reproducción automática, ancho y alto -->
        <source src="video/video_presentacion.mp4" type="video/mp4"> <!-- Se establece la fuente del video en formato mp4 -->
        Tu navegador no soporta el elemento de video. <!-- Se muestra un mensaje si el navegador no soporta el video -->
      </video>
    </div>
  </section>

  <!-- Offcanvas para el menú de usuario (cuando el usuario haya iniciado sesión) -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header"> <!-- Se establece el encabezado del offcanvas -->
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú de Usuario</h5> <!-- Se establece el título del offcanvas -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> <!-- Se establece un botón para cerrar el offcanvas -->
    </div>
    <!-- Se establece el cuerpo del offcanvas -->
    <div class="offcanvas-body">
      <div> <!-- Se establece un contenedor para el nombre del usuario -->
        <?php // Se inicia la programación en PHP
        if (isset($_SESSION['user_name'])) { // Se establece una condición para verificar si el usuario ha iniciado sesión
          echo '<button class="btn btn-danger mt-3" id="logoutButton">Cerrar Sesión</button>'; // Se muestra un botón para cerrar sesión
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Footer de la página -->
  <footer> 
    <div class="container"> <!-- Se establece el contenedor del footer -->
      <h4 style="color: blueviolet;" class="footerNombreEmpresa"><b>Davag Studios &copy; @2024</b></h4> <!-- Se establece el nombre de la empresa y el año de creación -->
      <a class="socialContainer containerOne" href="https://www.instagram.com/davag_studios/"> <!-- Se establece un contenedor para el enlace de Instagram -->
        <svg viewBox="0 0 16 16" class="socialSvg instagramSvg"> <!-- Se establece el icono de Instagram -->
          <!-- Se establece el path del icono de Instagram -->
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
        </svg>
      </a>
      <a class="socialContainer containerTwo" href="#"> <!-- Se establece un contenedor para el enlace de Twitter -->
        <svg viewBox="0 0 16 16" class="socialSvg twitterSvg"> <!-- Se establece el icono de Twitter -->
          <!-- Se establece el path del icono de Twitter -->
          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/> 
        </svg>
      </a>
      <a class="socialContainer containerThree" href="#"> <!-- Se establece un contenedor para el enlace de LinkedIn -->
        <svg viewBox="0 0 448 512" class="socialSvg linkdinSvg"> <!-- Se establece el icono de LinkedIn -->
          <!-- Se establece el path del icono de LinkedIn -->
          <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
        </svg>
      </a>
      <a class="socialContainer containerFour" href="#"> <!-- Se establece un contenedor para el enlace de WhatsApp -->
        <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg"> <!-- Se establece el icono de WhatsApp -->
          <!-- Se establece el path del icono de WhatsApp -->
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
        </svg>
      </a>
    </div>
  </footer>

  <!-- Scripts de Bootstrap primero -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Scripts de la página de partículas después -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script src="js/circulosParticulas.js"></script> <!-- Se enlaza el archivo de scripts de la página -->
  <script src="js/controlswitch.js"></script> <!-- Se enlaza el archivo de scripts del switch de la página -->
  <script src="js/offcanvas.js"></script> <!-- Se enlaza el archivo de scripts del offcanvas de la página -->

  <!-- Script para cerrar sesión -->
  <script>
    document.getElementById('logoutButton').addEventListener('click', function() { // Se establece un evento para cerrar sesión
      window.location.href = 'php/cerrarSesion.php'; // Al hacer clic en el botón, se redirige a la página de cerrar sesión en php y esta te llevará a la página principal
    });
  </script>
</body>
</html>
