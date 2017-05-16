@extends('modulos.plantilla')

@section('title', 'Info Alumno')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
  <p>Elige semestre y carrera para ver que protocolo y a que equipo de trabajo estas asignado<p>

  <form action="{{ route('datosInfoAlumnos') }}" method="POST">
    {!! csrf_field() !!}

    @if ($ciclo->ciclo == 1)
      <div class="form-group">
      <label for="semestre">Semestre</label>
      <select name="semestre" id="semestre" class="form-control">
        <option value="1">1</option>
        <option value="3">3</option>
        <option value="5">5</option>
      </select>
    </div>

    @elseif($ciclo->ciclo == 2)
     <div class="form-group">
      <label for="semestre">Semestre</label>
      <select name="semestre" id="semestre" class="form-control">
        <option value="2">2</option>
        <option value="4">4</option>
        <option value="6">6</option>
      </select>
    </div>
    @endif

    <div class="form-group">
      <label for="carrera">Carrera</label>
      <select name="carrera" id="carrera" class="form-control">
        @foreach ($carreras as $carrera)
          <option value="{{ $carrera->id }}">{{ $carrera->nom_carrera }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Buscar</button>
  </form>
</div>

@endsection