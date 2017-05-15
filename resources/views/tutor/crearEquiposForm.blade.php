@extends('tutor.modulos.plantilla')

@section('title', 'Crear Equipo')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
	<h1>Crear Equipo: <small>{{ $protocolo->nom_protocolo }}</small></h1>

	<form action="{{ route('datosCrearEquipos') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nom_equipo">Nombre del equipo</label>
			<input type="text" name="nom_equipo" class="form-control">
		</div>
        
        <input type="hidden" name="protocolo_id" value="{{ $protocolo->id }}">

		<div class="form-group">
			<label for="user_id">Tutor de equipo</label>
			<select name="user_id" id="user_id" class="form-control">
				
				@foreach ($protocolo->manyUsers as $tutor)
				   <option value="{{ $tutor->id }}">{{ $tutor->nom_docente }}</option>
				@endforeach
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Crear</button>
	</form>
</div>
@endsection

