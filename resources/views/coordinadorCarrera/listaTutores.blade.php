@extends('coordinadorCarrera.modulos.plantilla')

@section('title', 'Tutores Asignados')

@section('contenido')

<div class="row">
	<div class="col s6 offset-s3">

    <div class="card-panel hoverable green lighten-4">
    	<ul class="collection with-header">
        <li class="collection-header green lighten-3"><h4>Tutores de Proyecto</h4></li>
        @foreach ($tutores as $tutor)
        	@if (Auth::user()->c_carr == $tutor->t_proy)
        	    <li class="collection-item green lighten-4">{{ $tutor->nom_docente }}</li>
        	@endif
        @endforeach
      </ul>
	
{{-- 	<table class="table table-hover table-bordered table-responsive">
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
				</tr>
				@endif
			@endforeach

		</tbody>
	</table> --}}
    </div>

</div>
</div>
@endsection
