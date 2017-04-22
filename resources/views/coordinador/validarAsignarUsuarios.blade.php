@extends('coordinador.modulos.plantilla')

@section('title', 'Válidar y Asignar Usuarios')

@section('contenido')

@if (Session::has('info'))
    <div class="alert alert-success">
    	{{ Session::get('info') }}
    </div>	
@endif

<h1>Validar y Asignar Usuarios</h1>

<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Roles</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($docentes as $docente)
			@if ($docente->activo == 0)
			<tr>
				<td>{{ $docente->nom_docente }}</td>
				<td>{{ $docente->rol }}</td>

				<td>
					<div style="display: inline-flex;">
						<form action="{{ route('formvalidarAsignarUsuarios', $docente->id) }}" method="POST">
							{!! csrf_field() !!}
							{!! method_field('PUT') !!}

							<input type="hidden" name="activo" value="1">

							<button type="submit" class="btn btn-primary btn-xs">Válidar</button>
						</form>

						<a style="margin-left: 20px;" href="" class="btn btn-default btn-xs">Asignar</a>
					</div>
				</td>
			</tr>
			@endif
		@endforeach
	</tbody>
</table>


@endsection