document.addEventListener('DOMContentLoaded', function() {
    // Contenido de las secciones 
    const escanearOption = document.getElementById('escanear');
    const manualOption = document.getElementById('manual');
    const contenidoEscanear = document.getElementById('contenidoEscanear');
    const contenidoManual = document.getElementById('contenidoManual');

    // Función para mostrar la primer sección
    function mostrarEscanear() {
        contenidoEscanear.style.display = 'block';
        contenidoManual.style.display = 'none';
        escanearOption.classList.add('selected');
        manualOption.classList.remove('selected');
    }

    // Función para mostrar la segunda sección
    function mostrarManual() {
        contenidoEscanear.style.display = 'none';
        contenidoManual.style.display = 'block';
        escanearOption.classList.remove('selected');
        manualOption.classList.add('selected');
    }

    // Mostrar por secciones
    escanearOption.addEventListener('click', mostrarEscanear);
    manualOption.addEventListener('click', mostrarManual);

    // Activar el táctil del celular
    let startX;

    document.addEventListener('touchstart', function(event) {
        startX = event.touches[0].clientX;
    });

    document.addEventListener('touchend', function(event) {
        const endX = event.changedTouches[0].clientX;
        const deltaX = startX - endX;

        if (deltaX > 50) {
            mostrarManual();
        } else if (deltaX < -50) {
            mostrarEscanear();
        }
    });

    // Mostrar la sección de Escanear al inicio
    mostrarEscanear();
});