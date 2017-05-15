@extends('tutor.modulos.plantilla')

@section('title', 'Crear Equipos')

@section('contenido')

<h1>Asiganr Alumnos</h1>

<p>Equipo: {{ $equipo->nom_equipo }}</p>

{{-- <p>Quien creo el equipo: {{ $equipo->protocolo->user_id }}</p> --}}

<p>Tutor del equipo: {{ $equipo->user->nom_docente }}</p>
@endsection

