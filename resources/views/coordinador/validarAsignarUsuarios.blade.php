@extends('coordinador.modulos.plantilla')

@section('title', 'Válidar y Asignar Usuarios')

@section('contenido')

{{-- @if (Session::has('info'))
    <div class="alert alert-success">
    	{{ Session::get('info') }}
    </div>	
 @elseif(Session::has('info2'))
 <div class="alert alert-success">
 	{{ Session::get('info2') }}
 </div>
@endif --}}

<h1>Validar y dar de alta a coordinadores de carrera</h1>

<a href="{{ route('darBajaReasignarCoordinadorCarrera') }}">Dar de baja y reasignar</a>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Roles</th>
			<th>Cord. Carrera</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($docentes as $docente)
		<!-- Para que solo muestre los usuarios en activo 0 y que son del plantel que es el coordinador academico -->
		@if ($docente->activo == 0 && Auth::user()->plantel == $docente->plantel)
		<tr>
			<td>{{ $docente->nom_docente }}</td>

			@if ($docente->rol == 4)
				<td>Docente</td>
			@elseif($docente->rol == 2)
			<td>C. Carrera y Docente</td>
			@endif
			
			@if ($docente->c_carr == 'A')
			<td>IME</td>
			@elseif($docente->c_carr == 'B')
			<td>ITE</td>
			@elseif($docente->c_carr == 'C')
			<td>IMT</td>
			@elseif($docente->c_carr == 'D')
			<td>ISC</td>
			@elseif($docente->c_carr == 'N')
			<td>Solo docente</td>
			@endif

			<td>
				<div style="display: inline-flex;">

				@php
					$roles = $docente->rol;
					$rol = explode(',', $roles);
				@endphp

				@if ($rol[0] == 2 && $rol[1] == 4)
					
				@elseif($rol[0] == 4)

				<a style="margin-right: 100px;" href="{{ route('asignarCoordinadorCarrera', $docente->id) }}" class="btn btn-default btn-xs">Asignar   <span class="glyphicon glyphicon-pencil"></span></a>
				@endif

					<form action="{{ route('formvalidarAsignarUsuarios', $docente->id) }}" method="POST">
						{!! csrf_field() !!}
						{!! method_field('PUT') !!}

						<input type="hidden" name="activo" value="1">

						<button type="submit" class="btn btn-primary btn-xs">Válidar  <span class="glyphicon glyphicon-ok"></span></button>
					</form>
				</div>
			</td>
		</tr>
		@endif
		@endforeach
	</tbody>
</table>


@endsection