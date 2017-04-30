@extends('coordinador.modulos.plantilla')

@section('title', 'Válidar y Asignar Usuarios')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-warning">
		{{ Session::get('info') }}
	</div>
@endif
<div class="col-md-4 col-md-offset-4">
	<h3>Asignar Coordinador de Carrera</h3>

	<form action="{{ route('formAsignarCoordinadorCarrera', $docente->id) }}" method="POST">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}

		<div class="form-group">
			<div class="radio">
				<label>
					<input type="radio" name="c_carr" id="c_carr" value="A">
					Ingeniero Mecánico Electricista
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="radio">
				<label>
					<input type="radio" name="c_carr" id="c_carr" value="B">
					Ingeniería en Tecnologías Electrónicas
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="radio">
				<label>
					<input type="radio" name="c_carr" id="c_carr" value="C">
					Ingeniero en Mecatrónica
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="radio">
				<label>
					<input type="radio" name="c_carr" id="c_carr" value="D">
					Ingeniería en Sistemas Computacionales
				</label>
			</div>
		</div>

		<input type="hidden" name="rol[]" value="2">
		<input type="hidden" name="rol[]" value="4">

		<button type="submit" class="btn btn-primary">Asignar</button>
	</form>
</div>

@endsection