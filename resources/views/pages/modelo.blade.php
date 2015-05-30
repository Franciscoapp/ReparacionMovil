@extends('master')

@section('css')
@stop

@section('contenido')
	<div class="container container-small container-white">
		<ul class="list-unstyled">
			@foreach($modelos as $modelo)
				<li class="lista-li">
					<a href="tutorial/{{$modelo->id}}">{{$modelo->nombre}}</a><br>
				</li>
			@endforeach
		</ul>
	</div>
@stop