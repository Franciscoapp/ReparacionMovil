@extends('master')

@section('css')
@stop

@section('contenido')
	<div class="container container-small container-white">
		<div class="cabecera-tutorial">
			<img class="img-rounded" src="{{ asset('img').'/'.$tutorial->img}}">
			<div>
				<h2>{{$tutorial->nombre}}</h2>
				<span>{{$tutorial->descripcion}}</span>
			</div>
		</div>
		<hr>
		<div>
			<ul class="list-unstyled row">
				@foreach($pasos as $paso)
					<li class="lista-paso">
						<h4>
							<strong>
								{{$paso->nombre}}
							</strong>
						</h4>
						<span>
							{{$paso->descripcion}}
						</span>
					</li>
					<hr>
				@endforeach
			</ul>
		</div>
	</div>
@stop