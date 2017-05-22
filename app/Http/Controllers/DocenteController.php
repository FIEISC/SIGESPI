<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Protocolo;

use sigespi\User;

use Alert;

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

    public function verProtocoloDocente($id)
    {
        $protocolo = Protocolo::findOrFail($id);
        return view('docente.verProtocolo', compact('protocolo'));
    }

    public function editarProtocolo($id)
    {
        $protocolo = Protocolo::findOrFail($id);
        return view('docente.editarProtocolo', compact('protocolo'));
    }

    public function datosEditarProtocolo(Request $request, $id)
    {
        Protocolo::findOrFail($id)->update($request->all());
        Alert::success('El protocolo ha sido editado y todos podrán ver los cambios', 'Protocolo Editado');

        return redirect()->route('protocolosAsignados');
    }
}
