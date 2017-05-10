<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\User;

use sigespi\Carrera;

use sigespi\Protocolo;

class CoordinadorCarreraController extends Controller
{

    function __construct()
	{
		return $this->middleware('auth');
	}

    public function index()
    {
    	return view('coordinadorCarrera.index');
    }

    public function listaTutores()
    {
        $tutores = User::orderBy('nom_docente', 'ASC')->get();

        return view('coordinadorCarrera.listaTutores', compact('tutores'));
    }

    public function protocolosTutores()
    {
        $protocolos = Protocolo::all();
        return view('coordinadorCarrera.protocolosTutores', compact('protocolos'));
    }

  /*  public function altaTutoresProyecto()
    {
    	$docentes = User::all();

    	return view('coordinadorCarrera.altaTutoresProyecto', compact('docentes'));
    }

    public function asignarAltaTutoresProyecto($id)
    {
    	$docente = User::findOrFail($id);
        $carreras = Carrera::all();
    	return view('coordinadorCarrera.asignarAltaTutoresProyecto', compact('docente', 'carreras'));
    }

    public function asignarAltaTutoresProyectoForm(Request $request, $id)
    {
        dd($request->all());

       // DB::table('users')->where('id', $id)->update(['t_proy'$request->inpu])
    }*/

    
}
