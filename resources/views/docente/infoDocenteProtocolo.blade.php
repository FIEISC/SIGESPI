@extends('docente.modulos.plantilla')

@section('title', 'Info Protocolo')

@section('contenido')

<div class="col-md-8 col-md-offset-2">
	<h1>Información General</h1>
    <hr>
    <h4>Estas asignado al proyecto: {{ $protocolo->nom_protocolo }}</h4>
    <h3>Fecha límite para editar el protocolo: <b>{{ $protocolo->fec_fin }}</b></h3>
    <h4>En la carrera de: {{ $protocolo->carrera }}</h4>
    <h4>En el semestre: {{ $protocolo->semestre }}º</h4>
    <h4>Eres tutor del equipo: {{ $equipo->nom_equipo }}</h4>
    <h4>De los alumnos:</h4>
    @foreach ($alumnos as $alumno)
    	@if ($alumno->equipo_id == $equipo->id)
    	<ul>
    		<li>{{ $alumno->nom_alumno }}</li>
    	</ul>
    	@endif
    @endforeach
</div>


@endsection











































