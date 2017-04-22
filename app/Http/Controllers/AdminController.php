<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Http\Requests\LoginAdminRequest;

use Auth;

use DB;

use sigespi\User;

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

}
