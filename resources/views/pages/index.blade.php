@extends('master')

@section('titulo')
	Reparación Móvil
@stop

@section('css')
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@stop

@section('barra-logo')
	<nav class="navbar navbar-default">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="" href="ReparacionMovil/public/">
				<img class="img-rounded logo" alt="Brand" src="{{ asset('img/logo.png') }}">
				</a>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Sign In</a></li>
						<li><a href="#">Log In</a></li>
				</ul>
			</div>

		</div>
	</nav>
@stop

@section('js')
	<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
@stop