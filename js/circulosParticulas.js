/**
 * Configuración para las partículas de círculos de las pestañas principales usando particles.js.
 * @param {Object} config - La configuración para las partículas.
 * @param {Object} config.particles - Configuración para las partículas individuales.
 * @param {Object} config.particles.number - Configuración para el número de partículas.
 * @param {number} config.particles.number.value - Número de partículas.
 * @param {Object} config.particles.number.density - Configuración para la densidad de las partículas.
 * @param {boolean} config.particles.number.density.enable - Habilitar densidad de partículas.
 * @param {number} config.particles.number.density.value_area - Área para calcular la densidad de las partículas.
 * @param {Object} config.particles.color - Configuración del color de las partículas.
 * @param {string} config.particles.color.value - Color de las partículas.
 * @param {Object} config.particles.shape - Configuración de la forma de las partículas.
 * @param {string} config.particles.shape.type - Tipo de forma de las partículas.
 * @param {Object} config.particles.shape.stroke - Configuración del borde de las partículas.
 * @param {number} config.particles.shape.stroke.width - Ancho del borde de las partículas.
 * @param {string} config.particles.shape.stroke.color - Color del borde de las partículas.
 * @param {Object} config.particles.shape.polygon - Configuración para partículas poligonales.
 * @param {number} config.particles.shape.polygon.nb_sides - Número de lados del polígono.
 * @param {Object} config.particles.shape.image - Configuración para partículas de imagen.
 * @param {string} config.particles.shape.image.src - Ruta de la imagen.
 * @param {number} config.particles.shape.image.width - Ancho de la imagen.
 * @param {number} config.particles.shape.image.height - Altura de la imagen.
 * @param {Object} config.particles.opacity - Configuración de la opacidad de las partículas.
 * @param {number} config.particles.opacity.value - Valor de opacidad de las partículas.
 * @param {boolean} config.particles.opacity.random - Habilitar opacidad aleatoria.
 * @param {Object} config.particles.opacity.anim - Configuración de la animación de la opacidad.
 * @param {boolean} config.particles.opacity.anim.enable - Habilitar animación de la opacidad.
 * @param {number} config.particles.opacity.anim.speed - Velocidad de la animación de la opacidad.
 * @param {number} config.particles.opacity.anim.opacity_min - Valor mínimo de opacidad en la animación.
 * @param {boolean} config.particles.opacity.anim.sync - Sincronizar animación de opacidad.
 * @param {Object} config.particles.size - Configuración del tamaño de las partículas.
 * @param {number} config.particles.size.value - Valor del tamaño de las partículas.
 * @param {boolean} config.particles.size.random - Habilitar tamaño aleatorio de las partículas.
 * @param {Object} config.particles.size.anim - Configuración de la animación del tamaño.
 * @param {boolean} config.particles.size.anim.enable - Habilitar animación del tamaño.
 * @param {number} config.particles.size.anim.speed - Velocidad de la animación del tamaño.
 * @param {number} config.particles.size.anim.size_min - Tamaño mínimo en la animación.
 * @param {boolean} config.particles.size.anim.sync - Sincronizar animación del tamaño.
 * @param {Object} config.particles.line_linked - Configuración para las líneas entre partículas.
 * @param {boolean} config.particles.line_linked.enable - Habilitar líneas entre partículas.
 * @param {number} config.particles.line_linked.distance - Distancia para conectar partículas con líneas.
 * @param {string} config.particles.line_linked.color - Color de las líneas entre partículas.
 * @param {number} config.particles.line_linked.opacity - Opacidad de las líneas entre partículas.
 * @param {number} config.particles.line_linked.width - Ancho de las líneas entre partículas.
 * @param {Object} config.particles.move - Configuración del movimiento de las partículas.
 * @param {boolean} config.particles.move.enable - Habilitar movimiento de las partículas.
 * @param {number} config.particles.move.speed - Velocidad del movimiento de las partículas.
 * @param {string} config.particles.move.direction - Dirección del movimiento de las partículas.
 * @param {boolean} config.particles.move.random - Habilitar movimiento aleatorio de las partículas.
 * @param {boolean} config.particles.move.straight - Habilitar movimiento recto de las partículas.
 * @param {string} config.particles.move.out_mode - Modo de salida de las partículas.
 * @param {boolean} config.particles.move.bounce - Habilitar rebote de las partículas.
 * @param {Object} config.particles.move.attract - Configuración del efecto de atracción de las partículas.
 * @param {boolean} config.particles.move.attract.enable - Habilitar efecto de atracción.
 * @param {number} config.particles.move.attract.rotateX - Rotación en el eje X para el efecto de atracción.
 * @param {number} config.particles.move.attract.rotateY - Rotación en el eje Y para el efecto de atracción.
 * @param {Object} config.interactivity - Configuración de la interactividad de las partículas.
 * @param {string} config.interactivity.detect_on - Elemento sobre el cual se detecta la interactividad.
 * @param {Object} config.interactivity.events - Configuración de los eventos de interactividad.
 * @param {Object} config.interactivity.events.onhover - Configuración de la interactividad al pasar el cursor.
 * @param {boolean} config.interactivity.events.onhover.enable - Habilitar interactividad al pasar el cursor.
 * @param {string} config.interactivity.events.onhover.mode - Modo de interactividad al pasar el cursor.
 * @param {Object} config.interactivity.events.onclick - Configuración de la interactividad al hacer clic.
 * @param {boolean} config.interactivity.events.onclick.enable - Habilitar interactividad al hacer clic.
 * @param {string} config.interactivity.events.onclick.mode - Modo de interactividad al hacer clic.
 * @param {boolean} config.interactivity.events.resize - Habilitar redimensionamiento responsivo.
 * @param {Object} config.interactivity.modes - Configuración de los modos de interactividad.
 * @param {Object} config.interactivity.modes.grab - Configuración del modo "grab".
 * @param {number} config.interactivity.modes.grab.distance - Distancia para el modo "grab".
 * @param {Object} config.interactivity.modes.grab.line_linked - Configuración de las líneas en el modo "grab".
 * @param {number} config.interactivity.modes.grab.line_linked.opacity - Opacidad de las líneas en el modo "grab".
 * @param {Object} config.interactivity.modes.bubble - Configuración del modo "bubble".
 * @param {number} config.interactivity.modes.bubble.distance - Distancia para el modo "bubble".
 * @param {number} config.interactivity.modes.bubble.size - Tamaño para el modo "bubble".
 * @param {number} config.interactivity.modes.bubble.duration - Duración del modo "bubble".
 * @param {number} config.interactivity.modes.bubble.opacity - Opacidad del modo "bubble".
 * @param {number} config.interactivity.modes.bubble.speed - Velocidad del modo "bubble".
 * @param {Object} config.interactivity.modes.repulse - Configuración del modo "repulse".
 * @param {number} config.interactivity.modes.repulse.distance - Distancia para el modo "repulse".
 * @param {number} config.interactivity.modes.repulse.duration - Duración del modo "repulse".
 * @param {Object} config.interactivity.modes.push - Configuración del modo "push".
 * @param {number} config.interactivity.modes.push.particles_nb - Número de partículas para el modo "push".
 * @param {Object} config.interactivity.modes.remove - Configuración del modo "remove".
 * @param {number} config.interactivity.modes.remove.particles_nb - Número de partículas para el modo "remove".
 * @param {boolean} config.retina_detect - Habilitar la detección de retina.
 */
particlesJS(
    {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#5f2fa7"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 5,
              "color": "#6b04fd"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 3,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#6b04fd",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      }
);
