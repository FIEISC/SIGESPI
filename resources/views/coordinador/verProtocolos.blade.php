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
					<td>
						
						<button style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ventana">Ver  <span class="glyphicon glyphicon-eye-open"></span></button>

						<div class="modal fade" id="ventana">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3>Información del protocolo</h3>
									</div>

									<div class="modal-body">
										<h3 class="text-center">{{ $protocolo->nom_protocolo }}</h3>
										<hr>
										<h4 class="text-center">{{ $protocolo->universidad }}</h4>
										<h4 class="text-center">{{ $protocolo->facultad }}</h4>
										<h4 class="text-center">{{ $protocolo->carrera }}</h4>
										<h4 class="text-center">Semestre: {{ $protocolo->semestre }}</h4>
										<hr>
										<p class="text-justify">{{ $protocolo->introduccion }}</p>
										<p class="text-justify">{{ $protocolo->antecedentes }}</p>
										<p class="text-justify">{{ $protocolo->objetivos }}</p>
										<p class="text-justify">{{ $protocolo->obj_particulares }}</p>
										<p class="text-justify">{{ $protocolo->justificacion }}</p>
										<p class="text-justify">{{ $protocolo->herramientas }}</p>
										<p class="text-justify">{{ $protocolo->entregables }}</p>
										<p class="text-justify">{{ $protocolo->preguntas_guia }}</p>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									</div>

								</div>
							</div>
						</div>
					</td>
				</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

@endsection