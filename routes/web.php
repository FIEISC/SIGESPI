<?php

/*Route::get('/registro/admin', function()
{
	$admin = new sigespi\User;
	$admin->nom_docente = 'Admin';
	$admin->no_docente = '220494';
	$admin->email = 'naty_snuff@hotmail.com';
	$admin->password = bcrypt('nath123');
	$admin->rol = 0;
	$admin->plantel = 'FIE';
	$admin->c_carr = 'Z';
	$admin->t_proy = 'Z';
	$admin->t_semestre = 0;
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

Route::get('/admin/alta_ciclos', 'AdminController@altaCiclos')->name('altaCiclos');

Route::post('/admin/alta_ciclos', 'AdminController@altaCiclosForm')->name('altaCiclosForm');

//Rutas del sistema en general!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/registro', 'AuthController@registro')->name('registro');

Route::post('/registro', 'AuthController@datosRegistro')->name('datosRegistro');

Route::get('/', 'AuthController@login')->name('login');

Route::post('/', 'AuthController@datosLogin')->name('datosLogin');

Route::get('/salir', 'AuthController@salir')->name('salir');

Route::get('/alumnos/registro', 'PaginasController@registroAlumnos')->name('registroAlumnos');

Route::post('/alumnos/registro/datos', 'PaginasController@datosRegistroAlumnos')->name('datosRegistroAlumnos');

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

Route::get('/coordinador/protocolos', 'CoordinadorController@verProtocolos')->name('verProtocolosCoordinador');

Route::get('/coordinador/bajaProtocolos', 'CoordinadorController@bajaProtocolos')->name('bajaProtocolosCoordinador');

Route::put('/coordinador/datos/baja_protocolos/{id}', 'CoordinadorController@datosProtocolosBaja')->name('datosProtocolosBaja');

Route::get('/tutor/eliminarProtocolos', 'CoordinadorController@eliminarProtocolos')->name('eliminarProtocolos');

Route::delete('/tutor/eliminarProtocolo/{id}', 'CoordinadorController@datosEliminarProtocolo')->name('datosEliminarProtocolo');

//Rutas Coordinador de Carrera!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/coordinador_carrera/index', 'CoordinadorCarreraController@index')->name('c_carrera');

Route::get('/coordinador_carrera/tutores', 'CoordinadorCarreraController@listaTutores')->name('listaTutores');

Route::get('/coordinador_carrera/protocolos', 'CoordinadorCarreraController@protocolosTutores')->name('protocolosTutores');

Route::get('/coordinador_carrera/protocolo/{id}', 'CoordinadorCarreraController@verProtocolo')->name('verProtocolocc');

/*Route::get('/coordinador_carrera/alta_tutores', 'CoordinadorCarreraController@altaTutoresProyecto')->name('altaTutoresProyecto');

Route::get('/coordinador_carrera/alta_tutores/{id}', 'CoordinadorCarreraController@asignarAltaTutoresProyecto')->name('asignarAltaTutoresProyecto');

Route::put('/coordinador_carrera/alta_tutores/{id}', 'CoordinadorCarreraController@asignarAltaTutoresProyectoForm')->name('asignarAltaTutoresProyectoForm');*/

//Rutas del Tutor de Proyecto!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/tutor/index', 'TutorController@index')->name('tutor');

Route::get('/tutor/elegir_ciclo', 'TutorController@elegirCicloProtocolo')->name('elegirCicloProtocolo');

Route::get('/tutor/crear_protocolo/{id}', 'TutorController@crearProtocolo')->name('crearProtocolo');

Route::post('/tutor/crear_protocolo', 'TutorController@crearProtocoloForm')->name('crearProtocoloForm');

Route::get('/tutor/ver_protocolos', 'TutorController@verProtocolos')->name('verProtocolos');

Route::get('/tutor/ver_protocolo/{id}', 'TutorController@verOnlyProtocolo')->name('verOnlyProtocolo');

Route::get('/tutor/editar_protocolo/{id}', 'TutorController@editarOnlyProtocolo')->name('editarOnlyProtocolo');

Route::put('/tutor/editar_protocolo_datos/{id}', 'TutorController@editarOnlyProtocoloForm')->name('editarOnlyProtocoloForm');

Route::get('/tutor/asignar_docentes', 'TutorController@asignarDocentesProtocolo')->name('asignarDocentesProtocolo');

Route::get('/tutor/asignar_docentes/{id}', 'TutorController@asignarDocentesProtocoloForm')->name('asignarDocentesProtocoloForm');

Route::post('/tutor/asignar_docentes/datos/{id}', 'TutorController@datosAsignarDocentesProtocolo')->name('datosAsignarDocentesProtocolo');

Route::get('/tutor/editar_docentes/{id}', 'TutorController@editarDocentesProtocoloForm')->name('editarDocentesProtocoloForm');

Route::put('/tutor/editar_docentes/datos/{id}', 'TutorController@datosEditarDocentesProtocolo')->name('datosEditarDocentesProtocolo');

Route::put('/tutor/baja_protocolo/{id}', 'TutorController@bajaProtocolos')->name('bajaProtocolos');

Route::get('/tutor/crear_equipos', 'TutorController@crearEquipos')->name('crearEquipos');

Route::get('/tutor/crear_equipos/form/{id}', 'TutorController@crearEquiposForm')->name('crearEquiposForm');

Route::post('/tutor/datos_crear_equipos', 'TutorController@datosCrearEquipos')->name('datosCrearEquipos');

Route::get('/tutor/asigar_alumnos_equipos/{id}', 'TutorController@asignarAlumnosEquipos')->name('asignarAlumnosEquipos');

//Rutas del Docente!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/docente/index', 'DocenteController@index')->name('docente');

Route::get('/docente/protocolos', 'DocenteController@protocolosAsignados')->name('protocolosAsignados');

//Niveles de usuario!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('/n1', 'PaginasController@nivel1')->name('nivel1');

Route::get('/n2', 'PaginasController@nivel2')->name('nivel2');

Route::get('/n3', 'PaginasController@nivel3')->name('nivel3');

Route::get('/n4', 'PaginasController@nivel4')->name('nivel4');

Route::get('/n5', 'PaginasController@nivel5')->name('nivel5');