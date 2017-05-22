@extends('docente.modulos.plantilla')

@section('title', 'Ver Protocolo')

@section('contenido')

<div class="col-md-10 col-md-offset-1">
	<h4>Informacion del protocolo</h4>
    <hr>
    <h4 class="text-center">{{ $protocolo->universidad }}</h4>
    <h4 class="text-center">{{ $protocolo->facultad }}</h4>
    <h4 class="text-center">{{ $protocolo->carrera }}</h4>
	<h4 class="text-center">{{ $protocolo->nom_protocolo }}</h4>
	{{-- <h4 class="text-center">{{ $protocolo->semestre }}</h4>
	<h4>{{ $protocolo->carrer->grupo }}</h4> --}}
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


@endsection











































