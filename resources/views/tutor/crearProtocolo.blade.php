@extends('tutor.modulos.plantilla')

@section('title', 'Crear Protocolo')

@section('contenido')

{{-- <h4>{{ $carrera->nom_carrera }}</h4>
<h4>{{ Auth::user()->nom_docente }}</h4>
 --}}<div class="col-md-10 col col-md-offset-1">

  <h2>Crear Protocolo</h2>
  <form action="{{ route('crearProtocoloForm') }}" method="POST">

    {!! csrf_field() !!}

    <div class="form-group">
      <label for="nom_protocolo">Nombre del Protocolo</label>
      <input type="text" name="nom_protocolo" class="form-control">
    </div>

    <div class="form-group">
      <label for="universidad">Universidad</label>
      <input type="text" name="universidad" class="form-control" value="Universidad de Colima" readonly="true">
    </div>
    
    <div class="form-group">
      <label for="facultad">Facultad</label>
      <input type="text" name="facultad" class="form-control" value="{{ Auth::user()->plantel->nom_plantel }}" readonly="true">
    </div>


    <div class="form-group">
      <label for="carrera">Carrera</label>
      <input type="text" name="carrera" class="form-control" value="{{ $carrera->nom_carrera }}" readonly="true">
    </div>

{{--     @if (Auth::user()->t_proy == 'A')
      <div class="form-group">
      <label for="carrera">Carrera</label>
      <input type="text" name="carrera" class="form-control" value="Ingeniería Mecánico Electricista" readonly="true">
    </div>

    @elseif(Auth::user()->t_proy == 'B')
    <div class="form-group">
      <label for="carrera">Carrera</label>
      <input type="text" name="carrera" class="form-control" value="Ingeniería en Tecnologías Electrónicas" readonly="true">
    </div>

    @elseif(Auth::user()->t_proy == 'C')
    <div class="form-group">
      <label for="carrera">Carrera</label>
      <input type="text" name="carrera" class="form-control" value="Ingeniería en Mecatrónica" readonly="true">
    </div>

    @elseif(Auth::user()->t_proy == 'D')
    <div class="form-group">
      <label for="carrera">Carrera</label>
      <input type="text" name="carrera" class="form-control" value="Ingeniería en Sistemas Computacionales" readonly="true">
    </div>
    @endif --}}

    <div class="form-group">
      <label for="introduccion">Introducción</label>
      <textarea name="introduccion" id="introduccion" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="antecedentes">Antecedentes</label>
      <textarea name="antecedentes" id="antecedentes" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="objetivos">Objetivos</label>
      <textarea name="objetivos" id="objetivos" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="obj_particulares">Objetivos Particulares</label>
      <textarea name="obj_particulares" id="obj_particulares" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="justificacion">Justificación</label>
      <textarea name="justificacion" id="justificacion" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="herramientas">Herramientas</label>
      <textarea name="herramientas" id="herramientas" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="entregables">Entregables</label>
      <textarea name="entregables" id="entregables" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="preguntas_guia">Preguntas Guía</label>
      <textarea name="preguntas_guia" id="preguntas_guia" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <input type="hidden" name="semestre" value="{{ Auth::user()->t_semestre }}">

    <div class="row">   
      <div class="col-md-6">
   <div class="form-group">
          <label for="date" class="form-control text-center">Fecha de Inicio</label>
        <div class="input-group">
          <input type="text" class="form-control datepicker" name="fec_ini" value="{!!date('20y-m-d') !!}" readonly="true">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
        </div>
   </div>
      </div>
    
      <div class="col-md-6">
     <div class="form-group">
         <label for="date" class="form-control text-center">Fecha Fin</label>
       <div class="input-group">
        <input type="text" class="form-control datepicker" name="fec_fin">
        <div class="input-group-addon">
          <span class="glyphicon glyphicon-th"></span>
        </div>
      </div>
     </div>
      </div>
    </div>
    <br>
    <input type="hidden" name="carrera_id" value="{{ $carrera->id }}">

    <input type="hidden" name="ciclo_id" value="{{ $ciclo->id }}">

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


   <button type="submit" class="btn btn-primary btn-block">Crear Protocolo</button>
  </form>
</div>
@endsection

