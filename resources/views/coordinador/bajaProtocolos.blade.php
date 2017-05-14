@extends('coordinador.modulos.plantilla')

@section('title', 'Baja Protocolos')

@section('contenido')

<div class="col-md-10 col-md-offset-1">

	<h1>Baja de protocolos</h1>
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

					{{-- <a href="{{ route('datosProtocolosBaja', $protocolo->id) }}" class="btn btn-primary btn-sm">Ir</a> --}}

					<form action="{{ route('datosProtocolosBaja', $protocolo->id) }}" method="POST">
						{!! csrf_field() !!}
						{!! method_field('PUT') !!}
						<input type="hidden" value="0" name="activo">

						<button type="submit" class="btn btn-warning btn-sm">Baja  <span class="glyphicon glyphicon-arrow-down"></span></button>
					</form>

						{{-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ventana">Baja  <span class="glyphicon glyphicon-arrow-down"></span></button>

						<div class="modal fade" id="ventana">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h3>Confirmación de la baja del protocolo</h3>
									</div>

									<div class="modal-body">
										<img style="width: 80px; height: 80px; margin-left: 150px;" src="{{ asset('/images/warning-icon.png') }}" alt="">
										<p>El protocolo será dado de baja y no podrá editarlo</p>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

										<div style="display: inline-flex; margin-left: 20px;">
									    <form action="{{ route('datosProtocolosBaja', $protocolo->id) }}" method="POST">
									    {!! csrf_field() !!}
									    {!! method_field('PUT') !!}
									    	<input type="hidden" value="0" name="activo">

									    	<button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
									    </form>
										</div>

									</div>

								</div>
							</div>
						</div> --}}
					</td>
				</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection