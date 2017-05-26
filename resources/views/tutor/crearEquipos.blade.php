@extends('tutor.modulos.plantilla')

@section('title', 'Crear Equipos')

@section('contenido')

<div class="row">
	<div class="col s10 offset-s1">
	<div class="card-panel green lighten-4">
		<h5>Crear Equipos</h5>
	<p class="text-info">Da click sobre el equipo creado para asignarle un tutor de equipo de trabajo</p>

	<table class="bordered highlight centered responsive-table">
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
						{{-- <a href="{{ route('crearEquiposForm', $protocolo->id) }}" class="btn btn-primary btn-sm">Crear</a> --}}

						<a href="{{ route('crearEquiposForm', $protocolo->id) }}" class="waves-effect waves-light green btn tooltipped pulse" data-position="top" data-delay="50" data-tooltip="Crear Equipo"><i class="material-icons">create</i></a>
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
	</div>
</div>
</div>
@endsection

