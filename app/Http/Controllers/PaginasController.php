<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Carrera;

use sigespi\Ciclo;

use sigespi\Alumno;

use Alert;

class PaginasController extends Controller
{

	function __construct()
	{
		return $this->middleware('auth', ['except' => ['registroAlumnos', 'datosRegistroAlumnos']]);
	}

    public function registroAlumnos()
    {
        $carreras = Carrera::all();
        $ciclo = Ciclo::where('activo', '=', 1)->first();
        return view('alumnos.registro', compact('carreras', 'ciclo'));
    }

    public function datosRegistroAlumnos(Request $request)
    {
        Alumno::create($request->all());
        
        Alert::success('Serás asignado a un equipo de trabajo', 'Registro exitoso!');

        return redirect()->route('registroAlumnos');
 
    }
	
    public function nivel1()
    {
    	return view('niveles.nivel1');
    }

    public function nivel2()
    {
    	return view('niveles.nivel2');
    }

    public function nivel3()
    {
        return view('niveles.nivel3');
    }

    public function nivel4()
    {
        return view('niveles.nivel4');
    }

    public function nivel5()
    {
        return view('niveles.nivel5');
    }
}
