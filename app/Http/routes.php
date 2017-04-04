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

/*routes para el panel de administracion*/
Route::group(['prefix' => 'admin'], function() {
    Route::resource('user', 'UserController');
    #por motivos de lso tutoriales haremos el delet con get
    Route::get('users/{id}/destroy', [
    	'uses' => 'UserController@destroy',
    	'as' => 'admin.user.destroy'
    	]);
    
    Route::resource('category', 'CategoryController');
    #por motivos de lso tutoriales haremos el delet con get
    Route::get('categories/{id}/destroy', [
    	'uses' => 'CategoryController@destroy',
    	'as' => 'admin.category.destroy'
    	]);

});