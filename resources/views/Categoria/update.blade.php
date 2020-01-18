@extends('menu3')
@section('plantilla')

<div class="alert alert-success" role="alert">
		<i class="close icon"></i>
	</div>

<form action="{{route('UpdateBdCategoria')}}" method="POST" class="ui form" enctype="multipart/form-data">
@csrf
	<div class="ui raised very padded text container segment" id="prin">
		<div class="ui form">
			<br><br>
			<h2>Actualizar Categoria</h2>
			<br>
			<br>
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
				<a class="ui yellow ribbon label">Nombre Categoria</a><br>
				<input type="hidden" name="id" value="{{$updatecategoria->id}}">
				<input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{$updatecategoria->nombre}}">
			</div>
			<br>
			<div class="field">
				@error('descripcion')
				<center>
						<div class="alert alert-success alert-dismissible fade show selectw" role="alert">
							<strong>Este campo es Obligatorio!</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</center>
				@enderror
				<a class="ui blue ribbon label">Descripcion Categoria</a><br>
				<input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" value="{{$updatecategoria->descripcion}}"> 
			</div>
		</div><br><br>
			<input type="submit" value="Actualizar" class="ui inverted primary button" id="boton">
	</div>	
</form>
@endsection
