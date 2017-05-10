@extends('tutor.modulos.plantilla')

@section('title', 'Asignar Docentes')

@section('contenido')

<h1>Asignar docentes</h1>
<p>{{ $protocolo->nom_protocolo }}</p>

<div class="col-md-6 content-form">

<h3>Asignación Protocolos a los docentes</h3>
  
  <p><b>{{ $protocolo->nom_protocolo }}</b></p>

{!! Form::open(['route' => ['datosAsignarDocentesProtocolo', $protocolo->id], 'method' => 'POST']) !!}

  <div>
    {!! Form::label('docentes', 'Docentes:') !!}
    <br>
    {!! Form::select('users[]', $users, null, ['multiple', 'class' => 'form-control']) !!}
  </div>

    {!! Form::submit('Asignar',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection

