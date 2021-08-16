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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->namespace('Admin')->group(function () {

    Route::view('/' , 'admin.master');
    Route::resource('/categories' , 'CategoryController');
    Route::resource('/attributes' , 'AttributeController');
    Route::resource('/attributes-values' , 'AttributeValueController');
    Route::resource('/brands' , 'BrandController');
    Route::resource('/photos' , 'PhotoController');
    Route::resource('/products' , 'ProductController');
    Route::post('/photos/upload' , 'PhotoController@upload')->name('photos.upload');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
