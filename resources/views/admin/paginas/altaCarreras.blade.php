@extends('admin.modulos.plantilla')

@section('title', 'Dar de alta Carreras')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
@endif
<div class="col-md-6 col-md-offset-3">
	<h3>Alta de Carreras</h3>

	<form action="{{ route('altaCarrerasForm') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nom_carrera">Nombre de la carrera</label>
			<input type="text" name="nom_carrera" class="form-control">
		</div>

		<div class="form-group">
			<label for="siglas">Siglas</label>
			<input type="text" name="siglas" class="form-control">
		</div>

		<div class="form-group">
			<label for="grupo">Grupo</label>
			<select name="grupo" id="grupo" class="form-control">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
		</div>

		<div class="form-group">
			<label for="plantel_id">Plantel</label>
			<select name="plantel_id" id="plantel_id" class="form-control">
				@foreach ($planteles as $plantel)
					<option value="{{ $plantel->id }}">{{ $plantel->nom_plantel }}</option>
				@endforeach
			</select>
		</div>

		<button type="submit" class="btn btn-primary btn-block">Registrar</button>
	</form>
</div>
@endsection








































