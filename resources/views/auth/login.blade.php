@extends('modulos.plantilla')

@section('title', 'Login')

@section('contenido')

@if (Session::has('info'))
   <div class="alert alert-danger">
   	{{ Session::get('info') }}
   </div>
   @elseif(Session::has('info2'))
   <div class="alert alert-success">
   	{{ Session::get('info2') }}
   </div>
@endif

<div class="col-md-4 col-md-offset-4">
	<h1>Login</h1>

	<form action="{{ route('datosLogin') }}" method="POST">

	{!! csrf_field() !!}
		<div class="form-group{{ $errors->has('no_docente') ? ' has-error' : ''}}">
			<label for="no_docente">Número de trabajador</label>
			<input type="text" name="no_docente" class="form-control">
			@if ($errors->has('no_docente'))
			<span class="help-block">{{ $errors->first('no_docente') }}</span>
			@endif
		</div>


		<div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
			<label for="password">Contraseña</label>
			<input type="password" name="password" class="form-control">
			  @if ($errors->has('password'))
			<span class="help-block">{{ $errors->first('password') }}</span>
		      @endif
		</div>

		<button type="submit" class="btn btn-primary btn-block">Entrar</button>
	</form>
	<br>
	<p>Eres admin?... <a href="{{ route('loginAdmin') }}">Entra aquí</a></p>
</div>
@endsection