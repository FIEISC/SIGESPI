<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Http\Requests\RegistroAlumnoRequest;

use sigespi\Ciclo;

use sigespi\Plantel;

use sigespi\User;

use sigespi\Carrera;

use sigespi\Alumno;

use sigespi\Protocolo;

use sigespi\Equipo;

use Alert;

use PDF;

class AlumnoController extends Controller
{
    public function opcionesAlumno()
    {
    	return view('alumnos.opcionesAlumno');
    }

    public function elegirPlantel()
    {
    	$planteles = Plantel::all();
    	return view('alumnos.elegirPlantel', compact('planteles'));
    }

    public function registroAlumno(Request $request)
    {
        $plantel_id = $request->input('plantel_id');
    	$plantel = Plantel::findOrFail($plantel_id);
    	$ciclo = Ciclo::where('activo', '=', 1)->first();
    	$carreras = Carrera::where('plantel_id', $plantel_id)->get();
    	return view('alumnos.registroAlumno', compact('ciclo', 'plantel', 'carreras'));
    }

    public function datosRegistroAlumno(RegistroAlumnoRequest $request)
    {
        //dd($request->all());

    /*    $this->validate($request, [
            'nom_alumno' => 'required',
            'email' => 'required'
            ]);*/
    
    	Alumno::create($request->all());
    	Alert::success('Ya estas registrado en el sistema', 'Registro Exitoso');
    	return redirect()->route('elegirPlantel');
    }

    public function infoAlumno()
    {
        $ciclo = Ciclo::where('activo', '=', 1)->first();
        $carreras = Carrera::all();
        return view('alumnos.infoAlumno', compact('ciclo', 'carreras'));
    }

    public function datosInfoAlumno(Request $request)
    {
        $semestre = $request->input('semestre');
        $carrera = $request->input('carrera');

        $alumnos = Alumno::orderBy('equipo_id', 'ASC')->where('semestre', '=', $semestre)->where('carrera_id', '=', $carrera)->get();
        $protocolos = Protocolo::all();
        $equipos = Equipo::all();

        return view('alumnos.listaAlumnos', compact('alumnos', 'protocolos', 'equipos'));
    }

     public function descargarProtocolo($id)
    {
        $protocolo = Protocolo::findOrFail($id);
        $pdf = PDF::loadView('alumnos.protocolo', ['protocolo' => $protocolo]);
        return $pdf->download('protocolo.pdf');
    }


}
