@extends('admin.modulos.plantilla')

@section('title', 'Dar de alta Campus')

@section('contenido')

<div class="col-md-8">
	<h2>Lista de los campus</h2>

	<table class="table table bordered hover">
		<thead>
			<tr>
				<th>Campus</th>
				<th>Delegación</th>
				<th>Acción</th>
			</tr>
		</thead>

		<tbody>

		@if ($campus->isEmpty())
			<tr>
				<td><p class="text-center text-danger">No hay campus registrados todavía</p></td>
			</tr>
		@endif

			@foreach($campus as $campu)
			<tr>
				<td>{{ $campu->nom_campus }}</td>
				<td>{{ $campu->delegacion }}</td>
				<td>
					<a href="" class="btn btn-default btn-sm">Editar <span class="glyphicon glyphicon-edit"></span></a>
				</td>
			</tr>
			@endforeach			
		</tbody>
	</table>
</div>
@endsection








































