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
Route::get('/cadastroProduto', 'ProdutoController@index');
Route::post('/formProduto', 'ProdutoController@store');
Route::get('/listaProdutos', 'ProdutoController@listar');


//Fornecedor
Route::get('/', 'FornecedorController@create');
Route::post('/form', 'FornecedorController@store');