<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\User;

use sigespi\Protocolo;

use sigespi\Ciclo;

use DB;

use Alert;

class CoordinadorController extends Controller
{
	function __construct()
	{
		return $this->middleware('auth');
	}

    public function index()
    {
    	return view('coordinador.index');
    }
    
    //Para activar la cuenta de los usuarios!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    public function validarAsignarUsuarios()
    {
    	$docentes = User::all();

        $noactivos = User::where('activo', '=', 0)->get();

/*        if (count($vacios) === 0) 
        {
            return "No hay activos";
        }

        else
        {
            return "Gatos";
        }*/

    	return view('coordinador.validarAsignarUsuarios', compact('docentes', 'noactivos'));
    }

    public function formvalidarAsignarUsuarios(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
        	'activo' => $request->input('activo')]);
        
        Alert::success('El docente ha sido dado de alta en el sistema', 'Docente activado!');
        return redirect()->route('validarAsignarUsuarios');
    }
    
   //Para asignar a los coordinadores de carrera!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    public function asignarCoordinadorCarrera($id)
    {
    	$docente = User::findOrFail($id);
    	return view('coordinador.asignarCoordinadorCarrera', compact('docente'));
    }
    
    public function formAsignarCoordinadorCarrera(Request $request, $id)
    {

    	/*$this->validate($request, [
            'c_carr' => 'required'
    		]);*/

    	$c_carr = $request->input('c_carr');

        $roles = implode(',', $request->input('rol'));

    	if ($c_carr == null) 
    	{
    		return redirect()->back()->with('info', 'Elige una carrera');
    	}

    	DB::table('users')->where('id', $id)->update(['c_carr' => $c_carr, 'rol' => $roles]);
        
        if ($c_carr == 'A') 
        {
        
        Alert::success('Ahora es Coordinador de la carrera Ing. Mecánico Electricista ', 'Coordinador de Carrera asignado');
        }

        elseif ($c_carr == 'B') 
        {
            Alert::success('Ahora es Coordinador de la carrera Ing. en Tecnologías Electrónicas ', 'Coordinador de Carrera asignado');
        }

        elseif ($c_carr == 'C') 
        {
            Alert::success('Ahora es Coordinador de la carrera Ing. en Mecatrónica ', 'Coordinador de Carrera asignado');
        }

        elseif ($c_carr == 'D') 
        {
            Alert::success('Ahora es Coordinador de la carrera Ing. en Sistemas Computacionales ', 'Coordinador de Carrera asignado');
        }

    	return redirect()->route('validarAsignarUsuarios');
    }

    //Para dar de baja o reasignar coordinadores de carrrera!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    public function darBajaReasignarCoordinadorCarrera()
    { 
        $docentes = User::orderBy('c_carr', 'ASC')->get();

        return view('coordinador.darBajaReasignarCoordinadorCarrera', compact('docentes'));
    }

    public function bajaDocenteForm(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update(['activo' => $request->input('activo')]);
        
        Alert::success('Para darlo de alta de nuevo, ir a la sección "Activar y Asignar"', 'Docente dado de baja');

        return redirect()->route('darBajaReasignarCoordinadorCarrera');
    }

    //Alta de tutores!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function altaTutores()
    {
        $docentes = User::orderBy('c_carr', 'ASC')->get();
        $tutores = User::orderBy('t_semestre', 'ASC')->get();

        return view('coordinador.altaTutores', compact('docentes', 'tutores'));
    }

    public function asignarTutores($id)
    {
        $cc = User::findOrFail($id);
        //$tutores = User::all();
        //Para pasar todos los tutores menos el cc elegido
        $tutores = User::where('id', '!=', $id)->get();
        $ciclo = Ciclo::where('activo', '=', 1)->first();
        return view('coordinador.asignarTutores', compact('tutores', 'cc', 'ciclo'));
    }

    public function asignarTutoresForm(Request $request, $id)
    {
        //dd($request->all());

        $roles = implode(',', $request->input('rol'));
        $t_semestre = $request->input('t_semestre');
        $t_proy = $request->input('t_proy');

        DB::table('users')->where('id', $id)->update(['t_proy' => $t_proy, 'rol' => $roles, 't_semestre' => $t_semestre]);

        return redirect()->route('altaTutores')->with('info', 'Tutor asignado');
    }

    //Ver Protocolos!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function verProtocolos()
    {
        $protocolos = Protocolo::all();
        return view('coordinador.verProtocolos', compact('protocolos'));
    }

    public function bajaProtocolos()
    {   
        $protocolos = Protocolo::all();
        return view('coordinador.bajaProtocolos', compact('protocolos'));
    }

    public function datosProtocolosBaja(Request $request, $id)
    {
        //dd($id);
        $activo = $request->input('activo');
        DB::table('protocolos')->where('id', $id)->update(['activo' => $activo]);
        Alert::success('Protocolo dado de baja exitosamente', 'Baja Exitosa');
       return redirect()->route('bajaProtocolosCoordinador');
    }

    public function eliminarProtocolos()
    {
        $protocolos = Protocolo::all();
        return view('coordinador.eliminarProtocolos', compact('protocolos'));
    }

    public function datosEliminarProtocolo(Request $request, $id)
    {
        DB::table('protocolos')->where('id', $id)->delete();
        Alert::success('Protocolo eliminado exitosamente', 'Eliminación Exitosa!');
       return redirect()->route('eliminarProtocolos');

    }
}
