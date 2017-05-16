<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Carrera;

use sigespi\Ciclo;

use sigespi\Alumno;

use sigespi\Protocolo;

use sigespi\Equipo;

use Alert;

class PaginasController extends Controller
{

	function __construct()
	{
		return $this->middleware('auth', ['except' => ['registroAlumnos', 'datosRegistroAlumnos', 'infoAlumnos', 'datosInfoAlumnos', 'listaAlumnos']]);
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

    public function infoAlumnos()
    {
        $ciclo = Ciclo::where('activo', '=', 1)->first();
        $carreras = Carrera::all();
        return view('alumnos.infoAlumno', compact('ciclo', 'carreras'));
    }

    public function datosInfoAlumnos(Request $request)
    {
        $semestre = $request->input('semestre');
        $carrera = $request->input('carrera');

        $alumnos = Alumno::where('semestre', '=', $semestre)->where('carrera_id', '=', $carrera)->get();
        $protocolos = Protocolo::all();
        $equipos = Equipo::all();

        //return redirect()->route('listaAlumnos')->with(['alumnos' => $alumnos]);
        return view('alumnos.listaAlumnos', compact('alumnos', 'protocolos', 'equipos'));
    }

    public function listaAlumnos()
    {
        return view('alumnos.listaAlumnos');
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
