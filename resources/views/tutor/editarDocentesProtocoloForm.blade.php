@extends('tutor.modulos.plantilla')

@section('title', 'Asignar Docentes')

@section('contenido')

<div class="col-md-6 col-md-offset-3">

<h3>Asignación Protocolos a los docentes</h3>
  
  <p><b>{{ $protocolo->nom_protocolo }}</b></p>

{!! Form::model($protocolo, ['route' => ['datosEditarDocentesProtocolo', $protocolo->id], 'method' => 'PUT']) !!}

  <div>
    {!! Form::label('docentes', 'Docentes:') !!}
    <br>
    {!! Form::select('users[]', $users, null, ['multiple', 'class' => 'form-control']) !!}
  </div>

    {!! Form::submit('Asignar',['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

</div>
@endsection

