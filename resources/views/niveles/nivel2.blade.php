@extends('modulos.plantilla')

@section('title', 'N2')

@section('contenido')

<div style="margin-top: 30px;" class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
      <a href="{{ route('c_carrera') }}" class="btn btn-default">Coordinador Carrera</a>
  </div>
  <div class="btn-group" role="group">
    <a href="{{ route('docente') }}" class="btn btn-default">Docente</a>
  </div>

   <a href="{{ route('salir') }}" class="btn btn-default">Salir   <span class="glyphicon glyphicon-log-out"></span></a>
</div>

@php
	$fecha = date('d-m-20y');
@endphp

<div class="page-header">
<h5 class="text-right">Fecha: {{ $fecha }}  <span class="glyphicon glyphicon-calendar"></span></h5>
  <h3>Bienvenido {{ Auth::user()->nom_docente }}</h3>
</div>
@endsection