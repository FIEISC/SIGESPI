@extends('tutor.modulos.plantilla')

@section('title', 'Crear Equipo')

@section('contenido')

<div class="row">
	<div class="col s6 offset-s3">
		<div class="card-panel green lighten-4">
		<h5>Crear Equipo: </h5>
		<p>{{ $protocolo->nom_protocolo }}</p>

			<form action="{{ route('datosCrearEquipos') }}" method="POST">
				{!! csrf_field() !!}

		{{-- <div class="form-group">
			<label for="nom_equipo">Nombre del equipo</label>
			<input type="text" name="nom_equipo" class="form-control">
		</div> --}}

		<div class="input-field col s12">
			<input id="nom_equipo" name="nom_equipo" type="text" class="validate">
			<label for="nom_equipo">Nombre del equipo</label>
		</div>

		<input type="hidden" name="protocolo_id" value="{{ $protocolo->id }}">

	{{-- 	<div class="form-group">
			<label for="user_id">Tutor de equipo</label>
			<select name="user_id" id="user_id" class="form-control">
				
				@foreach ($protocolo->manyUsers as $tutor)
				   <option value="{{ $tutor->id }}">{{ $tutor->nom_docente }}</option>
				@endforeach
			</select>
		</div> --}}

		<div class="input-field col s12">
			<select>
				<option value="" disabled selected>Elegir docente</option>
				@foreach ($protocolo->manyUsers as $tutor)
				<option value="{{ $tutor->id }}">{{ $tutor->nom_docente }}</option>
				@endforeach
			</select>
			<label>Elige un docente</label>
		</div>

		{{-- <button type="submit" class="btn btn-primary">Crear</button> --}}

		<button class="btn waves-effect waves-light" type="submit">Crear
			<i class="material-icons right">send</i>
		</button>
	</form>
</div>
</div>
</div>
@endsection

