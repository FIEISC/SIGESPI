@extends('tutor.modulos.plantilla')

@section('title', 'Tutor de PI')

@section('contenido')

@if (Auth::user()->t_proy == 'A')
	
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tutor de Proyecto</h3>
  </div>
  <div class="panel-body">
    <h3>Bienvenido: {{ Auth::user()->nom_docente }}</h3>
    <h4>Es tutor de la carrera: Ing. Mecánico Electricista</h4>
    <h4>En el semestre: {{ Auth::user()->t_semestre }}</h4>
  </div>
</div>

@elseif(Auth::user()->t_proy == 'B')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tutor de Proyecto</h3>
  </div>
  <div class="panel-body">
    <h3>Bienvenido: {{ Auth::user()->nom_docente }}</h3>
    <h4>Es tutor de la carrera: Ing. en Tecnologías Electrónicas</h4>
    <h4>En el semestre: {{ Auth::user()->t_semestre }}</h4>
  </div>
</div>

@elseif(Auth::user()->t_proy == 'C')

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tutor de Proyecto</h3>
  </div>
  <div class="panel-body">
    <h3>Bienvenido: {{ Auth::user()->nom_docente }}</h3>
    <h4>Es tutor de la carrera: Ing. en Mecatrónica</h4>
    <h4>En el semestre: {{ Auth::user()->t_semestre }}</h4>
  </div>
</div>
@elseif(Auth::user()->t_proy == 'D')
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tutor de Proyecto</h3>
  </div>
  <div class="panel-body">
    <h3>Bienvenido: {{ Auth::user()->nom_docente }}</h3>
    <h4>Es tutor de la carrera: Ing. en Sistemas Computacionales</h4>
    <h4>En el semestre: {{ Auth::user()->t_semestre }}</h4>
  </div>
</div>
@endif


{{-- <div class="page-header">

@if (Auth::user()->t_proy == 'A')
	<h3>Bienvenido {{ Auth::user()->nom_docente }} eres tutor de la carrera Ing. Mecánico Electricista en el semestre {{ Auth::user()->t_semestre }}</h3>

@elseif(Auth::user()->t_proy == 'B')
    <h3>Bienvenido {{ Auth::user()->nom_docente }} eres tutor de la carrera Ing. en Tecnologías Electrónicas en el semestre {{ Auth::user()->t_semestre }}</h3>

@elseif(Auth::user()->t_proy == 'C')
    <h3>Bienvenido {{ Auth::user()->nom_docente }} eres tutor de la carrera Ing. en Mecatrónica en el semestre {{ Auth::user()->t_semestre }}</h3>

@elseif(Auth::user()->t_proy == 'D')
    <h3>Bienvenido {{ Auth::user()->nom_docente }} eres tutor de la carrera Ing. en Sistemas Computacionales en el semestre {{ Auth::user()->t_semestre }}</h3>
@endif

</div>

--}}
@endsection

