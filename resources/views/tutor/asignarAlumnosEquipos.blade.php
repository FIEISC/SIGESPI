@extends('tutor.modulos.plantilla')

@section('title', 'Crear Equipos')

@section('contenido')

{{-- <p>Quien creo el equipo: {{ $equipo->protocolo->user_id }}</p> --}}

<div class="col-md-6 col-md-offset-3">

<h1>Asignar Alumnos</h1>

<p>Equipo: {{ $equipo->nom_equipo }}  id: {{ $equipo->id }}</p>
<p>Tutor del equipo: {{ $equipo->user->nom_docente }}</p>

<form action="{{ route('datosAsignarAlumnosEquipos') }}" method="POST">
	{!! csrf_field() !!}
	{!! method_field('PUT') !!}

	<div class="form-group">
		<label for="alumno_id">Alumno</label>
		<select name="alumno_id" id="alumno_id" class="form-control">
			@foreach ($alumnos as $alumno)
			@if ($alumno->semestre == Auth::user()->t_semestre && $alumno->carrera->grupo == Auth::user()->t_proy && $alumno->equipo_id == null)
			<option value="{{ $alumno->id }}">{{ $alumno->nom_alumno }}</option>
			@endif	
            @endforeach
		</select>
	</div>

	<input type="hidden" name="equipo_id" value="{{ $equipo->id }}">

	<button type="submit" class="btn btn-primary btn-block">Asignar</button>
</form>
</div>
	
</div>

@endsection

