<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace()->name('api.')->group(function(){

    Route::prefix('fornecedores')->group(function(){

        Route::get('/lista', 'FornecedorController@lista');
    
        Route::get('/create', 'FornecedorController@create');

        Route::post('/store', 'FornecedorController@store');
    });

    Route::prefix('clientes')->group(function(){
        Route::get('/lista', 'ClienteController@lista');
    
        Route::get('/create', 'FornecedorController@create');   

        Route::post('/store', 'FornecedorController@store');
    });

    Route::prefix('vendas')->group(function(){
        Route::get('/registros', 'FornecedorController@lista');
    
        Route::get('/create', 'FornecedorController@create');

        Route::post('/store', 'FornecedorController@store');
    });


});