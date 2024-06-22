/**
 * Añade un evento que se ejecuta cuando el contenido del DOM ha sido completamente cargado.
 * @param {Event} event - El evento que se dispara cuando el contenido del DOM ha sido completamente cargado.
 */
document.addEventListener('DOMContentLoaded', (event) => {
  /**
   * Obtiene el elemento con el id "userButton" y lo almacena en la constante "userButton".
   * @type {HTMLElement}
   */
  const userButton = document.getElementById('userButton');

  // Verifica si el elemento userButton existe
  if (userButton) {
    /**
     * Añade un evento que se ejecuta cuando se hace clic en el botón "userButton".
     */
    userButton.addEventListener('click', function () {
      /**
       * Obtiene el elemento con el id "offcanvasExample" y lo almacena en la variable "offcanvasElement".
       * @type {HTMLElement}
       */
      var offcanvasElement = document.getElementById('offcanvasExample');

      /**
       * Inicializa un nuevo objeto Offcanvas con el elemento "offcanvasElement".
       * @type {bootstrap.Offcanvas}
       */
      var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

      // Muestra el offcanvas llamando al método 'show()' de la instancia 'offcanvas'.
      offcanvas.show();
    });
  }
});
