@extends('coordinador.modulos.plantilla')

@section('title', 'Alta Tutores')

@section('contenido')

<div class="col-md-10 col-md-offset-1">
	<h1>Todos los Protocolos</h1>

	<table id="myTable" class="table table-responsive table-bordered table-hover">
		
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Carrera</th>
				<th>Semestre</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($protocolos as $protocolo)
				<tr>
					<td>{{ $protocolo->nom_protocolo }}</td>
					<td>{{ $protocolo->carrera }}</td>
					<td>{{ $protocolo->semestre }}</td>
					<td>Acciones</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection