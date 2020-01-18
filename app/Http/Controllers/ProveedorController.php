<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewInsert(){
        return view('Proveedor/insert');
    }

    public function InsertProveed(Request $proveedor)
    {   
        $proveedor->validate([
            'nombre' => 'required',
            'nit' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

        $instanciaProveedor = new App\Proveedor;
        $instanciaProveedor->nombre = $proveedor->nombre;
        $instanciaProveedor->nit = $proveedor->nit;
        $instanciaProveedor->telefono = $proveedor->telefono;
        $instanciaProveedor->direccion = $proveedor->direccion;
        $instanciaProveedor->save();
    
        return redirect('Proveedor/view')->with('guardado','Producto Actualizado Con Exito!');
    }

    public function ViewProveed()
    {
        $objetoretornado = App\Proveedor::paginate(3);
        return view('Proveedor/view',compact('objetoretornado'));
    }


    public function UpdateProveed($id){
        $updateproveedor = App\Proveedor::FindOrFail($id);
        return view('Proveedor/update',compact('updateproveedor'));
    }

    public function DeleteProveed($id){
        $deleteproveedor = App\Proveedor::FindOrFail($id);
        $deleteproveedor->delete();
        return redirect('Proveedor/view')->with('guardado', 'El Proveedor fue borrado con exito!');
    }

    public function UpdateBdProveed(Request $proveedor)
    {
        $proveedor->validate([
            'nombre' => 'required',
            'nit' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ]);

            $instanciaProveedor = App\Producto:: FindOrFail($proveedor->id);
            $instanciaProveedor->nombre = $proveedor->nombre;
            $instanciaProveedor->nit = $proveedor->nit;
            $instanciaProveedor->telefono = $proveedor->telefono;
            $instanciaProveedor->direccion = $proveedor->direccion;
            $instanciaProveedor->update();

        return redirect('Proveedor/view')->with('guardado','Proveedor Actualizado Con Exito!');
        
        
    }
}
