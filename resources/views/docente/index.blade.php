@extends('docente.modulos.plantilla')

@section('title', 'Docente')

@section('contenido')

<h1>Bienvenido {{ Auth::user()->nom_docente }}</h1>
<h3>Ahora estas como Docente</h3>

@endsection