@extends('modulos.plantilla')

@section('title', 'Lista Alumnos')

@section('contenido')

{{-- <div class="col-md-6">
  @foreach ($alumnos as $alumno)
    <p>{{ $alumno->nom_alumno }}</p>
  @endforeach
</div> --}}


<div class="col-md-12">
  <table class="table table-bordered table-hover table-responsive">
    <thead>
      <th>Alumno</th>
     {{--  <th>Carrera</th>
      <th>Semestre</th> --}}
      <th>Equipo</th>
      <th>Tutor de Equipo</th>
      <th>Protocolo</th>
      <th>Acciones</th>
    </thead>

    <tbody>
  @foreach ($alumnos as $alumno)
    <tr>
      <td>{{ $alumno->nom_alumno }}</td>
      {{-- <td>{{ $alumno->carrera->nom_carrera }}</td>
      <td>{{ $alumno->semestre }}</td> --}}
      <td>{{ $alumno->equipo->nom_equipo }}</td>

      @foreach ($equipos as $equipo)
        @if ($equipo->id == $alumno->equipo_id)
          <td>{{ $equipo->user->nom_docente }}</td>
        @endif
      @endforeach

      @foreach ($protocolos as $protocolo)
        @if ($protocolo->semestre == $alumno->semestre && $protocolo->carrera_id == $alumno->carrera_id)
          <td>{{ $protocolo->nom_protocolo }}</td>
        @endif
      @endforeach

      @foreach ($protocolos as $protocolo)
        @if ($protocolo->semestre == $alumno->semestre && $protocolo->carrera_id == $alumno->carrera_id)
          <td>
          <button class="btn btn-primary btn-sm">Ver  <span class="glyphicon glyphicon-eye-open"></span></button>

          <a href="" class="btn btn-info btn-sm">Descargar  <span class="glyphicon glyphicon-download-alt"></span></a>
          </td>
        @endif
      @endforeach


    </tr>
  @endforeach
    </tbody>
  </table>
</div>
@endsection