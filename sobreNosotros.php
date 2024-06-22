<?php // Se inicia la programación en PHP
session_start(); // Se inicia la sesión
?>

<!DOCTYPE html> <!-- Se inicia el código HTML -->
<html lang="en"> <!-- Se establece el lenguaje de la página -->
<head> <!-- Se inicia la cabecera de la página -->
  <meta charset="UTF-8"> <!-- Se establece la codificación de caracteres -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Se establece la escala de la página -->
  <title>SOBRE NOSOTROS</title> <!-- Se establece el título de la página, en este caso es la página en la que habla sobre los integrantes de Davag Studio -->  
  <link rel="stylesheet" href="css/estiloPaginaPrincipal.css"> <!-- Se enlaza el archivo de estilos de la página en formato css-->
  <link rel="stylesheet" href="css/styles2.css"> <!-- Se enlaza el archivo de estilos llamado style1 en formato css-->
  <link rel="stylesheet" href="css/styles3.css"> <!-- Se enlaza el archivo de estilos llamado style2 en formato css-->
  <link rel="icon" href="img/logo-davag-studio.ico" type="image/x-icon"> <!-- Se enlaza el icono de la pestaña de la página -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- Se enlaza el archivo de estilos de bootstrap -->
</head>
<body class="fondo-personalizado"> <!-- Se establece la clase de la página con un fondo personalizado y dinámico -->
  <div id="particles-js"></div> <!-- Se establece el id de la página con un fondo de partículas -->
  <header> <!-- Se inicia el encabezado de la página -->
    <div class="container"> <!-- Se establece un contenedor en el encabezado de la página -->
        <img src="img/logoCompletoDavagStudio.png" alt="Logo Davag Studio"> <!-- Se establece una imagen con el logo de Davag Studio -->
        <nav> <!-- Se inicia la navegación de la página -->
        <ul> <!-- Se establece una lista en la navegación de la página -->
          <li><b><a href="paginaPrincipal.php">INICIO</a></b></li> <!-- Se establece el elemento de la lista con un enlace a la página de "Inicio" -->
          <li><b><a href="#">SOBRE NOSOTROS</a></b></li> <!-- Se establece el elemento de la lista con un enlace a la página de "Sobre Nosotros" (en este caso nos lleva a la misma porque ya estamos en ella) -->
          <li style="margin-right: 20px;"><b><a href="paginaQueEs.php">¿QUÉ ES DAVAG STUDIO?</a></b></li> <!-- Se establece el elemento de la lista con un enlace a la página de "¿Qué es Davag Studio?" -->
            <?php // Se inicia la programación en PHP
              if (isset($_SESSION['user_name'])) { // Se comprueba si la sesión del usuario está iniciada
                echo '<button class="boton_inicio" id="userButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">' . htmlspecialchars($_SESSION['user_name']) . '</button>'; // Se muestra un botón con el nombre
              } else { // Si no se cumple la condición anterior
                echo '<button class="boton_inicio"><a href="inicioSesion.html">INICIAR SESIÓN</a></button>'; // Se muestra un botón para iniciar sesión
              } // Se cierra la condición
            ?>
          <label class="ui-switch"> <!-- Se establece una etiqueta con una clase de interruptor --> 
            <input type="checkbox"> <!-- Se establece un tipo de entrada de interruptor -->
            <div class="slider"> <!-- Se establece un deslizador -->
              <div class="circle"></div> <!-- Se establece un círculo en el deslizador -->
            </div>
          </label>
          
        </ul>
        </nav>
      
    </div>
  </header>
  <section> <!-- Se inicia la sección de la página -->
    <div class="card"> <!-- Se establece una tarjeta en la sección de la página -->
        <div class="card-content"> <!-- Se establece un contenido de tarjeta en la tarjeta de la página -->
        <p class="card-title">SOBRE NOSOTROS</p> <!-- Se establece un título en la tarjeta de la página -->
        <p class="card-para">En Davag Studio, estamos revolucionando la forma en que disfrutas de tus juegos favoritos. Nuestro equipo de desarrolladores y visionarios ha creado un launcher <br> innovador que  
        te permite descargar y gestionar todos tus juegos en un solo lugar. Nos dedicamos a ofrecer una experiencia de usuario fluida y segura, facilitando <br> el acceso a una amplia variedad de títulos 
        emocionantes. Únete a la comunidad de Davag Studio y descubre una nueva dimensión en el mundo de los videojuegos.</p> <!-- Se establece un párrafo en la tarjeta de la página -->
        </div>
    </div>
  </section>
  <h2>MIEMBROS DEL EQUIPO</h2> <!-- Se establece un título en la página -->
  <p style="margin-bottom: 30px;"></p> <!-- Se establece un párrafo en la página -->
  <div class="card_group"> <!-- Se establece un grupo de tarjetas en la página -->
    <div class="card_individual"> <!-- Se establece una tarjeta individual en el grupo de tarjetas de la página -->
      <img src="img/fotoDiego.png" alt="fotoDiego" class="imagencarnet"> <!-- Se establece una imagen con la foto de uno de los miembros (Diego) -->
      <div class="Name"> <!-- Se establece un nombre en la tarjeta de la página -->
        <p>Diego Cornejo Giraldo</p> <!-- Se establece el nombre de uno de los miembros (Diego) -->
      </div>
      <div> <!-- Se establece un contenedor en la tarjeta de la página -->
        <a id="github" href="#"><svg viewBox="0 0 16 16" class="bi bi-github" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/s</svg>vg"> <!-- Se establece un enlace con un icono de GitHub -->
        <!-- Se establece un icono de GitHub -->
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
        </svg></a>
        &nbsp; <!-- Se establece un espacio en la tarjeta de la página -->
        &nbsp;
        &nbsp;
        <a id="instagram" href="#"><svg viewBox="0 0 16 16" class="bi bi-instagram" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"> <!-- Se establece un enlace con un icono de Instagram -->
        <!-- Se establece un icono de Instagram -->
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
        </svg></a>
        &nbsp; <!-- Se establece un espacio en la tarjeta de la página -->
        &nbsp;
        &nbsp;
        <a id="facebook" href="#"><svg viewBox="0 0 16 16" class="bi bi-facebook" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"> <!-- Se establece un enlace con un icono de Facebook -->
        <!-- Se establece un icono de Facebook -->
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
        </svg></a>
        &nbsp; <!-- Se establece un espacio en la tarjeta de la página -->
        &nbsp;
        &nbsp;
        <a id="twitter" href="#"><svg viewBox="0 0 16 16" class="bi bi-twitter" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"> <!-- Se establece un enlace con un icono de Twitter -->
          <!-- Se establece un icono de Twitter -->
          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </svg></a>
      </div>
    </div>
    <div class="card_individual"> <!-- Se establece una tarjeta individual en el grupo de tarjetas de la página -->
      <img src="img/fotoVictor.png" alt="fotoVictor" class="imagencarnet"> <!-- Se establece una imagen con la foto de uno de los miembros (Victor) -->
      <div class="Name"> <!-- Se establece un nombre en la tarjeta de la página -->
        <p>Victor Barragán</p> <!-- Se establece el nombre de uno de los miembros (Victor) -->
      </div>
      <div>
        <a id="github" href="#"><svg viewBox="0 0 16 16" class="bi bi-github" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"> <!-- Se establece un enlace con un icono de GitHub -->
        <!-- Se establece un icono de GitHub -->
        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
        </svg></a>
        &nbsp;  <!-- Se establece un espacio en la tarjeta de la página -->
        &nbsp;
        &nbsp;
        <a id="instagram" href="#"><svg viewBox="0 0 16 16" class="bi bi-instagram" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"> <!-- Se establece un enlace con un icono de Instagram -->
        <!-- Se establece un icono de Instagram -->  
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
        </svg></a>
        &nbsp; <!-- Se establece un espacio en la tarjeta de la página -->
        &nbsp;
        &nbsp;
        <a id="facebook" href="#"><svg viewBox="0 0 16 16" class="bi bi-facebook" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"> <!-- Se establece un enlace con un icono de Facebook -->
        <!-- Se establece un icono de Facebook -->
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
        </svg></a>
        &nbsp; <!-- Se establece un espacio en la tarjeta de la página -->
        &nbsp;
        &nbsp;
        <a id="twitter" href="#"><svg viewBox="0 0 16 16" class="bi bi-twitter" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"> <!-- Se establece un enlace con un icono de Twitter -->
        <!-- Se establece un icono de Twitter -->
        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </svg></a>
      </div>
    </div>
  </div>
