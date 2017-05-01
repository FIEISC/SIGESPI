@extends('coordinadorCarrera.modulos.plantilla')

@section('title', 'Coordinador Carrera')

@section('contenido')

<h1>Bienvenido {{ Auth::user()->nom_docente }}</h1>

@if (Auth::user()->c_carr == 'A')
	<h2>Eres Coordinador de la carrera 'Mecánico Electricista'</h2>

@elseif(Auth::user()->c_carr == 'B')
    <h2>Eres Coordinador de la carrera 'Tecnologías Electrónicas'</h2>

@elseif(Auth::user()->c_carr == 'C')
    <h2>Eres Coordinador de la carrera 'Mecatrónica'</h2>

@elseif(Auth::user()->c_carr == 'D')
    <h2>Eres Coordinador de la carrera 'Sistemas Computacionales'</h2>
@endif
@endsection