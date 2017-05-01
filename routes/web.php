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

Route::get('/admin/alta_carreras', 'AdminController@altaCarreras')->name('altaCarreras');

Route::post('/admin/alta_carreras', 'AdminController@altaCarrerasForm')->name('altaCarrerasForm');

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

Route::get('/coordinador/alta_tutores', 'CoordinadorController@altaTutores')->name('altaTutores');

Route::get('/coordinador/alta_tutores/1x1/{id}', 'CoordinadorController@asignarTutores')->name('asignarTutores');

Route::put('/coordinador/alta_tutores/1x1/{id}', 'CoordinadorController@asignarTutoresForm')->name('asignarTutoresForm');

//Rutas Coordinador de Carrera!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/coordinador_carrera/index', 'CoordinadorCarreraController@index')->name('c_carrera');

Route::get('/coordinador_carrera/tutores', 'CoordinadorCarreraController@listaTutores')->name('listaTutores');

/*Route::get('/coordinador_carrera/alta_tutores', 'CoordinadorCarreraController@altaTutoresProyecto')->name('altaTutoresProyecto');

Route::get('/coordinador_carrera/alta_tutores/{id}', 'CoordinadorCarreraController@asignarAltaTutoresProyecto')->name('asignarAltaTutoresProyecto');

Route::put('/coordinador_carrera/alta_tutores/{id}', 'CoordinadorCarreraController@asignarAltaTutoresProyectoForm')->name('asignarAltaTutoresProyectoForm');*/

//Rutas del Tutor de Proyecto!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/tutor/index', 'TutorController@index')->name('tutor');

//Rutas del Docente!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/docente/index', 'DocenteController@index')->name('docente');

//Niveles de usuario!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/n1', 'PaginasController@nivel1')->name('nivel1');

Route::get('/n2', 'PaginasController@nivel2')->name('nivel2');

Route::get('/n3', 'PaginasController@nivel3')->name('nivel3');

Route::get('/n4', 'PaginasController@nivel4')->name('nivel4');

Route::get('/n5', 'PaginasController@nivel5')->name('nivel5');