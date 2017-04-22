@extends('coordinador.modulos.plantilla')

@section('title', 'Coordinador Académico')

@section('contenido')

<h1>Bienvenido {{ Auth::user()->nom_docente }}</h1>


@endsection