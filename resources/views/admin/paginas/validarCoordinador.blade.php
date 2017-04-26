@extends('admin.modulos.plantilla')

@section('title', 'Válidar Coordinador')

@section('contenido')

@if (Session::has('info'))
    <div class="alert alert-success">
    	{{ Session::get('info') }}
    </div>
@endif

<div class="col-md-10 col-md-offset-1">
<h1>Válidar Coordinador</h1>

<a class="text-right" href="{{ route('reasignarCoordinador') }}">Cordinador Asignado</a>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Docente</th>
				<th>Roles</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($docentes as $docente)
				@if ($docente->activo == 0)
				<tr>
					<td>{{ $docente->nom_docente }}</td>
					@if ($docente->rol == 4)
					<td>Sólo docente</td>
					@elseif($docente->rol == 1)
					<td>Coordinador y docente</td>
					@endif
					<td>
						<div style="display: inline-flex;">
							
						<form action="{{ route('datosCambiarRoles', $docente->id) }}" method="POST">
								{!! csrf_field() !!}
								{!! method_field('PUT') !!}

								<input type="hidden" name="rol[]" value="1">
								<input type="hidden" name="rol[]" value="4">

								<button type="submit" class="btn btn-warning btn-xs">Asigar</button>
							</form>

							<form style="margin-left: 20px;" action="{{ route('formValidarCoordinador', $docente->id) }}" method="POST">
								{!! csrf_field() !!}
								{!! method_field('PUT') !!}

								<input type="hidden" name="activo" value="1">
								<button type="submit" class="btn btn-info btn-xs">Válidar</button>
							</form>

						</div>
					</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection