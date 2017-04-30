@extends('admin.modulos.plantilla')

@section('title', 'Dar de alta Planteles')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
@endif

<div class="col-md-4 col-md-offset-4">
	<h3>Alta de planteles</h3>

	<form action="{{ route('altaPlantelesForm') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nom_plantel">Nombre del plantel</label>
			<input type="text" name="nom_plantel" class="form-control">
		</div>

		<div class="form-group">
			<label for="siglas">Siglas del plantel</label>
			<input type="text" name="siglas" class="form-control">
		</div>

		<div class="form-group">
			<label for="campus_id">Campus</label>
			<select name="campus_id" id="campus_id" class="form-control">

			<option>Elije un Campus</option>
				@foreach ($campus as $campu)
					<option value="{{ $campu->id }}">{{ $campu->nom_campus }}</option>
				@endforeach
			</select>
		</div>

		<button type="submit" class="btn btn-primary btn-block">Registrar</button>
	</form>
</div>
@endsection








































