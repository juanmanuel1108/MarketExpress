@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf

					<span class="login100-form-title">
						Iniciar Sesión
					</span>

					@error('email')
							<center>
							<div class="alert alert-danger alert-dismissible fade show selectw" role="alert">
								
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<p>Usuario o contraseña incorrecta</p>
							</div>
						</center>
						@enderror

					<div class="wrap-input100 validate-input" data-validate = "El valor del email debe ser ej: ex@abc.xyz">
							
						<input id="email" class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
							<i class="fa fa-envelope" aria-hidden="true"></i>
							
						</span>
						
					</div>
					

					<div class="wrap-input100 validate-input" data-validate = "Contraseña Requerida">
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password"  name="password" placeholder="Contraseña" required autocomplete="password" autofocus>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

						@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
					</div>

					<div class="container-login100-form-btn">

							<button type="submit" class="login100-form-btn">
								Ingresar
							</button>
                               
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Olvidó
						</span>

						@if (Route::has('password.request'))
						<a class="txt2" href="{{ route('password.request') }}">
							Email / Contraseña?
						</a>
						@endif
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ route('register') }}">
							Crea tu Cuenta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

@endsection