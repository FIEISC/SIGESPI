@extends('tutor.modulos.plantilla')

@section('title', 'Crear Protocolo')

@section('contenido')

<div class="row">
  <div class="col s12">
    <div class="card-panel green lighten-4">

     <h4>Protocolos creados</h4>
      <table class="bordered highlight centered responsive-table">

          <thead>
            <tr>
              <th class="text-center">Título</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($protocolos as $protocolo)
            @if ($protocolo->user_id == Auth::user()->id && $protocolo->activo == 1)
            <tr>
             <td>{{ $protocolo->nom_protocolo }}</td>
             <td>

               <a class="waves-effect waves-light blue btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver Protocolo" href="#modal1"><i class="material-icons">visibility</i></a>

               <!-- Modal Structure -->
               <div id="modal1" class="modal">
               <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">

                     <div class="col s1 offset-s11">
                        <a href="" class="modal-action modal-close"><i class="material-icons">close</i></a>
                     </div>

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
                     <a href="" class="modal-action modal-close waves-effect waves-green btn">Cerrar</a>
                   </div>

                 </div>
               </div>
              </div>

           {{--     <button class="btn waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Ver Protocolo" data-toggle="modal" data-target="#ventana"><i class="material-icons">visibility</i>
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
             </div> --}}

             <a style="margin-left: 20px;" href="{{ route('editarOnlyProtocolo', $protocolo->id) }}" class="waves-effect waves-light orange btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar Protocolo"><i class="material-icons">mode_edit</i></a>


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

