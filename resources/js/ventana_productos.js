// ventana_productos.js

// Abrir detalles de los productos tras seleccionar alguno en específico
function abrirModal(idProducto, nombreProducto, marca, categoria, precioCompra, precioVenta, cantidadDisponible, fechaRegistro, fechaCaducidad) {
    var modal = document.getElementById("productoModal");
    modal.style.display = "block";

    var detallesProducto = document.getElementById("detallesProducto");
    detallesProducto.innerHTML = `
        <h2>${nombreProducto}</h2>
        <p>Código de barras: ${idProducto}</p>
        <p>Marca: ${marca}</p>
        <p>Categoría: ${categoria}</p>
        <p>Precio de compra: ${precioCompra} COP</p>
        <p>Precio de venta: ${precioVenta} COP</p>
        <p>Cantidad disponible: ${cantidadDisponible}</p>
        <p>Fecha caducidad: ${fechaCaducidad}</p>
    `;
}

// Cerrar detalles de los productos
function cerrarModal() {
    var modal = document.getElementById("productoModal");
    modal.style.display = "none";
}