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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::resource('user', 'UserController');
    #por motivos de los tutoriales haremos el delet con get
    Route::get('users/{id}/destroy', [
    	'uses' => 'UserController@destroy',
    	'as' => 'admin.user.destroy'
    ]);
    
    Route::resource('category', 'CategoryController');
    #por motivos de los tutoriales haremos el delet con get
    Route::get('categories/{id}/destroy', [
    	'uses' => 'CategoryController@destroy',
    	'as' => 'admin.category.destroy'
    ]);

    Route::resource('tag', 'TagController');
    #por motivos de los tutoriales haremos el delet con get
    Route::get('tags/{id}/destroy', [
        'uses' => 'TagController@destroy',
        'as' => 'admin.tag.destroy'
    ]);

    Route::resource('article', 'ArticleController');
    #por motivos de los tutoriales haremos el delet con get
    Route::get('articles/{id}/destroy', [
        'uses' => 'ArticleController@destroy',
        'as' => 'admin.article.destroy'
    ]);

});


/*ruta para que el registro de usuario no requira de authentication*/
Route::get('user/create',[
    'uses' => 'UserController@create',
    'as' => 'user.create']);

Route::post('user',[
    'uses' => 'UserController@store',
    'as' => 'user.store']);


/*Rutas de autenticación */
Route::get('admin/auth/login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses' => 'Auth\AuthController@postLogin',
    'as' => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'admin.auth.logout'
]);
