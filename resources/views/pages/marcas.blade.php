@extends('master')

@section('css')
@stop

@section('contenido')
	<div class="container container-small container-white">
		<h2 class="text-center">
			<strong>
				¿Cuál es la marca de tu dispositivo?
			</strong>
		</h2>
		<hr>
		<ul class="list-unstyled row">
			@foreach($marcas as $marca)
				<li class="lista-li col-xs-6 text-center">
					<a href="modelos/{{$marca->id}}">{{$marca->nombre}}</a><br>
				</li>
			@endforeach
		</ul>
	</div>
@stop