@extends('menu3')
@section('plantilla')

<form action="{{route('UpdateBdProducto')}}" method="POST" class="ui form" enctype="multipart/form-data">
	@csrf
	<div class="ui raised very padded text container segment" id="prin">
		<div class="ui form">
			<br>
			<h2>Actualizar Producto</h2>
			<br>

			<div class="field">
				@error('nombre')
				<center>
					<div class="alert alert-success alert-dismissible fade show selectw" role="alert">
						<strong>Este campo no puede tener mas de 20 caracteres ni numeros!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</center>
				@enderror
				<a class="ui yellow ribbon label">Nombre Producto</a><br>
				<input type="hidden" name="id" value="{{$updateproducto->id}}">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{$updateproducto->nombre}}" required>
			</div>
			<br>
			<div class="field">
				@error('descripcion')
				<center>
					<div class="alert alert-success alert-dismissible fade show selectw" role="alert">
						<strong>Este campo no puede tener mas de 60 caracteres ni numeros!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</center>
				@enderror
				<a class="ui blue ribbon label">Descripcion</a><br>
				<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion"
					value="{{$updateproducto->descripcion}}" required>
			</div>
			<br>
			<div class="field">
				@error('valor')
				<center>
					<div class="alert alert-success alert-dismissible fade show selectw" role="alert">
						<strong>Este campo no puede tener mas de 20 caracteres ni letras!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</center>
				<input type="text" name="valor" id="valor" placeholder="Valor" value="{{$updateproducto->valor}}" required>
			</div>
			<br>
			<div class="field">
				@error('proveedor')
				<center>
					<div class="alert alert-success alert-dismissible fade show selectw" role="alert">
						<strong>Este campo es Obligatorio!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</center>
				@enderror
				<a class="ui blue ribbon label">Proveedor</a><br>
				<input type="hidden" name="id" value="{{$updateproducto->id}}">
				<select class="custom-select selectw" name="proveedor" id="validationServer01" required>
					<option value="">Seleccione...</option>
					@foreach ($infoProveedor as $proveedor)
					<option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
					@endforeach
				</select>
			</div>
			{{-- <div class="field">
				@error('descripcion')
					<div class="ui blue message">Este campo es Obligatorio</div>
				@enderror
				<a class="ui blue ribbon label">Categoria</a>
				<input type="hidden" name="id" value="{{$updateproducto->id}}">
			<select class="form-control" name="categoria" id="validationServer01" value="{{$updateproducto->categoria}}"
				required>
				<option value="nada">Seleccione...</option>
				@foreach ($infoCategoria as $categoria)
				<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
				@endforeach
			</select>
		</div> --}}




	</div><br>
	<input type="submit" value="Actualizar" class="ui inverted primary button" id="boton">
	</div>
</form>
@endsection