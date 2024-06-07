<div id="tablaCategorias">
        <table class="tabla-categoria">
            <tr>
                <td>
                    <h3>Alimentos</h3>
                    <img src="../../resources/img/CATEGORIA/alimentos.jpg" alt="Imagen Alimentos" onclick="cambiarCategoria('Alimentos');">
                </td>
                <td>
                    <h3>Limpieza</h3>
                    <img src="../../resources/img/CATEGORIA/limpieza.jpg" alt="Imagen Limpieza" onclick="cambiarCategoria('Limpieza');">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Higiene</h3>
                    <img src="../../resources/img/CATEGORIA/higiene.jpg" alt="Imagen Cuidado Personal" onclick="cambiarCategoria('Higiene');">
                </td>
                <td>
                    <h3>Tecnología</h3>
                    <img src="../../resources/img/CATEGORIA/tecnologia.jpg" alt="Imagen Tecnología" onclick="cambiarCategoria('Tecnología');">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Accesorios</h3>
                    <img src="../../resources/img/CATEGORIA/accesorios.jpg" alt="Imagen Accesorios" onclick="cambiarCategoria('Accesorios');">
                </td>
                <td>
                    <h3>Salud</h3>
                    <img src="../../resources/img/CATEGORIA/salud.jpg" alt="Imagen Salud" onclick="cambiarCategoria('Salud');">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Juguetes</h3>
                    <img src="../../resources/img/CATEGORIA/juguetes.jpg" alt="Imagen Juguetes" onclick="cambiarCategoria('Juguetes');">
                </td>
                <td>
                    <h3>Papelería</h3>
                    <img src="../../resources/img/CATEGORIA/papeleria.jpg" alt="Imagen Articulos de Papelería" onclick="cambiarCategoria('Papeleria');">
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Alcoholes</h3>
                    <img src="../../resources/img/CATEGORIA/alcohol2.jpg" alt="Imagen Bebidas Alcoholicas" onclick="cambiarCategoria('Alcohol');">
                </td>
                <td>
                    <h3>Otros</h3>
                    <img src="../../resources/img/CATEGORIA/otros.jpg" alt="Imagen Otros" onclick="cambiarCategoria('Otros');">
                </td>
            </tr>
        </table>
    </div>

    <div id="tablaProductos" class="productos-tabla">
    <img src="../../resources/img/izquierda.png" alt="Regresar" class="regresar-btn regresar-productos" onclick="regresarCategorias()">
        <h1 id="nombreCategoria"></h1> 
        <table class="inventario-tabla">
            
        </table>
    </div>
    <input type="hidden" id="categoriaSeleccionada" name="categoriaSeleccionada" value="">