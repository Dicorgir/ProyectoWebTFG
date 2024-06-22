/**
 * Selecciona el elemento checkbox del documento y lo almacena en la constante "checkbox".
 * @type {HTMLInputElement}
 */
const checkbox = document.querySelector('input[type="checkbox"]');

/**
 * Añade un evento que escucha cambios en el estado del checkbox (marcado/desmarcado).
 */
checkbox.addEventListener('change', function() {
  /**
   * Selecciona todos los elementos con la clase "card_individual" y los almacena en la constante "cards".
   * @type {NodeListOf<HTMLElement>}
   */
  const cards = document.querySelectorAll('.card_individual');
  
  /**
   * Selecciona el primer elemento con la clase "footerNombreEmpresa" y lo almacena en la constante "footerNombreEmpresa".
   * @type {HTMLElement}
   */
  const footerNombreEmpresa = document.querySelector('.footerNombreEmpresa');
  
  // Verifica si el checkbox está marcado
  if (this.checked) {
    // Cambia el color de fondo del body a "#262626" (gris oscuro)
    document.body.style.backgroundColor = "#262626";
    
    // Cambia el color del fondo del footer a gris
    document.querySelector('footer').style.backgroundColor = "gray";
    
    // Cambia el color del texto del body a blanco
    document.body.style.color = "white";
    
    // Cambia el color de fondo del primer botón a gris
    document.querySelector('button').style.backgroundColor = "gray";
    
    // Cambia el color del texto del primer botón a blanco
    document.querySelector('button').style.color = "white";
    
    // Iteramos sobre cada elemento en "cards" y cambia su color de fondo a negro
    cards.forEach(card => {
      card.style.backgroundColor = "black";
    });
    
    // Cambiar el color del texto del elemento "footerNombreEmpresa" a blanco
    footerNombreEmpresa.style.color = "white";
  } else { // Si el checkbox no está marcado
    // Cambia el color de fondo del "body" a "#ddc1f1"
    document.body.style.backgroundColor = "#ddc1f1";
    
    // Cambia el color del texto del "body" a "#000000" (negro)
    document.body.style.color = "#000000";
    
    // Cambia el color de fondo del primer botón a blanco
    document.querySelector('button').style.backgroundColor = "white";
    
    // Cambia el color del texto del primer botón a negro
    document.querySelector('button').style.color = "black";
    
    // Cambia el color de fondo del "footer" a blanco
    document.querySelector('footer').style.backgroundColor = "white";
    
    // Itera sobre cada elemento en "cards" y cambia su color de fondo a "#ffffff" (blanco)
    cards.forEach(card => {
      card.style.backgroundColor = "#ffffff";
    });
    
    // Restablece el color del texto del elemento "footerNombreEmpresa" a su valor por defecto
    footerNombreEmpresa.style.color = "";
  }
});
