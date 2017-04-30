@extends('coordinadorCarrera.modulos.plantilla')

@section('title', 'Coordinador Carrera')

@section('contenido')

<h1>Bienvenido {{ Auth::user()->nom_docente }}</h1>
@endsection