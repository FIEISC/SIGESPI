@extends('admin.modulos.plantilla')

@section('title', 'Dar de alta Carreras')

@section('contenido')

<div class="row">
	<div class="col s6 offset-s3">

	<div class="card-panel green lighten-4">
		<h5>Alta de Carreras</h5>

	<form action="{{ route('altaCarrerasForm') }}" method="POST">
		{!! csrf_field() !!}

		<div class="input-field col s12">
          <input id="nom_carrera" name="nom_carrera" type="text" class="validate">
          <label for="nom_carrera">Nombre de la carrera</label>
        </div>

		<div class="input-field col s12">
          <input id="siglas" name="siglas" type="text" class="validate">
          <label for="siglas">Siglas</label>
        </div>

		<div class="input-field col s12">
			<select name="grupo">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select>
			<label>Grupo</label>
		</div>

		<div class="input-field col s12">
			<select name="plantel_id">
				@foreach ($planteles as $plantel)
					<option value="{{ $plantel->id }}">{{ $plantel->nom_plantel }}</option>
				@endforeach
			</select>
			<label>Plantel</label>
		</div>

		<button class="btn waves-effect waves-light" type="submit">Registrar
			<i class="material-icons right">send</i>
		</button>
	</form>
	</div>
	</div>
</div>
@endsection








































