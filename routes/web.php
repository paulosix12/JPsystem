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

/*
|--------------------------------------------------------------------------
| Rotas Prefixadas para o home 
|--------------------------------------------------------------------------
*/
Route::prefix('Fornecedores')->group(function () {
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

Route::get('Pedidos/search/autocomplete', ['as' => 'search-autocomplete', 'uses' => 'SearchController@autocomplete']);

Route::get('/', function(){
    return view('index');
});

Route::prefix('Produtos')->group(function () {
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

Route::prefix('Clientes')->group(function () {
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

Route::prefix('Pedidos')->group(function () {
    Route::post('Adicionar/Novo', 'PedidosController@Novo');
    Route::get('Adicionar', 'PedidosController@Adicionar');
    Route::get('Visualizar', 'PedidosController@Visualizar');
    Route::get('Deletar/{id}', 'PedidosController@Deletar');
    Route::get('Atualizar/{id}', 'PedidosController@Atualizar');
    Route::post('Atualizar/{id}', 'PedidosController@salvaAtualizar');
    Route::get('Download/{id}', 'PedidosController@pdfdl');
});

Route::get('generate-docx', 'HomeController@generateDocx');
$this->get('pdf', 'HomeController@generateDocx')->name('pdf');
Route::get('/Relatorios', 'RelatoriosController@Visualizar');
Route::get('/Relatorios/pdf', 'PdfController@generate_pdf');
