@extends('modulos.plantilla')

@section('title', 'N3')

@section('contenido')

<div style="margin-top: 30px;" class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
      <a href="{{ route('c_carrera') }}" class="btn btn-default">Coordinador Carrera</a>
  </div>

  <div class="btn-group" role="group">
    <a href="{{ route('tutor') }}" class="btn btn-default">Tutor</a>
  </div>

  <div class="btn-group" role="group">
    <a href="{{ route('docente') }}" class="btn btn-default">Docente</a>
  </div>

   <a href="{{ route('salir') }}" class="btn btn-default">Salir   <span class="glyphicon glyphicon-log-out"></span></a>
</div>

@php
  $hoy = date('d-m-20y');
@endphp
<h5 class="text-right">{{ $hoy }}  <span class="glyphicon glyphicon-calendar"></span></h5>
<div class="page-header">
  <h4>Bienvenido {{ Auth::user()->nom_docente }}</h4>

  <h5>Ahora estas logueado y puedes elegir en que rol quieres trabajar</h5>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
@endsection