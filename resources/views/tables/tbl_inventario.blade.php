<br>
    <table class="inventario-tabla">
        <thead>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td class="imagen-tabla">
                        <img src="data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}" alt="Imagen" class="imagen-p" onclick="abrirModal('{{ $producto->codigo_barras }}', '{{ $producto->nombre_producto }}', '{{ $producto->marca }}', '{{ $producto->categoria }}', '{{ $producto->precio_compra }}', '{{ $producto->precio_venta }}', '{{ $producto->cantidad_disponible }}', '{{ $producto->fecha_registro }}', '{{ $producto->fecha_caducidad }}')">
                    </td>
                    <td class="detalles-p">
                        <table class="detalles-tabla">
                            <tr><td class="info">{{ $producto->nombre_producto }}</td></tr>
                            <tr><td class="info">Precio: {{ $producto->precio_venta }} COP</td></tr>
                            <tr><td class="info">Cantidad disponible: {{ $producto->cantidad_disponible }}</td></tr>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    