<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\User;

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
}
