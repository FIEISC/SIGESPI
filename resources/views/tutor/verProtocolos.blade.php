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
      <tr class="bg-success">
        <th class="text-center">Título</th>
        <th class="text-center">Acción</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($protocolos as $protocolo)
       @if ($protocolo->user_id == Auth::user()->id && $protocolo->activo == 1)
         <tr>
           <td>{{ $protocolo->nom_protocolo }}</td>
           <td>
           <a style="margin-left: 150px;" href="{{ route('verOnlyProtocolo', $protocolo->id) }}" class="btn btn-primary btn-sm">Ver   <span class="glyphicon glyphicon-eye-open"></span></a>

           <a style="margin-left: 60px;" href="{{ route('editarOnlyProtocolo', $protocolo->id) }}" class="btn btn-warning btn-sm">Editar   <span class="glyphicon glyphicon-edit"></span></a>
          
           <div style="display: inline-flex; margin-left: 50px;">
           <form action="{{ route('bajaProtocolos', $protocolo->id) }}" method="POST">
              {!! csrf_field() !!}
              {!! method_field('PUT') !!}

              <input type="hidden" name="activo" value="0">

              <button type="submit" class="bnt btn-danger btn-sm">Baja  <span class="glyphicon glyphicon-arrow-down"></span></button>
            </form>
           </div>

          </td>
         </tr>
       @endif
      @endforeach
    </tbody>
  </table>
</div>
@endsection

