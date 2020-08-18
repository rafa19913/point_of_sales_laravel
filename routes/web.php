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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contactos', 'CustomerController@index')->name('customer');

Route::get('productos', 'ProductController@index')->name('product');


Route::get('categorias', 'CategorieController@index')->name('categorie');

//Route::get('/customers', 'CustomerController@index')->name('customer');

Route::resource('customers','CustomerController');

Route::resource('products','ProductController');

Route::resource('categories','CategorieController');





Route::get('/compras',function(){
    return view('compras');
});


Route::get('/ventas',function(){
    return view('ventas');
});


Route::get('/reportes',function(){
    return view('reportes');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('departamentos','DepartamentoController');

Route::resource('customers','CustomerController');
