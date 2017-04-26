@extends('coordinador.modulos.plantilla')

@section('title', 'Válidar y Asignar Usuarios')

@section('contenido')

@if (Session::has('info'))
    <div class="alert alert-success">
    	{{ Session::get('info') }}
    </div>	
 @elseif(Session::has('info2'))
 <div class="alert alert-success">
 	{{ Session::get('info2') }}
 </div>
@endif

<h1>Validar y Asignar Usuarios</h1>

<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Roles</th>
			<th>Cord. Carrera</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($docentes as $docente)
		@if ($docente->activo == 0)
		<tr>
			<td>{{ $docente->nom_docente }}</td>
			@if ($docente->rol == 4)
				<td>Docente</td>
			@endif
			
			@if ($docente->c_carr == 'A')
			<td>IME</td>
			@elseif($docente->c_carr == 'B')
			<td>ITE</td>
			@elseif($docente->c_carr == 'C')
			<td>IMT</td>
			@elseif($docente->c_carr == 'D')
			<td>ISC</td>
			@elseif($docente->c_carr == 'N')
			<td>Solo docente</td>
			@endif

			<td>
				<div style="display: inline-flex;">
					<form action="{{ route('formvalidarAsignarUsuarios', $docente->id) }}" method="POST">
						{!! csrf_field() !!}
						{!! method_field('PUT') !!}

						<input type="hidden" name="activo" value="1">

						<button type="submit" class="btn btn-primary btn-xs">Válidar</button>
					</form>

					<a style="margin-left: 20px;" href="{{ route('asignarCoordinadorCarrera', $docente->id) }}" class="btn btn-default btn-xs">Asignar</a>
				</div>
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>


@endsection