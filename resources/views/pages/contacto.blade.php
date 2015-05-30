@extends('master')

@section('css')
@stop

@section('contenido')
	<div class="container container-small container-white">

      <div class="info">
        <h1>Información de contácto</h1>
        <p class="lead">En esta sección podrá encontrar información que
			le servirá para ponerse en contacto con nosotros ya sea por
			teléfono o por redes sociales.
        </p>
      </div>

      <div class="row marketing">
      	<hr>
        <div class="col-md-5 col-md-offset-1">
          <h4>Teléfono</h4>
          <p>Fijo: &nbsp; {{$informacion->telefono}}</p>
		  <br>

          <h4>Facebook</h4>
          <p>
          	<a href="">
          		{{$informacion->cuentaFacebook}}
          	</a>
          </p>

        </div>

        <div class="col-lg-5">
          <h4>Twitter</h4>
          <p>
          	<a href="">
          		{{$informacion->cuentaTwitter}}
          	</a>
          </p>
          <br>

          <h4>Correo Electrónico</h4>
          <p>
          	<a href="">
          		{{$informacion->correo}}
          	</a>
          </p>

          </div>
      </div>

      <footer class="footer">
      	<hr>
        <p>© Francisco Peña 2015</p>
      </footer>

    </div> <!-- /container -->
@stop