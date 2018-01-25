<?php

use App\Http\Controllers\CatalogController;

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

Route::get('/', 'HomeController@getHome');

//Route::get('/login',function(){
    //echo "Login Usuario";
  //  return view('auth.login');
//});

//Route::get('/logout',function(){
    //echo "Logout Usuario";
//});
Route::group(['middleware'=>'auth'],function(){
    Route::get('/catalog','CatalogController@getIndex');
    
    Route::get('/catalog/show/{id?}','CatalogController@getShow');
    
    Route::get('/catalog/create','CatalogController@getCreate');
    
    Route::get('/catalog/edit/{id}','CatalogController@getEdit');
    
    Route::post('/catalog/create','CatalogController@postCreate');
    
    Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');
    
    Route::put('/catalog/rent/{id}', 'CatalogController@putRent');
    
    Route::put('/catalog/return/{id}', 'CatalogController@putReturn');
    
    Route::delete('/catalog/delete/{id}', 'CatalogController@deleteMovie');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');