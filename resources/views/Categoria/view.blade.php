@extends('menu2')

@section('plantilla')


    <div class="alert alert-success" role="alert">
            <i class="close icon"></i>
        </div>



<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <center>
        <h2 class="center">Listado de Categorias</h2><br>
    </center>
        <form action="" method="get">
            <table class="ui green table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objetoretornado as $categoria)
                        
                        <tr>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td>
                        
                            <a href="{{ route('UpdateCategoria', $categoria) }}"><img src="{{ asset('Img/svg/reload.svg')}}"></a>
                            <img>
                            <img>
                            <img>
                            <img>
                            <a href="{{ route('DeleteCategoria', $categoria) }}"><img src="{{ asset('Img/svg/x.svg')}}"></a>
                            
                    
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