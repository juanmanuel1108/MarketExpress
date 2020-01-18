<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ViewInsert(){
        return view('Categoria/insert');
    }

    public function InsertCatego(Request $categoria)
    {   
        $categoria->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $instanciaCategoria = new App\Categoria;
        $instanciaCategoria->nombre = $categoria->nombre;
        $instanciaCategoria->descripcion = $categoria->descripcion;
        $instanciaCategoria->save();

        return redirect('Categoria/view')->with('guardado','Categoria Actualizadoa Con Exito!');
    
    }

    public function ViewCatego()
    {
        $objetoretornado = App\Categoria::paginate(3);
        return view('Categoria/view',compact('objetoretornado'));
    }


    public function UpdateCatego($id){
        $updatecategoria = App\Categoria::FindOrFail($id);
        return view('Categoria/update',compact('updatecategoria'));
    }

    public function DeleteCatego($id){
        $deletecategoria = App\Categoria::FindOrFail($id);
        $deletecategoria->delete();
        return redirect('Categoria/view')->with('guardado', 'La Categoria fue borrada con exito!');
    }

    public function UpdateBdCatego(Request $categoria)
    {
        $categoria->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

            $instanciaCategoria = App\Categoria:: FindOrFail($categoria->id);
            $instanciaCategoria->nombre = $categoria->nombre;
            $instanciaCategoria->descripcion = $categoria->descripcion;
            $instanciaCategoria->update();

        return redirect('Categoria/view')->with('guardado','Categoria Actualizada Con Exito!');
        
        
    }

}
