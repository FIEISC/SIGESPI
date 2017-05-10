@extends('coordinadorCarrera.modulos.plantilla')

@section('title', 'Coordinador Carrera')

@section('contenido')

{{-- <h1>Protocolos</h1>

@foreach ($protocolos as $protocolo)
	@if (Auth::user()->c_carr == $protocolo->user->t_proy)
		<p>{{ $protocolo->nom_protocolo }}  Creador: {{ $protocolo->user->nom_docente }}</p>
	@endif
@endforeach --}}

<div class="col-md-8">
	<h1>Protocolos de los tutores asignados</h1>
    
    <table class="table table-hover table-bordered table-responsive">
    	<thead>
    		<tr>
    			<th>Protocolo</th>
    			<th>Creador</th>
    			<th>Acciones</th>
    		</tr>
    	</thead>

    	<tbody>
    		@foreach ($protocolos as $protocolo)
    			@if (Auth::user()->c_carr == $protocolo->user->t_proy)
    			<tr>
    				<td>{{ $protocolo->nom_protocolo }}</td>
    				<td>{{ $protocolo->user->nom_docente }}</td>
    				<td><a href="" class="btn btn-info btn-xs">Ver <span class="glyphicon glyphicon-eye-open"></span></a></td>
    			</tr>
    			@endif
    		@endforeach
    	</tbody>
    </table>

</div>

@endsection




































































