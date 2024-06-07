document.addEventListener('DOMContentLoaded', function () {
    const imagenesEditar = document.querySelectorAll('.imagen-por');
    const modalEditar = document.getElementById('myModal');

    imagenesEditar.forEach(function (imagenEditar) {
        imagenEditar.addEventListener('click', function () {
            const productoId = this.getAttribute('data-id');
            const nombre = this.getAttribute('data-nombre');
            const marca = this.getAttribute('data-marca');
            const categoria = this.getAttribute('data-categoria');
            const precioCompra = this.getAttribute('data-precio-compra');
            const precioVenta = this.getAttribute('data-precio-venta');
            const cantidadDisponible = this.getAttribute('data-cantidad-disponible');
            const fechaCaducidad = this.getAttribute('data-fecha-caducidad');
            const categoriaActual = this.getAttribute('data-categoria-actual');

            // Actualiza los campos del formulario con los valores del producto
            document.getElementById('nombre').value = nombre;
            document.getElementById('marca').value = marca;
            document.querySelector('select[name="categoria"]').value = categoria;
            document.getElementById('precio_compra').value = precioCompra;
            document.getElementById('precio_venta').value = precioVenta;
            document.getElementById('cantidad_disponible').value = cantidadDisponible;
            document.getElementById('fecha_caducidad').value = fechaCaducidad;

            // Actualiza la acción del formulario con el ID del producto
            const form = document.querySelector('#myModal form');
            form.action = form.action.replace('__producto_id__', productoId);

            // Abre la ventana modal
            modalEditar.style.display = 'block';
        });
    });

    const cerrarBoton = document.querySelector('.cerrar_editar');
    cerrarBoton.addEventListener('click', function () {
        modalEditar.style.display = 'none';
    });
});