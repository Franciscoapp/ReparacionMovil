<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Reparación Móvil</title>
		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
		@yield('css')
	</head>
	<body>
		<div class="navbar-wrapper">
      		<div class="container">
				<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-nav">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="" href="/ReparacionMovil/public/">
					<img class="img-rounded logo" alt="Brand" src="{{ asset('img/logo.png') }}">
				  </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="barra-nav">
			      <ul class="nav navbar-nav">
			        <li><a href="/ReparacionMovil/public/marcas">Tutoriales</a></li>
			        <li><a href="/ReparacionMovil/public/contacto">Contáctanos</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
					<li><button class="btn btn-success">Registrarse</button></li>
					<li><a class="boton-barra" href="/ReparacionMovil/public/login"><button class="btn btn-info">Iniciar Sesión</button></a></li>
				  </ul>
		    	</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
			</div>
		</div>
		
		@yield('contenido')
		<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	</body>
</html>
