@extends('modulos.plantilla')

@section('title', 'Registro')

@section('contenido')

<div class="col-md-12">
  <table class="table table-bordered table-hover table-responsive">
    <thead>
      <th>Alumno</th>
     {{--  <th>Carrera</th>
      <th>Semestre</th> --}}
      <th>Equipo</th>
      <th>Tutor de Equipo</th>
      <th>Protocolo</th>
      <th>Acciones</th>
    </thead>

   <tbody>
     @foreach ($alumnos as $alumno)
       <tr>
         <td>{{ $alumno->nom_alumno }}</td>

         <td>{{ $alumno->equipo->nom_equipo }}</td>

         @foreach ($equipos as $equipo)
           @if ($equipo->id == $alumno->equipo_id)
              <td>{{ $equipo->user->nom_docente }}</td>
           @endif
         @endforeach

         @foreach ($protocolos as $protocolo)
           @if ($protocolo->semestre == $alumno->semestre && $protocolo->carrera_id == $alumno->carrera_id)
               <td>{{ $protocolo->nom_protocolo }}</td>
           @endif
         @endforeach

         @foreach ($protocolos as $protocolo)
        @if ($protocolo->semestre == $alumno->semestre && $protocolo->carrera_id == $alumno->carrera_id)
          <td>
          <button style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ventana">Ver  <span class="glyphicon glyphicon-eye-open"></span></button>

           <div class="modal fade" id="ventana">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h3>Información del protocolo</h3>
                 </div>

                 <div class="modal-body">
                
                  <h4 class="text-center">{{ $protocolo->universidad }}</h4>
                  <h4 class="text-center">{{ $protocolo->facultad }}</h4>
                  <h4 class="text-center">{{ $protocolo->carrera }}</h4>
                  <h4 class="text-center">Semestre: {{ $protocolo->semestre }}</h4>
                  <hr>

                  <h3 class="text-center">{{ $protocolo->nom_protocolo }}</h3>
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

          <a href="{{ route('descargarProtocolo', $protocolo->id) }}" class="btn btn-info btn-sm">Descargar  <span class="glyphicon glyphicon-download-alt"></span></a>
          </td>
        @endif
      @endforeach

       </tr>
     @endforeach
   </tbody>
  </table>
</div>
@endsection


































