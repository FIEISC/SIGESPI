@extends('tutor.modulos.plantilla')

@section('title', 'Elegir Ciclo')

@section('contenido')

<div class="col-md-10 col-md-offset-1">
  <h3>Elegir Ciclo</h3>

  <table class="table table-responsive table-hover table-bordered">
    <thead>
      <tr>
        <th>Ciclo</th>
        <th>Acción</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($ciclos as $ciclo)
        @if ($ciclo->activo == 1)
          <tr>
            <td>{{ $ciclo->nom_ciclo }}</td>

            <td><a href="{{ route('crearProtocolo', $ciclo->id) }}" class="btn btn-primary btn-xs">Crear Protocolo</a></td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
</div>
@endsection

