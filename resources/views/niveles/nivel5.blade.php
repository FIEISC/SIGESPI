@extends('modulos.plantilla')

@section('title', 'N5')

@section('contenido')

<div style="margin-top: 30px;" class="btn-group btn-group-justified" role="group" aria-label="...">
  
  <div class="btn-group" role="group">
    <a href="{{ route('docente') }}" class="btn btn-default">Docente</a>
  </div>

   <a href="{{ route('salir') }}" class="btn btn-default">Salir   <span class="glyphicon glyphicon-log-out"></span></a>
</div>
@endsection