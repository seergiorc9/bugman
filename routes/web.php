<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});


Auth::routes();

Route::middleware(['auth'])
    ->group(function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/usuarios', 'UsuariosController@index')->name('usuarios.index');
        Route::get('/usuarios/delete/{id}', 'UsuariosController@delete')->name('usuarios.delete');
        Route::get('/incidencias', 'IncidenciasController@index')->name('incidencias.index');
        Route::get('/incidencias/crear', 'IncidenciasController@create')->name('incidencias.create');
        Route::post('/incidencias', 'IncidenciasController@store')->name('incidencias.store');
        Route::get('/incidencias/delete/{id}/proyect/{id_proyect}', 'IncidenciasController@delete')->name('incidencias.delete');
        Route::get('/proyectos', 'ProyectosController@index')->name('proyectos.index');
        Route::get('/proyectos/crear', 'ProyectosController@create')->name('proyectos.create');
        Route::post('/proyectos', 'ProyectosController@store')->name('proyectos.store');
        Route::get('/proyectos/delete/{id}', 'ProyectosController@delete')->name('proyectos.delete');

    });


