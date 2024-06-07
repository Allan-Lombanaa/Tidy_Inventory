@extends('layouts.plantilla')

@section('other_resources')
    <script src="../../resources/js/formulario_editar.js"></script>
@endsection

@section('title', 'Actualizar')

@section('first_section', 'INVENTARIO')

@section('second_section', 'VENTAS')

@section('first_section_content')
    @include('tables.tbl_editar')
    @include('tables.tbl_formulario_editar')
    @include('tables.tbl_formulario')
@endsection

@section('second_section_content')
    <h1>INFORMACIÓN DE VENTAS REGISTRADAS Y EDICIÓN</h1>
@endsection

@section('actualizar_azul', 'fondo-azul')

