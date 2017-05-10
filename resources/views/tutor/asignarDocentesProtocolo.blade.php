@extends('tutor.modulos.plantilla')

@section('title', 'Asignar Docentes')

@section('contenido')

<div class="col-md-8 col-md-offset-2">
  <h1>Asignar Docentes</h1>

  <table class="table table-hover table-bordered table-responsive">
    
    <thead>
      <tr>
          <th>Protocolo</th>
          <th>Docentes</th>
          <th>Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($protocolos as $protocolo)
          @if ($protocolo->user_id == Auth::user()->id)
          <tr>
            <td>{{ $protocolo->nom_protocolo }}</td>
            <td>Docentes</td>
            <td>
              <a href="{{ route('asignarDocentesProtocoloForm', $protocolo->id) }}" class="btn btn-success btn-xs">Asignar</a>
              <a href="" class="btn btn-warning btn-xs">Editar</a>
            </td>
          </tr>
          @endif
      @endforeach
    </tbody>
  </table>
</div>
@endsection

