<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProductoController extends Controller
{
    public function ViewInsertProduc()
    {
        $infoProveedor = App\Proveedor::All();
        $infoCategoria = App\Categoria::All();
        return view('Producto/insert', compact('infoProveedor','infoCategoria'));
    }

    public function InsertProduc(Request $producto)
    {   
        $producto->validate([
            'nombre' => 'required|max:20|regex:/^[\pL\s\-]+$/u',
            'descripcion' => 'required|max:60|regex:/^[\pL\s\-]+$/u',
            'proveedor' => 'required',
            'categoria' => 'required',
            'valor' => 'required|integer'
        ]);

        $instanciaProducto = new App\Producto;
        $instanciaProducto->nombre = $producto->nombre;
        $instanciaProducto->descripcion = $producto->descripcion;
        $instanciaProducto->proveedor_id = $producto->proveedor;
        $instanciaProducto->categoria_id = $producto->categoria;
        $instanciaProducto->valor = $producto->valor;
        $instanciaProducto->save();

        return redirect('Producto/view')->with('guardado','Producto Actualizado Con Exito!');
    }

    public function ViewProduc()
    {
        $objetoretornado = App\Producto::paginate(3);
        return view('Producto/view',compact('objetoretornado'));
    }


    public function UpdateProduc($id){
        $infoProveedor = App\Proveedor::All();
        $updateproducto = App\Producto::FindOrFail($id);
        return view('Producto/update',compact('updateproducto','infoProveedor'));
    }

    public function DeleteProduc($id){
        $deleteproducto = App\Producto::FindOrFail($id);
        $deleteproducto->delete();
        return redirect('Producto/view')->with('guardado', 'El Producto fue borrado con exito!');
    }

    public function UpdateBdProduc(Request $producto)
    {
        $producto->validate([
            'nombre' => 'required|max:20|alpha_dash',
            'descripcion' => 'required|max:60|alpha_dash',
            'proveedor' => 'required',
            'valor' => 'required|numeric'
        ]);

            $instanciaProducto = App\Producto:: FindOrFail($producto->id);
            $instanciaProducto->nombre = $producto->nombre;
            $instanciaProducto->descripcion = $producto->descripcion;
            $instanciaProducto->proveedor_id = $producto->proveedor;
            //$instanciaProducto->categoria_id = $producto->categoria;
            $instanciaProducto->valor = $producto->valor;
            $instanciaProducto->update();

        return redirect('Producto/view')->with('guardado','Producto Actualizado Con Exito!');
        
        
    }
}
