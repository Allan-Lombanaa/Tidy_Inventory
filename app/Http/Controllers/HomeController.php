<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;



class HomeController extends Controller
{
    public function inicio()
    {
        return view('home.inicio');
    }

    public function ventas()
    {
        return view('home.ventas');
    }

    public function inventario()
    {
        $productos = Producto::all();
        return view('home.inventario', compact('productos'));
    }

    public function actualizar()
    {
        $productos = Producto::all();
        return view('home.actualizar', compact('productos'));
    }

    public function guardar(Request $request){
   
    $producto = new Producto();
    $producto->codigo_barras = $request->input('codigo_barras');
    $producto->id_usuarioFK = 1016595463;
    $producto->nombre_producto = $request->input('nombre_producto');
    $producto->marca = $request->input('marca');
    $producto->categoria = $request->input('categoria');
    $producto->precio_compra = $request->input('precio_compra');
    $producto->precio_venta = $request->input('precio_venta');
    $producto->cantidad_disponible = $request->input('cantidad_disponible');
    $producto->fecha_registro = now();
    $producto->fecha_caducidad = $request->input('fecha_caducidad');

    if ($request->hasFile('imagen')) {
        $imagen = $request->file('imagen');
        $producto->imagen = file_get_contents($imagen->getRealPath());
    }

    $producto->save();

    return redirect('/home/actualizar')->with('success', 'Producto guardado correctamente.');
    } 

    public function update(Request $request, $id){

        $producto = Producto::findOrFail($id);

        $producto->nombre_producto = $request->input('nombre');
        $producto->marca = $request->input('marca');
        $producto->categoria = $request->input('categoria');
        $producto->precio_compra = $request->input('precio_compra');
        $producto->precio_venta = $request->input('precio_venta');
        $producto->cantidad_disponible = $request->input('cantidad_disponible');
        $producto->fecha_caducidad = $request->input('fecha_caducidad');
        $producto->save();
    
        return redirect('/home/actualizar')->with('success', 'Producto guardado correctamente.');
    }

    public function registros()
    {
        return view('home.estadisticas');
    }
}