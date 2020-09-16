<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('index',['titulo'=>'Redecora']);
// })->name('home.index');

Route::name('home.')->group(function(){
    Route::get('/','HomeController@home')->name('index');
    Route::get('/home', 'HomeController@home')->name('index');
    Route::get('/quemsomos','HomeController@quemSomos')->name('quemSomos');
    Route::get('/contato','HomeController@contato')->name('contato');
});

Route::name('produtos.')->group(function(){
    Route::get('/produtos','ProdutoController@index')->name('index');
    Route::get('/favoritos','ProdutoController@favoritos')->name('favoritos');
    Route::get('/produtos/{id}','ProdutoController@show')->name('show');
    Route::post('/produtos/{id}','ProdutoController@addToCart')->name('comprar');
    Route::get('/carrinho','ProdutoController@carrinho')->name('carrinho');
    Route::put('/atualizar-carrinho','ProdutoController@updateCart')->name('update.carrinho');
    Route::delete('/deletar-carrinho','ProdutoController@removeFromCart')->name('delete.carrinho');
});
