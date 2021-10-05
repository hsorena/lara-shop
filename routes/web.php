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
Route::prefix('api')->namespace('Admin')->group(function () {
    Route::get('/categories' , 'CategoryController@apiIndex');
    Route::post('/categories/attribute' , 'CategoryController@apiAttributeIndex');
});
Route::get('api/cities/{provinceId}' , 'Auth\RegisterController@getAllCities');

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::view('/' , 'admin.master');
    Route::resource('/categories' , 'CategoryController');
    Route::get('/categories/{id}/settings' , 'CategoryController@indexSetting')->name('categories.indexSetting');
    Route::post('/categories/{id}/settings' , 'CategoryController@saveSetting')->name('categories.saveSetting');
    Route::resource('/attributes' , 'AttributeController');
    Route::resource('/attributes-values' , 'AttributeValueController');
    Route::resource('/brands' , 'BrandController');
    Route::resource('/photos' , 'PhotoController');
    Route::resource('/products' , 'ProductController');
    Route::post('/photos/upload' , 'PhotoController@upload')->name('photos.upload');
});
Auth::routes();

Route::namespace('Frontend')->group(function (){
    Route::get('/' , 'HomeController@index')->name('home');
    Route::get('/profile' , 'UserController@profile')->name('user.profile');
    Route::get('/add-to-cart/{id}' , 'CartController@addToCart')->name('cart.add');
    Route::post('/remove-item/{id}' , 'CartController@removeItem')->name('cart.remove');
});


Route::get('/home', 'HomeController@index');
