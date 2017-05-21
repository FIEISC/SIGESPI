@extends('tutor.modulos.plantilla')

@section('title', 'Crear Equipos')

@section('contenido')

<div class="col-md-8 col-md-offset-2">
	<h1>Crear Equipos</h1>
	<p class="text-info">Da click sobre el equipo creado para asignarle un tutor de equipo de trabajo</p>

	<table class="table table-responsive table-hover table-bordered">
		<thead>
			<tr>
				<th>Protocolo</th>
				<th>Equipos</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($protocolos as $protocolo)
				@if ($protocolo->user_id == Auth::user()->id)
				<tr>
					<td>{{ $protocolo->nom_protocolo }}</td>
					<td>
						@foreach ($protocolo->equipos as $equipo)
						<ul>
							<li style="list-style: none;"><a href="{{ route('asignarAlumnosEquipos', $equipo->id) }}">{{ $equipo->nom_equipo }}</a></li>
						</ul>
						@endforeach
					</td>

					<td>
						<a href="{{ route('crearEquiposForm', $protocolo->id) }}" class="btn btn-primary btn-sm">Crear</a>
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection

