@extends('menu2')
@section('plantilla')

<div class="alert alert-success" role="alert">
  <i class="close icon"></i>
</div>

  <form action="{{ route('InsertarProveedor')}}" method="POST" class="ui form" enctype="multipart/form-data">
    @csrf
    <div class="ui raised very padded text container segment" id="prin">
      <div class="ui form">
        <br>
        <h2 class="titulo">Registro de Proveedores</h2><br>

        <div class="field">
          @error('nombre')
          <center>
            <div class="alert alert-success alert-dismissible fade show selectw" role="alert">
              <strong>Este campo es Obligatorio!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </center>
          @enderror
          <a class="ui yellow ribbon label">Nombre Proveedor</a><br>
          <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{old('nombre')}}">
        </div>
        <br>
        <div class="field">
          @error('nit')
          <center>
            <div class="alert alert-success alert-dismissible fade show selectw" role="alert">
              <strong>Este campo es Obligatorio!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </center>
          @enderror
          <label for="nit">Nit</label><br>
          <input type="text" id="nit" name="nit" placeholder="Nit">
        </div>
        <br>
        <div class="field">
          @error('telefono')
          <center>
            <div class="alert alert-success alert-dismissible fade show selectw" role="alert">
              <strong>Este campo es Obligatorio!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </center>
          @enderror
          <label for="telefono">Telefono</label><br>
          <input type="text" id="telefono" placeholder="Telefono" name="telefono">
        </div>
        <br>
        <div class="field">
          @error('direccion')
          <center>
            <div class="alert alert-success alert-dismissible fade show selectw" role="alert">
              <strong>Este campo es Obligatorio!</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </center>
          @enderror
          <label for="direccion">Direccion</label><br>
          <input type="text" id="direccion" placeholder="Direccion" name="direccion">
        </div>
        <br>

        <br>

        <div class="botoncentrado">

          <input type="submit" value="Guardar" id="guardar" class="ui inverted button">

        </div>
      </div>
    </div>
  </form>


@endsection