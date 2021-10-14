<?php

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

/* ROTAS - EMPRESA */

Route::get('/', 'ControllerEmpresa@index')->name('empresa.home.get');
Route::get('/empresas', 'ControllerEmpresa@index')->name('empresa.get');
Route::get('/empresas/nova', function () {

    return view('empresas.create');
});
Route::post('/empresas/nova', 'ControllerEmpresa@create');
Route::get('/empresa/show/{id}', 'ControllerEmpresa@show');
Route::put('/empresa/edit/{id}', 'ControllerEmpresa@edit');

/* ROTAS - COLABORADOES */

Route::get('/colaboradores', 'ControllerColaborador@index');
Route::get('/colaborador/novo/{id}', 'ControllerColaborador@createForm');
Route::post('colaborador/novo/{id}', 'ControllerColaborador@create');
Route::get('/colaborador/show/{id}', 'ControllerColaborador@show');
Route::put('/colaborador/edit/{id}', 'ControllerColaborador@edit');


