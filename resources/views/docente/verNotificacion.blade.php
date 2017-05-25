@extends('docente.modulos.plantilla')

@section('title', 'Notificaciones')

@section('contenido')

<h1>Mensaje</h1>

<p>{{ $mensaje->mensaje }}</p>

<small>Enviado por: {{ $mensaje->sender->nom_docente }}</small>

@endsection











































