<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste', function () {
    $repository = app()->make('Delivery\Repositories\ProductRepository');
    return $repository->all();
});
Route::auth();
Route::get('/home', 'HomeController@index');


Route::group(['prefix'=> 'admin', 'middleware'=> 'auth.checkrole','as'=>'admin.'], function() {

	/*--------------------Rotas Categories---------------------------*/
	route::get('category/show', ['as'=>'categories.index', 'uses'=>'CategoriesController@index']);
	route::get('category/create',['as'=>'categories.create', 'uses'=>'CategoriesController@create']);
	route::post('category/store', ['as'=>'categories.store', 'uses'=>'CategoriesController@store']);
	route::get('category/edit/{id}', ['as'=>'categories.edit', 'uses'=>'CategoriesController@edit']);
	route::post('category/update/{id}', ['as'=>'categories.update', 'uses'=>'CategoriesController@update']);
	route::get('category/destroy/{id}', ['as'=>'categories.destroy', 'uses'=>'CategoriesController@destroy']);

	/*--------------------Rotas Products---------------------------*/
	route::get('product/show', ['as'=>'products.index', 'uses'=>'ProductsController@index']);
	route::get('product/create',['as'=>'products.create', 'uses'=>'ProductsController@create']);
	route::post('product/store', ['as'=>'products.store', 'uses'=>'ProductsController@store']);
	route::get('product/edit/{id}', ['as'=>'products.edit', 'uses'=>'productsController@edit']);
	route::post('product/update/{id}', ['as'=>'products.update', 'uses'=>'ProductsController@update']);
	route::get('product/destroy/{id}', ['as'=>'products.destroy', 'uses'=>'ProductsController@destroy']);

});