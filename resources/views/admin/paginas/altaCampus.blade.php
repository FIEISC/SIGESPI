@extends('admin.modulos.plantilla')

@section('title', 'Dar de alta Campus')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
@endif

<div class="col-md-4 col-md-offset-4">
	<h3>Dar de alta a Campus</h3>

	<form action="{{ route('altaCampusForm') }}" method="POST">

		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nom_campus">Nombre del Campus</label>
			<input type="text" name="nom_campus" class="form-control">
		</div>


		<div class="form-group">
			<label for="delegacion">Delegación</label>
			<input type="text" name="delegacion" class="form-control">
		</div>

		<div class="form-group">
			<label for="nom_universidad">Universidad</label>
			<input type="text" name="nom_universidad" class="form-control" value="Universidad de Colima">
		</div>

		<button type="submit" class="btn btn-primary">Registrar</button>
	</form>
<br>
	<a href="{{ route('listaCampus') }}">Ver lista de Campus</a>
</div>
@endsection








































