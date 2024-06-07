function validarCaracteresEspeciales(input) {
    var pattern = /[<>;]/; // Patrón para buscar caracteres especiales
    return !pattern.test(input.value); // Devuelve true si no se encuentran caracteres especiales
}

// Función de validación principal
function validarFormulario(formulario) {
    var campos = formulario.querySelectorAll('input[type="text"]');

    for (var i = 0; i < campos.length; i++) {
        if (!validarCaracteresEspeciales(campos[i])) {
            alert("Los campos no pueden contener caracteres especiales (<, >, ;).");
            return false;
        }
    }

    return true; // Si todas las validaciones son exitosas, se envía el formulario
}

// Asociar la función de validación al evento 'submit' de todos los formularios
var formularios = document.querySelectorAll('form');
formularios.forEach(function (formulario) {
    formulario.addEventListener('submit', function (event) {
        if (!validarFormulario(formulario)) {
            event.preventDefault(); // Evitar que se envíe el formulario si no pasa las validaciones
        }
    });
});