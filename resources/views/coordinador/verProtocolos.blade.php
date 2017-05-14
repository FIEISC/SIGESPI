@extends('coordinador.modulos.plantilla')

@section('title', 'Protocolos')

@section('contenido')


<div class="col-md-10 col-md-offset-1">

<a href="{{ route('bajaProtocolosCoordinador') }}" class="btn btn-warning pull-right">Baja  <span class="glyphicon glyphicon-arrow-down"></span></a>

<a href="{{ route('eliminarProtocolos') }}" style="margin-right: 20px;" class="btn btn-danger pull-right">Eliminar  <span class="glyphicon glyphicon glyphicon-remove"></span></a>
	<h1>Todos los Protocolos</h1>

	<table id="myTable" class="table table-responsive table-bordered table-hover">
		
		<thead>
			<tr>
			    <th>ID</th>
				<th>Nombre</th>
				<th>Carrera</th>
				<th>Semestre</th>
				<th>Ciclo</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($protocolos as $protocolo)
			@if ($protocolo->activo == 1)
					<tr>
					<td>{{ $protocolo->id }}</td>
					<td>{{ $protocolo->nom_protocolo }}</td>
					<td>{{ $protocolo->carrera }}</td>
					<td>{{ $protocolo->semestre }}</td>

					@if ($protocolo->ciclo->ciclo == 1)
						<td>AGO-DIC</td>
					@elseif($protocolo->ciclo->ciclo == 2)
					     <td>ENE-JUL</td>
					@endif
					<td>Acciones</td>
				</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

@endsection