<p></p>  
  
<!-- Offcanvas para el menú de usuario (cuando el usuario haya iniciado sesión) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header"> <!-- Se establece un encabezado en el offcanvas de la página -->
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú de Usuario</h5> <!-- Se establece un título en el offcanvas de la página -->
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> <!-- Se establece un botón de cierre en el offcanvas de la página -->
    </div>
    <!-- Se establece un cuerpo del offcanvas -->
    <div class="offcanvas-body">
      <div> <!-- Se establece un contenedor en el offcanvas de la página -->
        <?php // Se inicia la programación en PHP
        if (isset($_SESSION['user_name'])) { // Se comprueba si la sesión del usuario está iniciada
          echo '<button class="btn btn-danger mt-3" id="logoutButton">Cerrar Sesión</button>'; // Se muestra un botón para cerrar sesión
        }
        ?>
      </div>
    </div>
  </div>
<!-- Se establece el footer de la página -->
<footer>
  <div class="container"> <!-- Se establece un contenedor en el footer de la página -->
    <h4 style="color: blueviolet;" class="footerNombreEmpresa"><b>Davag Studios &copy; @2024</b></h4> <!-- Se establece el nombre de la empresa y el año de creación -->
    <a class="socialContainer containerOne" href="https://www.instagram.com/davag_studios/"> <!-- Se establece un enlace con un icono de Instagram -->
      <svg viewBox="0 0 16 16" class="socialSvg instagramSvg"> <!-- Se establece el icono de Instagram -->
        <!-- Se establece el path del icono de Instagram -->
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
      </svg>
    </a>
    <a class="socialContainer containerTwo" href="#"> <!-- Se establece un enlace con un icono de Twitter -->
      <svg viewBox="0 0 16 16" class="socialSvg twitterSvg"> <!-- Se establece el icono de Twitter -->
        <!-- Se establece el path del icono de Twitter -->
        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
      </svg>
    </a>
    
    <a class="socialContainer containerThree" href="#"> <!-- Se establece un enlace con un icono de LinkedIn -->
      <svg viewBox="0 0 448 512" class="socialSvg linkdinSvg"> <!-- Se establece el icono de LinkedIn -->
        <!-- Se establece el path del icono de LinkedIn -->
        <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
      </svg>
    </a>
    <a class="socialContainer containerFour" href="#"> <!-- Se establece un enlace con un icono de WhatsApp -->
      <svg viewBox="0 0 16 16" class="socialSvg whatsappSvg"> <!-- Se establece el icono de WhatsApp -->
        <!-- Se establece el path del icono de WhatsApp -->
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
      </svg>
    </a>
  </div>
</footer>

  <!-- Scripts de Bootstrap y JavaScript  (partículas) -->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/CirculosParticulas.js"></script> <!-- Se establece el script de la aplicación -->
  <script src="js/controlswitch.js"></script> <!-- Se establece el script de control deñ switch -->
  <script src="js/offcanvas.js"></script> <!-- Se enlaza el archivo de JavaScript de Offcanvas -->
  
  <!-- Script para cerrar sesión -->
  <script>
    document.getElementById('logoutButton').addEventListener('click', function() { // Se establece un evento para cerrar sesión
      window.location.href = 'php/cerrarSesion.php'; // Al hacer clic en el botón, se cerrará la sesión del usuario y esta te llevará a la página principal
    });
  </script>
</body>
</html>
