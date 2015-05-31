@extends('master')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/signin.css') }}">
@stop

@section('contenido')
	<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Iniciar Sesión...</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="inputEmail" class="form-control" placeholder="Correo" required="" autofocus="" type="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" placeholder="Contraseña" required="" type="password">
        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Recordar
          </label>
        </div>
        <a href="/ReparacionMovil/public">
        	<button class="btn btn-lg btn-primary btn-block">Iniciar Sesión</button>
        </a>
        
      </form>

    </div> <!-- /container -->
@stop