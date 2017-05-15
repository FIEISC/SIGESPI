@extends('coordinadorCarrera.modulos.plantilla')

@section('title', 'Tutores Asignados')

@section('contenido')

<div class="col-md-6 col-md-offset-3">
	<h1>Tutores Asignados</h1>

	<table class="table table-hover table-bordered table-responsive">
		<thead>
			<tr>
				<th>Tutor</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($tutores as $tutor)
				@if (Auth::user()->c_carr == $tutor->t_proy)
				<tr>
					<td>{{ $tutor->nom_docente }}</td>

					{{-- <td>{{ $tutor->hasProtocolos->nom_protocolo }}</td> --}}

					{{-- @foreach ($protocolos as $protocolo)
						@if ($protocolo->user_id == $tutor->id)
							<td>Protocolo creado</td>	
						@endif
					@endforeach  --}}
				</tr>
				@endif
			@endforeach


		{{-- 	@foreach ($protocolos as $protocolo)
				<tr>
					<td>{{ $protocolo->nom_protocolo }}</td>

					<td>{{ $protocolo->user->nom_docente }}</td>
				</tr>
			@endforeach --}}

		</tbody>
	</table>
</div>
@endsection
