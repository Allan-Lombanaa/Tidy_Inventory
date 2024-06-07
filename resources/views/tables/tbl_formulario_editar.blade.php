<div id="myModal" class="modal">
            <div class="modal-content">
            <form id="editarProductoForm" class="formulario-edicion" action="{{ route('actualizar', ['producto' => '__producto_id__']) }}" method="POST">
            @csrf
            @method('PUT')
                <input type="hidden" name="producto_id" id="producto_id" value="">
                <span class="cerrar_editar" onclick="cerrarModal()">&times;</span>
                <h2 class="titulo-editar">Editar Producto</h2>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca"><br>
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
                <input type="number" id="precio_compra" name="precio_compra"><br>
                <label for="precio_venta">Precio de Venta:</label>
                <input type="number" id="precio_venta" name="precio_venta"><br>
                <label for="cantidad_disponible">Cantidad Disponible:</label>
                <input type="number" id="cantidad_disponible" name="cantidad_disponible"><br>
                <label for="fecha_caducidad">Fecha de Caducidad:</label>
                <input type="date" id="fecha_caducidad" name="fecha_caducidad"><br>
                <input type="submit" value="Guardar">
            </form>
        </div>
    </div>
