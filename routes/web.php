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

/* 1°- '/'    --   2°- 'nomeNaUrl'   ','  -- 3°- 'nome do controlador    ---- 4°-@ ------ 5°-nomeDoMétodo q está no controlador. '*/

    Route::get('/', 'PrincipalController@principal')->name('site.index');
    Route::get('/sobre-nos', 'sobreNosController@sobreNos')->name('site.sobrenos');
    Route::get('/contato', 'contatoController@contato2')->name('site.contato');
    Route::get('login', function() { return 'login';})->name('site.login');
    

    Route::prefix('/app')->group(function()
    {
        Route::get('clientes', function() { return 'Clientes';})->name('app.clientes');
        Route::get('fornecedores','FornecedorController@index')->name('app.fornecedores');
        Route::get('produtos', function() { return 'produtos';})->name('app.produtos');
    });

/* verbo http1  

TesteController
get
post
put
patch
delete
options

*/
        