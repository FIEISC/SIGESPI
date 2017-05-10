@extends('tutor.modulos.plantilla')

@section('title', 'Editar Protocolo')

@section('contenido')

<div class="col-md-8">
	<h1>Editar Protocolo</h1>

	<h3>{{ $protocolo->nom_protocolo }}</h3>

	<form action="{{ route('editarOnlyProtocoloForm', $protocolo->id) }}" method="POST">
		{!! csrf_field() !!}
		{!! method_field('PUT') !!}

		<div class="form-group">
			<label for="nom_protocolo">Nombre del Protocolo</label>
			<input type="text" name="nom_protocolo" class="form-control" value="{{ $protocolo->nom_protocolo }}">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Editar</button>
		</div>
	</form>

</div>

@endsection

