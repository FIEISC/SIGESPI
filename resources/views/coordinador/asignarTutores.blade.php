@extends('coordinador.modulos.plantilla')

@section('title', 'Alta Tutores')

@section('contenido')

<div class="col-md-8 col-md-offset-2">
	<h2>Asignar Tutores a: </h2>
	<p><b>{{ $cc->nom_docente }}</b></p>
	<table class="table table-hover table-bordered table-responsive">
		<thead>
			<tr>
				<th>Docente</th>
				<th>Rol</th>
				<th>Tutor</th>
				<th>Semestre</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tutores as $tutor)
				@if ($tutor->activo == 1 && $tutor->rol != 0 && Auth::user()->plantel == $tutor->plantel && $tutor->t_proy == 'N')
					<tr>
						<td>{{ $tutor->nom_docente }}</td>

						@php
							$roles = $tutor->rol;
							$rol = explode(',', $roles);
						@endphp

						@if ($rol[0] == 1 && $rol[1] == 4)
							<td>C. Académico y Docente</td>
					    @elseif($rol[0] == 2 && $rol[1] == 4)
					        <td>C. Carrera y Docente</td>
					    @elseif($rol[0] == 4)
					        <td>Docente</td>
						@endif

						@if ($tutor->t_proy == 'N')
							<td>Solo Docente</td>
						@endif

						<td>
							<form action="{{ route('asignarTutoresForm', $tutor->id) }}" method="POST">
								{!! csrf_field() !!}
								{!! method_field('PUT') !!}

								<div class="radio">
									<label id="1">
									<input type="radio" name="t_semestre" id="1" value="1">
										1
									</label>
								</div>

								<div class="radio">
									<label id="3">
									<input type="radio" name="t_semestre" id="3" value="3">
										3
									</label>
								</div>

								<div class="radio">
									<label id="5">
									<input type="radio" name="t_semestre" id="5" value="5">
										5
									</label>
								</div>

								<input type="hidden" name="t_proy" value="{{ $cc->c_carr }}">

								@php
									$roles = $tutor->rol;
									$rol = explode(',', $roles);
								@endphp

									@if ($rol[0] == 1 && $rol[1] == 4)
										<input type="hidden" name="rol[]" value="1">
										<input type="hidden" name="rol[]" value="3">
										<input type="hidden" name="rol[]" value="4">
								    @elseif($rol[0] == 2 && $rol[1] == 4)
								         <input type="hidden" name="rol[]" value="2">
								         <input type="hidden" name="rol[]" value="3">
								         <input type="hidden" name="rol[]" value="4">
								    @elseif($rol[0] == 4)
								         <input type="hidden" name="rol[]" value="3">
								         <input type="hidden" name="rol[]" value="4">
									@endif
								

								<button type="submit" class="btn btn-info btn-xs">Asignar</button>
							</form>
						</td>
					</tr>
				@endif
			@endforeach
		</tbody>
	</table>
</div>

@endsection