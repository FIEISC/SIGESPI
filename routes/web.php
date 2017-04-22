<?php

/*Route::get('/registro/admin', function()
{
	$admin = new sigespi\User;
	$admin->nom_docente = 'Admin';
	$admin->no_docente = '220494';
	$admin->email = 'naty_snuff@hotmail.com';
	$admin->password = bcrypt('nath123');
	$admin->rol = 0;
	$admin->plantel = 'fie';
	$admin->c_carr = 'Z';
	$admin->activo = 1;
	$admin->save();

});*/

//Rutas Administrador!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Route::get('/admin/login', 'AdminController@login')->name('loginAdmin');

Route::post('/admin/login', 'AdminController@datosLoginAdmin')->name('datosLoginAdmin');

Route::get('/admin/home', 'AdminController@home')->name('homeAdmin');

Route::get('/admin/salir', 'AdminController@salir')->name('salirAdmin');

//Paginas del Administrador!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/admin/validar_coordinador', 'AdminController@validarCoordinador')->name('validarCoordinador');

Route::put('admin/datos/validar_coordinador/{id}', 'AdminController@formValidarCoordinador')->name('formValidarCoordinador');

Route::put('/admin/datos/cambiar_roles/{id}', 'AdminController@datosCambiarRoles')->name('datosCambiarRoles');

//Rutas del sistema en general!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/registro', 'AuthController@registro')->name('registro');

Route::post('/registro', 'AuthController@datosRegistro')->name('datosRegistro');

Route::get('/', 'AuthController@login')->name('login');

Route::post('/', 'AuthController@datosLogin')->name('datosLogin');

Route::get('/salir', 'AuthController@salir')->name('salir');

//Rutas del Coordinador Academico!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/coordinador/index', 'CoordinadorController@index')->name('coordinador');

Route::get('/coordinador/asignar_validar_usuarios', 'CoordinadorController@validarAsignarUsuarios')->name('validarAsignarUsuarios');

Route::put('/coordinador/asignar_validar_usuarios/{id}', 'CoordinadorController@formvalidarAsignarUsuarios')->name('formvalidarAsignarUsuarios');

//Niveles de usuario!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/n1', 'PaginasController@nivel1')->name('nivel1');