@extends('tutor.modulos.plantilla')

@section('title', 'Crear Protocolo')

@section('contenido')

<div class="col-md-10 col-md-offset-1">

<div class="card-panel green lighten-4">

  <h4>Protocolos creados</h4>
    <table class="bordered highlight responsive-table"">
    <thead>
      <tr>
        <th class="text-center">Título</th>
        <th class="text-center">Acción</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($protocolos as $protocolo)
       @if ($protocolo->user_id == Auth::user()->id && $protocolo->activo == 1)
         <tr>
           <td>{{ $protocolo->nom_protocolo }}</td>
           <td>

          {{--  <a style="margin-left: 150px;" href="{{ route('verOnlyProtocolo', $protocolo->id) }}" class="btn btn-primary btn-sm">Ver   <span class="glyphicon glyphicon-eye-open"></span></a> --}}

         <button class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Ver Protocolo" data-toggle="modal" data-target="#ventana"><i class="material-icons">visibility</i>
        </button>

           <div class="modal fade" id="ventana">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 </div>

                 <div class="modal-body">
                  <h4 class="text-center">{{ $protocolo->universidad }}</h4>
                  <p class="text-center">{{ $protocolo->facultad }}</p>
                  <p class="text-center">{{ $protocolo->carrera }}</p>
                  <h5 class="text-center">{{ $protocolo->nom_protocolo }}</h5>
                  <p class="text-center">Semestre: {{ $protocolo->semestre }}</p>
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

                 <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>

               </div>
             </div>
           </div>

           {{-- <a style="margin-left: 60px;" href="{{ route('editarOnlyProtocolo', $protocolo->id) }}" class="btn btn-warning btn-sm">Editar   <span class="glyphicon glyphicon-edit"></span></a> --}}

           <a style="margin-left: 20px;" href="{{ route('editarOnlyProtocolo', $protocolo->id) }}" class="waves-effect waves-light orange btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar Protocolo"><i class="material-icons">mode_edit</i></a>
          

          {{--  <button style="margin-left: 50px;" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ventana">Baja  <span class="glyphicon glyphicon-arrow-down"></span></button>

           <div class="modal fade" id="ventana">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h3>Confirmación de la baja del protocolo</h3>
                 </div>

                 <div class="modal-body">
                   <img style="width: 80px; height: 80px; margin-left: 150px;" src="{{ asset('/images/warning-icon.png') }}" alt="">
                   <p>El protocolo será dado de baja y no podrá editarlo</p>
                 </div>

                 <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                   <div style="display: inline-flex; margin-left: 20px;">
                     <form action="{{ route('bajaProtocolos', $protocolo->id) }}" method="POST">
                      {!! csrf_field() !!}
                      {!! method_field('PUT') !!}

                      <input type="hidden" name="activo" value="0">

                      <button type="submit" class="bnt btn-primary btn-sm">Confirmar  <span class="glyphicon glyphicon-arrow-down"></span></button>
                    </form>
                  </div>

                 </div>

               </div>
             </div>
           </div> --}}  {{-- fin del modal --}}

        {{--    <button style="margin-left: 50px;" type="button" class="btn btn-danger btn-sm" data-container="body" data-toggle="popover" data-placement="top" data-content="Ponte en contacto con el Coordinador académico para llevar acabo esta acción!">
            Baja  <span class="glyphicon glyphicon-arrow-down"></span>
          </button> --}}

          {{-- <a class="waves-effect waves-light btn tooltipped" data-position="right" data-delay="50" data-tooltip="Dar de Baja: para esta acción debes ponerte en contacto con el CA"><i class="material-icons">add</i></a> --}}

           <button style="margin-left: 20px;" class="btn waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Para dar de baja el protocolo por favor de ponerse en contacto con el coordinador académico"><i class="material-icons">arrow_downward</i>
        </button>

          </td>
         </tr>
       @endif
      @endforeach
    </tbody>
  </table>
</div>

</div>

</div>

@endsection

