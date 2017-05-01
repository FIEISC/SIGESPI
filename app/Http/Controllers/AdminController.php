<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Http\Requests\LoginAdminRequest;

use sigespi\User;

use sigespi\Campus;

use sigespi\Plantel;

use sigespi\Carrera;

use Auth;

use DB;


class AdminController extends Controller
{
	function __construct()
	{
		return $this->middleware('auth', ['except' => ['login', 'datosLoginAdmin']]);
	}
	public function home()
	{
		return view('admin.home');
	}

    public function login()
    {
    	return view('admin.login');
    }

    public function datosLoginAdmin(LoginAdminRequest $request)
    {
    	$no_docente = $request->input('no_docente');
    	$password = $request->input('password');

    	if (!Auth::attempt(['no_docente' => $no_docente, 'password' => $password, 'activo' => 1, 'rol' => 0, 'c_carr' => 'Z'])) 
    	{
    		return redirect()->back()->with('info', 'Datos Incorrectos');
    	}
    	else
    	{
    		return redirect()->route('homeAdmin')->with('info', 'Bienvenido Administrador');
    	}
    }

    public function salir()
    {
    	Auth::logout();

    	return redirect()->route('loginAdmin');
    }


    //Paginas del Administrador!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    public function validarCoordinador()
    {
    	$docentes = User::all();

    	return view('admin.paginas.validarCoordinador', compact('docentes'));
    }

     public function formValidarCoordinador(Request $request, $id)
        {
          DB::table('users')->where('id', $id)->update([
            'activo' => $request->input('activo'),
            ]);

          return redirect()->back()->with('info', 'Coordinador validado');
        }

      public function datosCambiarRoles(Request $request, $id)
        {
            $roles = implode(',', $request->input('rol'));

            DB::table('users')->where('id', $id)->update(['rol' => $roles]);
            
            return redirect()->route('validarCoordinador');

        }

        public function reasignarCoordinador()
        {
            $docentes = User::all();

            //$coordinador = User::where('rol', 1)->first();

            return view('admin.paginas.reasignarCoordinador', compact('docentes'));
        }

        public function quitarCoordinadorForm(Request $request, $id)
        {
           $roles = implode(',', $request->input('rol'));
           DB::table('users')->where('id', $id)->update(['rol' => $roles]);

           return redirect()->route('reasignarCoordinador');
        }

        public function reasignarCoordinadorForm(Request $request, $id)
        {
            $roles = implode(',', $request->input('rol'));
            DB::table('users')->where('id', $id)->update(['rol' => $roles]);

            return redirect()->route('reasignarCoordinador');
        }

        //Dada de alta a los campus de la universidad

        public function altaCampus()
        {
            return view('admin.paginas.altaCampus');
        }

        public function listaCampus()
        {
            $campus = Campus::all();

            return view('admin.paginas.listaCampus', compact('campus'));
        }

        public function altaCampusForm(Request $request)
        {
            $this->validate($request,
                [
                'nom_campus' => 'required',
                'delegacion' => 'required',
                'nom_universidad' => 'required',
                ]);

            $nom_campus = strtoupper($request->input('nom_campus'));
            $delegacion = strtoupper($request->input('delegacion'));
            $nom_universidad = strtoupper($request->input('nom_universidad'));

            Campus::create(['nom_campus' => $nom_campus, 'delegacion' => $delegacion, 'nom_universidad' => $nom_universidad]);

            return redirect()->route('altaCampus')->with('info', 'El campus ha sido dado de alta exitosamente');
        }

        //Dada de alta de los planteles

        public function altaPlanteles()
        {
            $campus = Campus::all();

            return view('admin.paginas.altaPlanteles', compact('campus'));
        }

        public function altaPlantelesForm(Request $request)
        {
            $this->validate($request, [
                'nom_plantel' => 'required',
                'siglas' => 'required',
                'campus_id' => 'required'
                ]);

            $nom_plantel = strtoupper($request->input('nom_plantel'));
            $siglas = strtoupper($request->input('siglas'));
            $campus_id = $request->input('campus_id');

            Plantel::create(['nom_plantel' => $nom_plantel, 'siglas' => $siglas, 'campus_id' => $campus_id]);

            return redirect()->route('altaPlanteles')->with('info', 'El plantel ha sido dado de alta exitosamente');
        }

        //Dada de alta de las carreras!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

        public function altaCarreras()
        {
            $planteles = Plantel::all();

            return view('admin.paginas.altaCarreras', compact('planteles'));
        }

        public function altaCarrerasForm(Request $request)
        {
            $this->validate($request, [
                 'nom_carrera' => 'required',
                 'siglas' => 'required',
                 'grupo' => 'required',
                 'plantel_id' => 'required'
                ]);
            
            $nom_carrera = strtoupper($request->input('nom_carrera'));
            $siglas = strtoupper($request->input('siglas'));
            $grupo = $request->input('grupo');
            $plantel_id = $request->input('plantel_id');

            Carrera::create(['nom_carrera' => $nom_carrera, 'siglas' => $siglas, 'grupo' => $grupo, 'plantel_id' => $plantel_id]);

            return redirect()->route('altaCarrerasForm')->with('info', 'Carrera creada exitosamente');
        }



}
