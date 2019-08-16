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

//Produto
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produtoForm', 'ProdutoController@create');
Route::post('/produtoForm', 'ProdutoController@store');
Route::post('/produtoForm/{id}', 'ProdutoController@update');
Route::get('/delete/{id}', 'ProdutoController@destroy');
Route::get('/produtoEdit/{id}', 'ProdutoController@edit');



//Fornecedor
Route::get('/fornecedor', 'FornecedorController@index');
Route::get('/fornecedorForm', 'FornecedorController@create');
Route::post('/fornecedorForm', 'FornecedorController@store');
Route::post('/{id}', 'FornecedorController@update');
Route::get('/fornecedorDelete/{id}', 'FornecedorController@destroy');
Route::get('/fornecedorEdit/{id}', 'FornecedorController@edit');