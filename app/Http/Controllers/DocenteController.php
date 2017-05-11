<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Protocolo;

use sigespi\User;

class DocenteController extends Controller
{
	function __contruct()
	{
		return $this->middleware('auth');
	}
	
    public function index()
    {
    	return view('docente.index');
    }

    public function protocolosAsignados()
    {
    	$protocolos = Protocolo::all();
    	$docentes = User::all();

    	return view('docente.protocolosAsignados', compact('protocolos', 'docentes'));
    }
}
