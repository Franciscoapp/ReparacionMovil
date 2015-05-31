@extends('master')

@section('css')
@stop

@section('contenido')
	<div class="container container-small container-white">
		<h2 class="text-center">
			<strong>
				¿Qué tutorial deseas realizar?
			</strong>
		</h2>
		<hr>
		<ul class="list-unstyled row">
			@foreach($tutoriales as $tutorial)
				<li class="lista-li col-xs-6 text-center">
					<a href="tutoriales/{{$tutorial->id}}">
						{{$tutorial->nombre}}
					</a><br>
				</li>
			@endforeach
		</ul>
	</div>
@stop