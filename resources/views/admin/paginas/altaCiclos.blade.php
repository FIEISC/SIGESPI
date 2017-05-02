@extends('admin.modulos.plantilla')

@section('title', 'Ciclos')

@section('contenido')

@if (Session::has('info'))
	<div class="alert alert-success">
		{{ Session::get('info') }}
	</div>
@endif

<div class="col-md-4 col-md-offset-4">
	<h3>Crear Ciclo</h3>

	<form action="{{ route('altaCiclosForm') }}" method="POST">
		{!! csrf_field() !!}

		<div class="form-group">
			<label for="nom_ciclo">Nombre del Ciclo Escolar</label>
			<input type="text" name="nom_ciclo" class="form-control">
		</div>

		<div class="form-group">
			<label for="ciclo">Ciclo</label>
			<select name="ciclo" id="ciclo" class="form-control">
				<option value="1">AGOSTO-DICIEMBRE</option>
				<option value="2">ENERO-JUNIO</option>
			</select>
		</div>

			<label for="date" class="form-control">Fecha</label>
		<div class="input-group">
			<input type="text" class="form-control datepicker" name="fec_ini" value="{!!date('20y-m-d') !!}">
			<div class="input-group-addon">
				<span class="glyphicon glyphicon-th"></span>
			</div>
		</div>
		<br>
		<label for="date" class="form-control">Fecha 2</label>
		<div class="input-group">
			<input type="text" class="form-control datepicker" name="fec_fin">
			<div class="input-group-addon">
				<span class="glyphicon glyphicon-th"></span>
			</div>
		</div>
        <br>
		<div class="form-group">
		   <button type="submit" class="btn btn-primary btn-block">Crear Ciclo</button>
		</div>
	</form>
</div>

@endsection








































