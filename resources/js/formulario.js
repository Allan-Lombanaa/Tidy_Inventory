const mostrarModalBtn = document.getElementById('mostrarModalBtn');
const modalProductos = document.getElementById('modalProductos');
const cerrarModalProductos = document.getElementById('cerrarModalProductos');

mostrarModalBtn.addEventListener('click', () => {
    modalProductos.style.display = 'block';
});

cerrarModalProductos.addEventListener('click', () => {
    modalProductos.style.display = 'none';
});