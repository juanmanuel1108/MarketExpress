@extends('menu2')

@section('plantilla')


    <div class="alert alert-success" role="alert">
            <i class="close icon"></i>
        </div>



<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <center>
        <h2 class="center">Listado de Productos</h2><br>
    </center>
        <form action="" method="get">
            <table class="ui green table">
                <thead>
                    <tr>
                        <th>Proveedor</th>
                        <th>Categoria</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Valor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objetoretornado as $producto)
                        
                        <tr>
                            <td>{{ $producto->proveedor_id }}</td>
                            <td>{{ $producto->categoria_id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->valor }}</td>
                            <td>
                        
                            <a href="{{ route('UpdateProducto', $producto) }}"><img src="{{ asset('Img/svg/reload.svg')}}"></a>
                            <img>
                            <img>
                            <img>
                            <img>
                            <a onclick="Borrarlo()"><img src="{{ asset('Img/svg/x.svg')}}"></a>
                            
                    
                            </td>
                        </tr>

                        <script>
                            function Borrarlo(){
                                var txt;
                                var r = confirm("Esta seguro que desea eliminarlo!!")
                                    if (r == true) {
                                        window.location="{{ route('DeleteProducto', $producto) }}"
                                    }
                                    else{
                                        txt="Cancelar"
                                        document.getElementById("demo").innerHTML = txt;
                                        window.location="{{ route('viewproduc') }}"
                                    }
                                }   
                                </script>
                        @endforeach
                </tbody>
                @if ($objetoretornado->lastPage() >1)
                @endif
            </table>
            {{ $objetoretornado->links() }}
        </form>
    </div>
@endsection