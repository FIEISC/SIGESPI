@extends('tutor.modulos.plantilla')

@section('title', 'Asignar Docentes')

@section('contenido')

@if (Session::has('info'))
  <div class="alert alert-success">
    {{ Session::get('info') }}
  </div>

@elseif(Session::has('info2'))

<div class="alert alert-success">
  {{ Session::get('info2') }}
</div>
@endif
<div class="col-md-12 col-md-offset-0">
  <h1>Asignar Docentes</h1>

  <table class="table table-hover table-bordered table-responsive">
    
    <thead>
      <tr class="bg-success">
          <th class="text-center">Protocolo</th>
          <th class="text-center">Docentes</th>
          <th class="text-center">Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($protocolos as $protocolo)
          @if ($protocolo->user_id == Auth::user()->id)
          <tr>
            <td>{{ $protocolo->nom_protocolo }}</td>
            <td>
              @foreach ($protocolo->manyUsers as $user)
                <ul>
                  <li>{{ $user->nom_docente }}</li>
                </ul>
              @endforeach
            </td>
            <td>
              <a href="{{ route('asignarDocentesProtocoloForm', $protocolo->id) }}" class="btn btn-success btn-sm">Asignar  <span class="glyphicon glyphicon-ok"></span></a>
              <a style="margin-left: 60px;" href="{{ route('editarDocentesProtocoloForm', $protocolo->id) }}" class="btn btn-warning btn-sm">Editar  <span class="glyphicon glyphicon-edit"></span></a>
            </td>
          </tr>
          @endif
      @endforeach
    </tbody>
  </table>
</div>
@endsection

