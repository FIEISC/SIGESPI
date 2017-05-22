@extends('docente.modulos.plantilla')

@section('title', 'Protocolos')

@section('contenido')

<div class="col-md-12">
	<h1>Protocolos asignados</h1>

	<table class="table table-hover table-responsive table-bordered">
		<thead>
			<tr>
				<th>Protocolo</th>
				<th>Carrera</th>
				<th>Semestre</th>
				<th>Tutor</th>
				<th>Acciones</th>
			</tr>
		</thead>

	<tbody>
		@foreach ($docentes as $docente)
		    @if ($docente->id === Auth::user()->id)
		        @foreach ($docente->protocolos as $protocolo)
		           <tr>
		           	<td><a href="{{ route('infoDocenteProtocolo', $protocolo->id) }}">{{ $protocolo->nom_protocolo }}</a></td>
		           	<td>{{ $protocolo->carrera }}</td>
		           	<td>{{ $protocolo->semestre }}</td>
		           	<td>{{ $protocolo->user->nom_docente }}</td>
		           	<td>
		           		<a href="{{ route('verProtocoloDocente', $protocolo->id) }}" class="btn btn-info btn-sm">Ver   <span class=" glyphicon glyphicon-eye-open"></span></a>

		           		<a href="{{ route('editarProtocoloDocente', $protocolo->id) }}" class="btn btn-warning btn-sm">Editar  <span class="glyphicon glyphicon-edit"></span></a>
		           	</td>
		           </tr>
		        @endforeach
		    @endif
		@endforeach
	</tbody>
	</table>
</div>


@endsection











































