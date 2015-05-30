@extends('master')

@section('css')
@stop

@section('contenido')
	<div class="container container-small container-white">
		<ul class="list-unstyled">
			@foreach($marcas as $marca)
				<li class="lista-li">
					<a href="modelo/{{$marca->id}}">{{$marca->nombre}}</a><br>
				</li>
			@endforeach
		</ul>
	</div>
@stop