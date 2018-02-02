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
Auth::routes();
Route::get('/', 'HomeController@dashboard');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->middleware('auth');



/*
|--------------------------------------------------------------------------
| Rotas Prefixadas para o home 
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'Fornecedores',  'middleware' => 'auth'], function () {
    Route::post('Adicionar/Novo', 'FornecedoresController@Novo');
    Route::get('Adicionar',  'FornecedoresController@Adicionar');
    Route::get('Visualizar', 'FornecedoresController@Visualizar');
    Route::get('Deletar/{id}', 'FornecedoresController@Deletar');
    Route::get('Atualizar/{id}', 'FornecedoresController@Atualizar');
    Route::post('Atualizar/{id}', 'FornecedoresController@salvaAtualizar');
});
    

/*
|--------------------------------------------------------------------------
| Rotas Prefixadas Com Produtos
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'Produtos',  'middleware' => 'auth'], function () {
    Route::post('Adicionar/Novo', 'ProdutosController@Novo');
    Route::get('Adicionar', 'ProdutosController@Adicionar');
    Route::get('Visualizar', 'ProdutosController@Visualizar');
    Route::get('Deletar/{id}', 'ProdutosController@Deletar');
    Route::get('Atualizar/{id}', 'ProdutosController@Atualizar');
    Route::post('Atualizar/{id}', 'ProdutosController@salvaAtualizar');
});
/*
|--------------------------------------------------------------------------
| Rotas Prefixadas Com Clientes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'Clientes',  'middleware' => 'auth'], function () {
    Route::post('Adicionar/Novo', 'ClientesController@Novo');
    Route::get('Adicionar', 'ClientesController@Adicionar');
    Route::get('Visualizar', 'ClientesController@Visualizar');
    Route::get('Deletar/{id}', 'ClientesController@Deletar');
    Route::get('Atualizar/{id}', 'ClientesController@Atualizar');
    Route::post('Atualizar/{id}', 'ClientesController@salvaAtualizar');
});

/*
|--------------------------------------------------------------------------
| Rotas Prefixadas Com Clientes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'Pedidos',  'middleware' => 'auth'], function () {
    Route::post('Adicionar/Novo', 'PedidosController@Novo');
    Route::get('Adicionar', 'PedidosController@Adicionar');
    Route::get('Visualizar', 'PedidosController@Visualizar');
    Route::get('Deletar/{id}', 'PedidosController@Deletar');
    Route::get('Atualizar/{id}', 'PedidosController@Atualizar');
    Route::post('Atualizar/{id}', 'PedidosController@salvaAtualizar');
    Route::get('Download/{id}/{tipo}', 'PedidosController@pdfdl');
});

/*
|--------------------------------------------------------------------------
| Rotas Prefixadas Com Clientes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'Relatorios',  'middleware' => 'auth'], function () {
    Route::get('Visualizar', 'RelatoriosController@Visualizar');
    Route::post('Clientes', 'RelatoriosController@Clientes');
    Route::post('Clientes', 'RelatoriosController@Clientes');
    Route::post('Fornecedor', 'RelatoriosController@Fornecedor');
    Route::post('Fornecedor', 'RelatoriosController@Fornecedor');
});
