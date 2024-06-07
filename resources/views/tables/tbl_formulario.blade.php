<div id="modalProductos" class="modal-productos">
        <span class="close-productos" id="cerrarModalProductos">&times;</span>
            <h2>Nuevo producto</h2>
            <form action="{{ route('productos.guardar') }}" method="POST" enctype="multipart/form-data" class="formularioP">
            @csrf
            <label for="codigo_barras">ID Producto:</label>
            <input type="text" name="codigo_barras" placeholder="Insertar código de barras" required><br><br>
                
            <label for="nombre_producto">Nombre del Producto:</label>
            <input type="text" name="nombre_producto" placeholder="Insertar nombre" required><br><br>
                
            <label for="marca">Marca:</label>
            <input type="text" name="marca" placeholder="Insertar marca"><br><br>
                
            <label for="categoria">Categoría:</label>
            <select name="categoria" required>
                <option value="" disabled selected hidden class="amongus">Seleccionar</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Higiene">Higiene</option>
                <option value="Tecnologia">Tecnología</option>
                <option value="Accesorios">Accesorios</option>
                <option value="Salud">Salud</option>
                <option value="Juguetes">Juguetes</option>
                <option value="Papeleria">Papelería</option>
                <option value="Alcoholes">Alcoholes</option>
                <option value="Otros">Otros</option>
            </select><br><br>
                
            <label for="precio_compra">Precio de Compra:</label>
            <input type="number" name="precio_compra" step="0.01" placeholder="Insertar precio de compra" required><br><br>
                
            <label for="precio_venta">Precio de Venta:</label>
            <input type="number" name="precio_venta" step="0.01" placeholder="Insertar precio de venta" required><br><br>
                
            <label for="cantidad_disponible">Cantidad Disponible:</label>
            <input type="number" name="cantidad_disponible" placeholder="Insertar cantidad disponible" required><br><br>
                
            <label for="fecha_caducidad">Fecha de Caducidad:</label>
            <input type="date" name="fecha_caducidad"><br><br>
                
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen"><br><br>
                
            <input type="submit" value="Guardar"><br><br>
        </form>
    </div>
<img id="mostrarModalBtn" src="../../resources/img/mas.png" class="mas" alt="Mostrar Formulario" style="cursor: pointer;">
<script src="../../resources/js/formulario.js"></script>
<script src="../SCRIPT/validar.js"></script>
