@extends('menu3')

@section('plantilla')

     <div class="ui inverted teal table">

    <form action="{{ route('UpdateBdProveedor')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="ui inverted form">
    <div class="centro">
    <br>
    <h2 class="titulo">Actualizar  Proveedores</h2><br>
        <br>
        <div class="field">
            @error('nombre')
            <div class="ui orange message"> Este campo es obligatorio</div>
          @enderror
        <label for="nombre">Nombre</label><br>
        <input type="hidden" name="id" value="{{$updateproveedor->id}}">
        <input type="text" id="nombre" name="nombre" value="{{$updateproveedor->nombre}}">
        </div>
        <br>
        <div class="field">
            @error('telefono')
            <div class="ui orange message"> Este campo es obligatorio</div>
          @enderror
          <label for="telefono">Telefono</label><br>
          <input type="text" id="telefono" name="telefono" value="{{$updateproveedor->telefono}}"> 
          </div>
        <br>
        <div class="field">
            @error('direccion')
            <div class="ui orange message"> Este campo es obligatorio</div>
            @enderror
        <label for="direccion">Direccion</label><br>
        <input type="text" id="direccion" name="direccion" value="{{$updateproveedor->direccion}}">
        </div>
        <br>
        <div class="field">
            @error('nit')
            <div class="ui orange message"> Este campo es obligatorio</div>
            @enderror
          <label for="nit">Nit</label><br>
          <input type="text" id="nit" name="nit" value="{{$updateproveedor->nit}}">
          </div>
    </div>
    <br>
    <br>
    <div class="botoncentrado">
    
    <input type="submit" value="Actualizar" id="Actualizar" class="ui inverted button">
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </form> 
      
@endsection