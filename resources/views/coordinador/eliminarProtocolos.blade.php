@extends('coordinador.modulos.plantilla')

@section('title', 'Baja Protocolos')

@section('contenido')

<div class="col-md-10 col-md-offset-1">

	<h1>Eliminar protocolos</h1>
	<hr>

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
					<td>

					eliminar
					</td>
				</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection