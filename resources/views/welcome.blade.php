@extends('menu')
@section('plantilla')
<center>
<h1>Bienvenido A Market Express</h1><br>

<h2>Usted ingreso como: {{$sessionactiva->name}} </h2>
<h2>Su correo Actual es: {{$sessionactiva->email}} </h2>
<h2>El rol Actual es: {{$sessionactiva->rol}}  </h2><br>

<img src="Img/Carrito.jpg" class="img" width ="400" height = "300">
</center>

@endsection
