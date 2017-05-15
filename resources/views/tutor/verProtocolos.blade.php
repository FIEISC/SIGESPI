@extends('tutor.modulos.plantilla')

@section('title', 'Crear Protocolo')

@section('contenido')

<div class="col-md-10 col-md-offset-1">
  <h2>Protocolos creados</h2>

  <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr class="bg-success">
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

           <button style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ventana">Ver  <span class="glyphicon glyphicon-eye-open"></span></button>

           <div class="modal fade" id="ventana">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h3>Información del protocolo</h3>
                 </div>

                 <div class="modal-body">
                  <h3 class="text-center">{{ $protocolo->nom_protocolo }}</h3>
                  <hr>
                  <h4 class="text-center">{{ $protocolo->universidad }}</h4>
                  <h4 class="text-center">{{ $protocolo->facultad }}</h4>
                  <h4 class="text-center">{{ $protocolo->carrera }}</h4>
                  <h4 class="text-center">Semestre: {{ $protocolo->semestre }}</h4>
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

           <a style="margin-left: 60px;" href="{{ route('editarOnlyProtocolo', $protocolo->id) }}" class="btn btn-warning btn-sm">Editar   <span class="glyphicon glyphicon-edit"></span></a>
          

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

           <button style="margin-left: 50px;" type="button" class="btn btn-danger btn-sm" data-container="body" data-toggle="popover" data-placement="top" data-content="Ponte en contacto con el Coordinador académico para llevar acabo esta acción!">
            Baja  <span class="glyphicon glyphicon-arrow-down"></span>
          </button>

          </td>
         </tr>
       @endif
      @endforeach
    </tbody>
  </table>
</div>
@endsection

