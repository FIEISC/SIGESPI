<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Ciclo;

use sigespi\Carrera;

use sigespi\Protocolo;

use Auth;

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
   	   //dd($request->all());
   	   Protocolo::create($request->all());

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
      return view('tutor.asignarDocentesProtocoloForm', compact('protocolo'));
   }
}














































