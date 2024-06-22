/**
 * Añade un evento que se ejecuta cuando el contenido del DOM ha sido completamente cargado.
 */
document.addEventListener("DOMContentLoaded", function() {
    /**
     * El elemento del modal.
     * @type {HTMLElement}
     */
    var modal = document.getElementById("myModal");
    
    /**
     * Los botones que disparan la apertura del modal.
     * @type {NodeListOf<HTMLElement>}
     */
    var btns = document.querySelectorAll(".card-button_games");
    
    /**
     * El botón para cerrar el modal.
     * @type {HTMLElement}
     */
    var span = document.getElementsByClassName("close")[0];
    
    /**
     * El texto dentro del modal.
     * @type {HTMLElement}
     */
    var modalText = modal.querySelector("p");
    
    // Itera sobre cada botón en "btns" y añade un evento "onclick" a cada botón
    btns.forEach(function(btn, index) {
        /**
         * Evento "onclick" para cada botón.
         */
        btn.onclick = function() {
            /**
             * Información para mostrar en el modal.
             * @type {string}
             */
            var info = "";
            
            // Utiliza una declaración switch para seleccionar el mensaje de información correcto basado en el índice del botón
            switch(index) {
                case 0:
                    info = "<strong>Descripción:<br></strong>Sumérgete en la nostalgia con nuestra versión del icónico Mario Bros," +
                    " recreado con <i><b>Unity</b></i>. Este proyecto trae de vuelta la magia del clásico juego de plataformas, manteniendo su esencia y jugabilidad original mientras se beneficia de las capacidades modernas del motor Unity.<br>" +
                    "<strong>Gráficos:<br></strong>Corre, salta y derrota enemigos en niveles diseñados para replicar la experiencia del primer Mario Bros.<br>" +
                    "<strong>Tamaño:<br></strong>35KB<br>" +
                    "<img src='/img/iconoUnity.png' alt='Unity' width='100' height='100' style='display: block; margin: 0 auto;'>"; // Super Mario Bros
                    break;
                case 1:
                    info = "<strong>Descripción:<br></strong>Disfruta del clásico Snake Game desarrollado en <b><i>Python</i></b>. Este proyecto ofrece una recreación fiel del juego que ha entretenido a generaciones, manteniendo su jugabilidad simple y adictiva.<br>" +
                    "<strong>Gráficos:<br></strong>Un estilo visual sencillo que captura la esencia del clásico Snake.<br>" +
                    "<strong>Tamaño:<br></strong>74KB<br>" +
                    "<img src='/img/iconoPython.png' alt='Python' width='100' height='100' style='display: block; margin: 0 auto;'>"; // Snake Game
                    break;
                case 2:
                    info = "<strong>Descripción:<br></strong>Embárcate en una divertida aventura con Flappy Penguin, una variación del icónico Flappy Bird, pero protagonizada por un encantador pingüino. Este juego, desarrollado en <b><i>C#</b></i>, mantiene la adictiva jugabilidad del original mientras introduce un ambiente helado y nuevos desafíos.<br>" +
                    "<strong>Gráficos:<br></strong>Un entorno ártico con gráficos encantadores y un diseño de personajes adorables.<br>" +
                    "<strong>Tamaño:<br></strong>4KB<br>" +
                    "<img src='/img/iconoC.png' alt='C#' width='100' height='100' style='display: block; margin: 0 auto;'>"; // Flappy Pinguin
                    break;
                default:
                    info = "Información no disponible";
            }
            
            // Establece el contenido HTML de "modalText" al valor de "info"
            modalText.innerHTML = info;
            // Establece el estilo de "modal" a "block" para mostrar el modal
            modal.style.display = "block";
        };
    });
    
    /**
     * Evento "onclick" para el botón de cerrar el modal.
     */
    span.onclick = function() {
        modal.style.display = "none";
    };
    
    /**
     * Evento "onclick" para cerrar el modal cuando se hace clic fuera de él.
     * @param {Event} event - El evento de clic.
     */
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});
