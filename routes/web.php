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

Route::get('/', function () {
    return view('index',['titulo'=>'Redecora']);
});

Route::get('/home', 'HomeController@home')->name('home.home');

Route::get('/quemsomos','HomeController@quemSomos')->name('home.quemSomos');

Route::get('/contato','HomeController@contato')->name('home.contato');

Route::get('/favoritos','HomeController@favoritos')->name('home.favoritos');

Route::get('/produtos','HomeController@produtos')->name('home.produtos');
