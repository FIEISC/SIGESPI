<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\User;

use sigespi\Protocolo;

use DB;

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

    public function validarAsignarUsuarios()
    {
    	$docentes = User::all();

    	return view('coordinador.validarAsignarUsuarios', compact('docentes'));
    }

    public function formvalidarAsignarUsuarios(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
        	'activo' => $request->input('activo')]);

        return redirect()->route('validarAsignarUsuarios')->with('info', 'Usuario Validado');
    }

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

    	return redirect()->route('validarAsignarUsuarios')->with('info2', 'Coordinador de Carrera Asignado');
    }

    public function darBajaReasignarCoordinadorCarrera()
    { 
        $docentes = User::all();

        return view('coordinador.darBajaReasignarCoordinadorCarrera', compact('docentes'));
    }

    public function bajaDocenteForm(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update(['activo' => $request->input('activo')]);

        return redirect()->route('darBajaReasignarCoordinadorCarrera')->with('info', 'Docente dado de baja exitosamente, para darlo de alta ir a la sección "válidar y dar de alta"');
    }

    //Alta de tutores!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function altaTutores()
    {
        $docentes = User::orderBy('c_carr', 'ASC')->get();
        $tutores = User::orderBy('nom_docente', 'ASC')->get();

        return view('coordinador.altaTutores', compact('docentes', 'tutores'));
    }

    public function asignarTutores($id)
    {
        $cc = User::findOrFail($id);
        //$tutores = User::all();
        //Para pasar todos los tutores menos el cc elegido
        $tutores = User::where('id', '!=', $id)->get();

        return view('coordinador.asignarTutores', compact('tutores', 'cc'));
    }

    public function asignarTutoresForm(Request $request, $id)
    {
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
}
