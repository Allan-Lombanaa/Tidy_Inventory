@extends('layouts.plantilla')

@section('other_resources')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../resources/js/ventana_productos.js"></script>
    <script src="../../resources/js/categoria.js"></script>
@endsection

@section('title', 'Inventario')

@section('first_section', 'PRODUCTOS')

@section('second_section', 'CATEGORIAS')

@section('modal_producto')
    <div id="productoModal" class="modal">
        <div class="modal-contenido">
            <span class="cerrar" onclick="cerrarModal()">&times;</span>
            <div id="detallesProducto"></div>
        </div>
    </div>
@endsection

@section('first_section_content')
    @include('tables.tbl_inventario')
@endsection

@section('second_section_content')
    @include('tables.tbl_categoria')
@endsection

@section('inventario_azul', 'fondo-azul')

