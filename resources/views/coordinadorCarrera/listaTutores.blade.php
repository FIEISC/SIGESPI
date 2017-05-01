@extends('coordinadorCarrera.modulos.plantilla')

@section('title', 'Tutores Asignados')

@section('contenido')

<div class="col-md-8">
	<h1>Tutores Asignados</h1>

	<table class="table table-hover table-bordered table-responsive">
		<thead>
			<tr>
				<th>Tutor</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tutores as $tutor)
				@if (Auth::user()->c_carr == $tutor->t_proy)
				<tr>
					<td>{{ $tutor->nom_docente }}</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection