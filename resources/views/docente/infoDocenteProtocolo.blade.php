@extends('docente.modulos.plantilla')

@section('title', 'Info Protocolo')

@section('contenido')

<div class="row">
    <div class="col s6 offset-s3">
   <div class="card-panel green lighten-4 hoverable">
        <h4>Información General</h4>
    <h6><b>Estas asignado al proyecto:</b></h6>
    <p>{{ $protocolo->nom_protocolo }}</p>

    <h6><b>Fecha límite para editar el protocolo:</b></h6>
    <p class="red-text"><b>{{ $protocolo->fec_fin }}</b></p>

    <h6><b>En la carrera de:</b></h6>
    <p>{{ $protocolo->carrera }}</p>

    <h6><b>En el semestre:</b></h6>
    <p>{{ $protocolo->semestre }}º</p>

    <h6><b>Eres tutor del equipo:</b></h6>
    <p>{{ $equipo->nom_equipo }}</p>

    <h6><b>De los alumnos:</b></h6>
    @foreach ($alumnos as $alumno)
        @if ($alumno->equipo_id == $equipo->id)
        <ul>
            <li>{{ $alumno->nom_alumno }}</li>
        </ul>
        @endif
    @endforeach
   </div>
</div>
</div>


@endsection











































