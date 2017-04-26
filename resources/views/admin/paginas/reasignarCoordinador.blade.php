@extends('admin.modulos.plantilla')

@section('title', 'Reasignar Coordinador')

@section('contenido')

<div class="col-md-8 col-md-offset-2">
<div class="row">
<h1>Quitar Coordinador</h1>
		<table class="table table-bordered table-responsive">
	<thead>
		<tr>
			<th>Coordinador Académico Actual</th>
			<th>Acción</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($docentes as $docente)
		<tr>
			@if ($docente->rol == 1)
			<td>{{ $docente->nom_docente }}</td>
			<td>
				<form action="{{ route('quitarCoordinadorForm', $docente->id) }}" method="POST">

				{!! csrf_field() !!}
				{!! method_field('PUT') !!}

					<input type="hidden" name="rol[]" value="4">
					<button type="submit" class="btn btn-warning btn-xs">Quitar</button>
				</form>
			</td>
			@endif 
		</tr>
		@endforeach
	</tbody>
</table>
</div>

<div class="row">
<h1>Reasignar Coordinador</h1>
	<table class="table table-bordered table-responsive table-hover">
		<thead>
			<tr>
				<th>Docentes</th>
				<th>Acción</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($docentes as $docente)
				<tr>
					@if ($docente->rol == 4)
					<td>{{ $docente->nom_docente }}</td>
					<td>
						<form action="{{ route('reasignarCoordinadorForm', $docente->id) }}" method="POST">

						{!! csrf_field() !!}
				        {!! method_field('PUT') !!}

							<input type="hidden" name="rol[]" value="1">
							<input type="hidden" name="rol[]" value="4">

							<button type="submit" class="btn btn-primary btn-xs">Asignar</button>
						</form>
					</td>
				@endif
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>




@endsection








































