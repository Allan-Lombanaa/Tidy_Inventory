<br>
<table class="inventario-tabla">
    @foreach ($productos as $producto)
        @php
            $categoriaActual = $producto->categoria;
        @endphp
        <tr>
            <td class="imagen-tabla">
                <img src="data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}" alt="Imagen" class="imagen-p">
            </td>
            <td class="detalles-p">
                <table class="detalles-tabla">
                    <tr><td class="info">{{ $producto->nombre_producto }}</td></tr>
                    <tr><td class="info">Precio: {{ $producto->precio_venta }} COP</td></tr>
                    <tr><td class="info">Cantidad disponible: {{ $producto->cantidad_disponible }}</td></tr>
                    <tr class="fila-ajustes">
                        <td class="imagen-editar">
                            <img src='../../resources/img/borrar.png' alt="Eliminar" class="imagen-por" onclick="eliminarProducto()">
                            <img src='../../resources/img/editar.png' alt="Editar" class="imagen-por" data-id="{{ $producto->id_producto_cb }}"
                                data-nombre="{{ $producto->nombre_producto }}"
                                data-marca="{{ $producto->marca }}"
                                data-categoria="{{ $producto->categoria }}" 
                                data-precio-compra="{{ $producto->precio_compra }}"
                                data-precio-venta="{{ $producto->precio_venta }}"
                                data-cantidad-disponible="{{ $producto->cantidad_disponible }}"
                                data-fecha-caducidad="{{ $producto->fecha_caducidad }}">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    @endforeach
</table>
    @if ($productos->isEmpty())
        <tr><td colspan="2"><h1>No se encontraron productos.</h1></td></tr>
    @endif

    