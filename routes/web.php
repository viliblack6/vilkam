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
use App\Category;

Route::get('/', function () {
	$categories = DB::select("SELECT *, LOWER(REPLACE(unaccent(name), ' ', '-')) AS category_alias FROM Categories");
    return view('welcome')->with('categories', $categories);
});

Auth::routes();

//Route::get('/home', 'HomeController@index');

//Rutas para las categorias
Route::get('/categories', 'CategoryController@index');

//Rutas para los productos
Route::get('/showProductByNameCategory/{category_name}', 'ProductController@showProductByNameCategory');
Route::get('/showProductDetail/{category_name}/{product_name}', 'ProductController@showProductDetail');
