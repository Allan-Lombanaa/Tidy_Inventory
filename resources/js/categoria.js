function cambiarCategoria(categoria) {
    document.getElementById('categoriaSeleccionada').value = categoria;
    mostrarProductos();
}

function mostrarProductos() {
    var nombreCategoria = document.getElementById('categoriaSeleccionada').value;
    document.getElementById('nombreCategoria').innerHTML = nombreCategoria;
    
    document.getElementById('tablaCategorias').style.display = 'none';
    document.getElementById('tablaProductos').style.display = 'block';

    var categoriaSeleccionada = document.getElementById('categoriaSeleccionada').value;

    var btnRegresarProductos = document.querySelector(".regresar-productos");
    btnRegresarProductos.style.display = "block";

    // Prueba uno de biblioteca
    $.ajax({
        type: 'POST',
        url: '../TABLAS/tbl_categoriaBD.php',
        data: { categoriaSeleccionada: categoriaSeleccionada },
        success: function(response) {
            $('#tablaProductos .inventario-tabla').html(response);
        }
    });
}

function regresarCategorias() {
    document.getElementById('tablaCategorias').style.display = 'block';
    document.getElementById('tablaProductos').style.display = 'none';
}

document.addEventListener("DOMContentLoaded", function() {
    var btnRegresarProductos = document.querySelector(".regresar-productos");
    btnRegresarProductos.style.display = "none";
});