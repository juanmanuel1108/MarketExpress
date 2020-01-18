@extends('menu2')

@section('plantilla')

<div class="alert alert-success" role="alert">
  <i class="close icon"></i>
</div>

<div class="shadow-lg p-3 mb-5 bg-white rounded">
  <center>
<h2 class= "titulo">Listado de Proovedores</h2>
  </center>
<table class="ui inverted teal table">
  <thead>
    <tr><th>Nombre</th>
    <th>Telefono</th>
    <th>Direccion</th>
    <th>Nit</th>
    <th>Acciones</th>
  </tr></thead><tbody>
    @foreach ($objetoretornado as $proveedor)
  
    <tr>
    <td>{{ $proveedor->nombre }}</td>
    <td>{{ $proveedor->telefono }}</td>
    <td>{{ $proveedor->direccion }}</td>
    <td>{{ $proveedor->nit }}</td>
    <td>
  
    <a href="{{ route('UpdateProveedor', $proveedor) }}"><img src="{{ asset('Img/svg/reload.svg')}}"></a>
    <img>
    <img>
    <img>
    <img>
    <a href="{{ route('DeleteProveedor', $proveedor) }}"><img src="{{ asset('Img/svg/x.svg')}}"></a>
    
  </td>
</tr>
@endforeach
</tbody>
@if ($objetoretornado->lastPage() >1)
@endif
</table>
{{ $objetoretornado->links() }}
</form>
</div>
@endsection