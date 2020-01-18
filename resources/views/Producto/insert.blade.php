@extends('menu2')
@section('plantilla')

<div class="alert alert-success" role="alert">
	<i class="close icon"></i>
</div>

<form action="{{route('InsertarProducto')}}" method="POST" class="ui form" enctype="multipart/form-data">
	@csrf
	<div class="ui raised very padded text container segment" id="prin">
		<div class="ui form">
			<h2>Registrar Producto</h2>
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
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{old('nombre')}}" required>
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
				<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" value="{{old('descripcion')}}" required>
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
				@enderror
				<a class="ui blue ribbon label">Valor</a><br>
				<input type="text" name="valor" id="valor" placeholder="Valor" value="{{old('valor')}}" required>
			</div>
			<br>
			<div class="field">
				
				<a class="ui blue ribbon label">Categoria</a><br>
				<select class="custom-select selectw" name="categoria" id="validationServer01" required>
					<option value="">Seleccione...</option>
					@foreach ($infoCategoria as $categoria)
					<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
					@endforeach
				</select>
			</div>
			<br>
			<div class="field">
				
				<a class="ui blue ribbon label">Proveedor</a><br>
				<select class="custom-select selectw" name="proveedor" id="validationServer01" required>
					<option value="">Seleccione...</option>
					@foreach ($infoProveedor as $proveedor)
					<option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
					@endforeach
				</select>
			</div>
			<br>
			<div class="botoncentrado">

				<input type="submit" value="Guardar" id="guardar" class="ui inverted button">
			</div>
		</div>
	</div>
</form>
@endsection