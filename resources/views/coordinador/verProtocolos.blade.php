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
				<th>Ciclo</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($protocolos as $protocolo)
				<tr>
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
			@endforeach
		</tbody>
	</table>
</div>

@endsection