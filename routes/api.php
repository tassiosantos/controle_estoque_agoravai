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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('api')->group(function(){

    Route::prefix('fornecedores')->group(function(){

        Route::get('/lista', 'FornecedorC@lista');
    
        Route::get('/create', 'FornecedorC@create');

        Route::post('/store', 'FornecedorC@store');
    });

    Route::prefix('clientes')->group(function(){
        Route::get('/lista', 'ClienteC@lista');
    
        Route::get('/create', 'ClienteC@create');   

        Route::post('/store', 'ClienteC@store');
    });

    Route::prefix('vendas')->group(function(){
        Route::get('/registros', 'VendasC@lista');
    
        Route::get('/create', 'VendasC@create');

        Route::post('/store', 'VendasC@store');
    });


});