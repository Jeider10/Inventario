<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::get('dataTableUSer', 'UserController@dataTable')->name('dataTableUser');

Route::resource('roles', 'RolesController');
Route::get('dataTableRoles', 'RolesController@dataTable')->name('dataTableRoles');

Route::resource('configEmpresa', 'ConfigEmpresaController');
Route::get('dataTableConfigEmpresa', 'ConfigEmpresaController@dataTable')->name('dataTableConfigEmpresa');

Route::resource('proveedores', 'ProveedoresController');
Route::get('dataTableProveedores', 'ProveedoresController@dataTable')->name('dataTableProveedores');

Route::resource('cliente', 'ClienteController');
Route::get('dataTableCliente', 'ClienteController@dataTable')->name('dataTableCliente');
