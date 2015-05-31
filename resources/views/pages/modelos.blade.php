@extends('master')

@section('css')
@stop

@section('contenido')
	<div class="container container-small container-white">
		<h2 class="text-center">
			<strong>
				¿Cuál es su marca?
			</strong>
		</h2>
		<hr>
		<ul class="list-unstyled row">
			@foreach($modelos as $modelo)
				<li class="lista-li col-xs-6 text-center">
					<a href="tutoriales/{{$modelo->id}}">
						{{$modelo->nombre}}
					</a><br>
				</li>
			@endforeach
		</ul>
	</div>
@stop