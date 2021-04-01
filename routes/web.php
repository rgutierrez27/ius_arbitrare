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

use App\Http\Controllers\HomePageController;

Route::get('/', 'HomePageController@getIndexHome');

//content-manager
Route::get('/panel/content_manager', 'PublicationController@content_manager')->name('content_manager');
Route::post('/panel/content_manager/page/{page}', 'PublicationController@content_manager_list');
Route::get('/panel/content_manager/new', 'PublicationController@content_manager_new');
Route::post('/panel/content_manager/new', 'PublicationController@content_manager_save');
Route::get('/panel/content_manager/{id}', 'PublicationController@content_manager_edit');
Route::post('/panel/content_manager/{id}', 'PublicationController@content_manager_save');
Route::post('/panel/content_manager/delete/{id}', 'PublicationController@content_manager_delete');
Route::post('/panel/content_manager-categories/show', 'PublicationController@showCategory');

//file
Route::post('/fileupload', 'ExtrasController@fileupload');
Route::delete('/fileupload', 'ExtrasController@fileupload');

Route::get('/quienes-somos', 'HomePageController@quienesSomos');
Route::get('/proyecto-pro-bono-y-responsabilidad-social', 'HomePageController@proyectoProBono');
Route::get('/diversidad-equidad-e-inclusion', 'HomePageController@diversidadEquidad');
Route::get('/codigo-etico-y-de-conducta-de-la-firma', 'HomePageController@codigoEtico');



