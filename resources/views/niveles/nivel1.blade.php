@extends('modulos.plantilla')

@section('title', 'N1')

@section('contenido')

<div style="margin-top: 30px;" class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
      <a href="{{ route('coordinador') }}" class="btn btn-default">Coordinador Académico</a>
  </div>
  <div class="btn-group" role="group">
    <a href="" class="btn btn-default">Docente</a>
  </div>
</div>
@endsection