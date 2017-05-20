@extends('modulos.plantilla')

@section('title', 'Registro Alumnos')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
   <h1>Registro Alumnos</h1>

   <form action="{{ route('datosRegistroAlumnos') }}" method="POST">
   	{!! csrf_field() !!}

   	<div class="form-group">
   		<label for="nom_alumno">Nombre Completo</label>
   		<input type="text" name="nom_alumno" class="form-control">
   	</div>

   	<div class="form-group">
   		<label for="email">Correo Universitario</label>
   		<input type="email" name="email" class="form-control">
   	</div>
    
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
    	<label for="carrera_id">Carrera</label>
    	<select name="carrera_id" id="carrera_id" class="form-control">
    		@foreach ($carreras as $carrera)
    			<option value="{{ $carrera->id }}">{{ $carrera->nom_carrera }}</option>
    		@endforeach
    	</select>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>

   </form>
</div>


@endsection