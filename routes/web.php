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
	$admin->t_proy = 'Z';
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

Route::get('/admin/reasignar_coordinador', 'AdminController@reasignarCoordinador')->name('reasignarCoordinador');

Route::put('/admin/quitar_coordinador/{id}', 'AdminController@quitarCoordinadorForm')->name('quitarCoordinadorForm');

Route::put('/admin/reasignar_coordinador/{id}', 'AdminController@reasignarCoordinadorForm')->name('reasignarCoordinadorForm');

Route::get('/admin/alta_campus', 'AdminController@altaCampus')->name('altaCampus');

Route::get('/admin/alta_campus/lista', 'AdminController@listaCampus')->name('listaCampus');

Route::post('/admin/alta_campus', 'AdminController@altaCampusForm')->name('altaCampusForm');

Route::get('/admin/alta_planteles', 'AdminController@altaPlanteles')->name('altaPlanteles');

Route::post('/admin/alta_planteles', 'AdminController@altaPlantelesForm')->name('altaPlantelesForm');

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

Route::get('/coordinador/asignar_coordinador_carrera/{id}', 'CoordinadorController@asignarCoordinadorCarrera')->name('asignarCoordinadorCarrera');

Route::put('/coordinador/asignar_coordinador_carrera/{id}', 'CoordinadorController@formAsignarCoordinadorCarrera')->name('formAsignarCoordinadorCarrera');

Route::get('/coordinador/baja_reasignacion', 'CoordinadorController@darBajaReasignarCoordinadorCarrera')->name('darBajaReasignarCoordinadorCarrera');

Route::put('/coordinador/baja_docente/{id}', 'CoordinadorController@bajaDocenteForm')->name('bajaDocenteForm');

//Niveles de usuario!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/n1', 'PaginasController@nivel1')->name('nivel1');