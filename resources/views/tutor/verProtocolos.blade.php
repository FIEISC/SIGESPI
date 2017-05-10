@extends('tutor.modulos.plantilla')

@section('title', 'Crear Protocolo')

@section('contenido')

@if (Session::has('info'))
  <div class="alert alert-success">
    {{ Session::get('info') }}
  </div>
@endif

<div class="col-md-8 col-md-offset-2">
  <h2>Protocolos creados</h2>

  <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th>Título</th>
        <th>Acción</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($protocolos as $protocolo)
       @if ($protocolo->user_id == Auth::user()->id)
         <tr>
           <td>{{ $protocolo->nom_protocolo }}</td>
           <td>
           <a href="{{ route('verOnlyProtocolo', $protocolo->id) }}" class="btn btn-primary btn-xs">Ver   <span class="glyphicon glyphicon-eye-open"></span></a>

           <a href="{{ route('editarOnlyProtocolo', $protocolo->id) }}" class="btn btn-warning btn-xs">Editar   <span class="glyphicon glyphicon-edit"></span></a>

           </td>
         </tr>
       @endif
      @endforeach
    </tbody>
  </table>
</div>
@endsection

