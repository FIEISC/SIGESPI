@extends('docente.modulos.plantilla')

@section('title', 'Notificaciones')

@section('contenido')

<h1>Notificaciones</h1>

<div class="row">
	<div class="col-md-6">
		<h2>No leídas</h2>

		<ul class="list-group">
			@foreach ($noLeidas as $noLeida)			
			<li class="list-group-item">

			<a href="{{ $noLeida->data['link'] }}">{{ $noLeida->data['asunto'] }}</a>

			<form action="{{ route('leidaNotificacion', $noLeida->id) }}" method="POST" class="pull-right"> 

			{!! method_field('PATCH') !!}
			{!! csrf_field() !!}

				<button class="btn btn-danger btn-xs">x</button>
			</form>
			</li>
			@endforeach
		</ul>
		
	</div>

	<div class="col-md-6">
		<h2>Leídas</h2>

		<ul class="list-group">
			@foreach ($Leidas as $Leida)			
			<li class="list-group-item">
			<a href="{{ $Leida->data['link'] }}">{{ $Leida->data['asunto'] }}</a>

			<form action="{{ route('borrarNotificacion', $Leida->id) }}" method="POST" class="pull-right"> 

			{!! method_field('DELETE') !!}
			{!! csrf_field() !!}

				<button class="btn btn-danger btn-xs">x</button>
			</form>
			</li>
			@endforeach
		</ul>

	</div>
</div>

@endsection











































