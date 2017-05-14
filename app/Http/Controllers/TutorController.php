<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Ciclo;

use sigespi\Carrera;

use sigespi\Protocolo;

use sigespi\User;

use Alert;

use Auth;

use DB;

class TutorController extends Controller
{
  function __construct()
  {
    return $this->middleware('auth');
  }
  
    public function index()
    {
      return view('tutor.index');
    }

    public function elegirCicloProtocolo()
    {
      $ciclos = Ciclo::all();

      return view('tutor.elegirCicloProtocolo', compact('ciclos'));
    }

    public function crearProtocolo($id)
   {
       $ciclo = Ciclo::findOrFail($id);
       $carrera = Carrera::where('grupo', '=', Auth::user()->t_proy)->first();

       return view('tutor.crearProtocolo', compact('ciclo', 'carrera'));
   }

   public function crearProtocoloForm(Request $request)
   {
    // dd($request->all());

/*       Protocolo::create($request->all());
*/       
Protocolo::create([
   'nom_protocolo' => $request->input('nom_protocolo'),
   'universidad' => $request->input('universidad'),
   'facultad' => $request->input('facultad'),
   'carrera' => $request->input('carrera'),
   'introduccion' => $request->input('introduccion'),
   'antecedentes' => $request->input('antecedentes'),
   'objetivos' => $request->input('objetivos'),
   'obj_particulares' => $request->input('obj_particulares'),
   'justificacion' => $request->input('justificacion'),
   'herramientas' => $request->input('herramientas'),
   'entregables' => $request->input('entregables'),
   'preguntas_guia' => $request->input('preguntas_guia'),
   'semestre' => $request->input('semestre'),
   'fec_ini' => $request->input('fec_ini'),
   'fec_fin' => $request->input('fec_fin'),
   'carrera_id' => $request->input('carrera_id'),
   'ciclo_id' => $request->input('ciclo_id'),
   'user_id' => $request->input('user_id')
  ]);

       return redirect()->route('verProtocolos')->with('info', 'Protocolo creado exitosamente');
   }

   public function verProtocolos()
   {   
       $protocolos = Protocolo::all();

       return view('tutor.verProtocolos', compact('protocolos'));
   }

   public function verOnlyProtocolo($id)
   {
    $protocolo = Protocolo::findOrFail($id);

    return view('tutor.verOnlyProtocolo', compact('protocolo'));
   }

   public function editarOnlyProtocolo($id)
   {
        $protocolo = Protocolo::findOrFail($id);
        return view('tutor.editarOnlyProtocolo', compact('protocolo'));
   }

   public function editarOnlyProtocoloForm(Request $request, $id)
   {

      dd($request->all());
   }

   public function asignarDocentesProtocolo()
   {
       $protocolos = Protocolo::all();
       return view('tutor.asignarDocentesProtocolo', compact('protocolos'));
   }

   public function asignarDocentesProtocoloForm($id)
   {
      $protocolo = Protocolo::findOrFail($id);
      $users = User::where('rol', '>', 1)->orderBy('nom_docente', 'ASC')->pluck('nom_docente', 'id');
      return view('tutor.asignarDocentesProtocoloForm', compact('protocolo', 'users'));
   }

   public function datosAsignarDocentesProtocolo(Request $request, $id)
   {
      if ($request->input('users') == null) 
      {
        Alert::warning('Por favor elige docentes', 'Elegir docentes!');
        return redirect()->back();
      }

      $protocolo = Protocolo::find($id);
      $protocolo->manyUsers()->sync($request->get('users', []));
      
      Alert::success('Los docentes han sido asignados a este protocolo', 'Docentes asignados!');
      return redirect()->route('asignarDocentesProtocolo');
   }

   public function editarDocentesProtocoloForm($id)
   {
      $protocolo = Protocolo::findOrFail($id);
      $users = User::where('rol', '>', 1)->orderBy('nom_docente', 'ASC')->pluck('nom_docente', 'id');
       return view('tutor.editarDocentesProtocoloForm', compact('protocolo', 'users'));
   }

    public function datosEditarDocentesProtocolo(Request $request, $id)
   {
      if ($request->input('users') == null) 
      {
        Alert::warning('Por favor elige docentes', 'Elegir docentes!');
        return redirect()->back();
      }
      
      $protocolo = Protocolo::find($id);
      $protocolo->manyUsers()->sync($request->get('users', []));
      
      Alert::info('Se modificó la asignación de docentes en el protocolo ', 'Docentes Modificados');
      return redirect()->route('asignarDocentesProtocolo');
   }

   public function bajaProtocolos(Request $request, $id)
   {    
       dd($id);
       $activo = $request->input('activo');
       DB::table('protocolos')->where('id', $id)->update(['activo' => $activo]);
       
       Alert::success('Protocolo dado de baja exitosamente', 'Baja Exitosa');
       //alert()->success('Protocolo dado de baja exitosamente', 'Baja Exitosa');
       return redirect()->route('verProtocolos');
   }

}














































