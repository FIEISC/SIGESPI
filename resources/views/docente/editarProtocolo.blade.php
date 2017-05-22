@extends('docente.modulos.plantilla')

@section('title', 'Editar Protocolo')

@section('contenido')

<div class="col-md-10 col-md-offset-1">

@php
	$hoy = date('20y-m-d');
	/*print_r($hoy);*/
@endphp

<h4>Editar Protocolo</h4>

@if ($hoy >= $protocolo->fec_ini && $hoy <= $protocolo->fec_fin)

<h3>{{ $protocolo->nom_protocolo }}</h3>

<form action="{{ route('datosEditarProtocoloDocente', $protocolo->id) }}" method="POST">
	{!! csrf_field() !!}
	{!! method_field('PUT') !!}

	<div class="form-group">
			<label for="herramientas">Herramientas</label>
			<textarea name="herramientas" id="herramientas" cols="30" rows="5" class="form-control">{{ $protocolo->herramientas }}</textarea>
		</div>

		<div class="form-group">
			<label for="entregables">Entregables</label>
			<textarea name="entregables" id="entregables" cols="30" rows="5" class="form-control">{{ $protocolo->entregables }}</textarea>
		</div>

		<div class="form-group">
			<label for="preguntas_guia">Preguntas Guía</label>
			<textarea name="preguntas_guia" id="preguntas_guia" cols="30" rows="5" class="form-control">{{ $protocolo->preguntas_guia }}</textarea>
		</div>

		<button type="submit" class="btn btn-primary btn-block">Editar</button>
</form>

@else
<p>Ya no</p>
@endif
</div>


@endsection











































