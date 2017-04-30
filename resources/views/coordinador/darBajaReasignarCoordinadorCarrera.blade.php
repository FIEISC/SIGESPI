@extends('coordinador.modulos.plantilla')

@section('title', 'Dar Baja y Reasignar C. Carrera')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
@endif
<div class="col-md-10 col-md-offset-1">

	<h1>Dar de baja y reasignar</h1>
<table class="table table-hover table-responsive table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>C. Carrera</th>
			<th>Acción</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($docentes as $docente)
			@if ($docente->activo == 1 && $docente->rol != 1 && $docente->rol != 0)
				<tr>
					<td>{{ $docente->nom_docente }}</td>
					@if ($docente->c_carr == 'A')
						<td>IME</td>
					@elseif($docente->c_carr == 'B')
					    <td>ITE</td>
					@elseif($docente->c_carr == 'C')
					    <td>IMT</td>
					 @elseif($docente->c_carr == 'D')
					    <td>ISC</td>
					 @elseif($docente->c_carr == 'N')
					    <td>Sólo docente</td>
					@endif

					<td>
						<div style="display: inline-flex;">
							@if ($docente->c_carr != 'N')
						<form style="margin-right: 20px;" action="" method="POST">

							{!! csrf_field() !!}
							{!! method_field('PUT') !!}

							<input type="hidden" name="c_carr" value="N">

							<button type="submit" class="btn btn-warning btn-xs">Quitar <span class="glyphicon glyphicon-remove"></span></button>
						</form>
						@endif

						@if ($docente->activo == 1)
						<form action="{{ route('bajaDocenteForm', $docente->id) }}" method="POST">

							{!! csrf_field() !!}
							{!! method_field('PUT') !!}

							<input type="hidden" name="activo" value="0">

							<button type="submit" class="btn btn-danger btn-xs">Dar baja <span class="glyphicon glyphicon-arrow-down"></span></button>
						</form>
						@endif
						</div>
					</td>
				</tr>
			@endif
		@endforeach
	</tbody>
</table>

</div>
@endsection


















































