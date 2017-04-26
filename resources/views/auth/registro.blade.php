@extends('modulos.plantilla')

@section('title', 'Registro')

@section('contenido')

<div class="col-md-4 col-md-offset-4">
	<h1>Registro</h1>

	<form action="{{ route('datosRegistro') }}" method="POST">

		{!! csrf_field() !!}
		
		<div class="form-group{{ $errors->has('nom_docente') ? ' has-error' : '' }}">
			<label for="nom_docente">Nombre Completo</label>
			<input type="text" name="nom_docente" class="form-control" value="{{ old('nom_docente')}}">

			@if ($errors->has('nom_docente'))
				<span class="help-block">{{ $errors->first('nom_docente') }}</span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('no_docente') ? ' has-error' : '' }}">
			<label for="no_docente">Número de trabajador</label>
			<input type="text" name="no_docente" class="form-control" value="{{ old('no_docente')}}">

			@if ($errors->has('no_docente'))
				<span class="help-block">{{ $errors->first('no_docente') }}</span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email">Correo Electrónico Universitario</label>
			<input type="email" name="email" class="form-control" value="{{ old('email')}}">

			@if ($errors->has('email'))
				<span class="help-block">{{ $errors->first('email') }}</span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password">Contraseña</label>
			<input type="password" name="password" class="form-control">

			@if ($errors->has('password'))
				<span class="help-block">{{ $errors->first('password') }}</span>
			@endif
		</div>

		<div class="form-group">
			<label for="plantel">Plantel</label>
			<select name="plantel" id="plantel" class="form-control">
				<option value="fie">Facultad de Ingeniería Electromecánica</option>
			</select>
		</div>

		<button type="submit" class="btn btn-primary btn-block">Registrarse</button>
	</form>
</div>

@endsection