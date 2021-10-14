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
Route::prefix('api')->group(function () {
    Route::get('/categories' , 'Admin\CategoryController@apiIndex');
    Route::post('/categories/attribute' , 'Admin\CategoryController@apiAttributeIndex');
    Route::get('api/cities/{provinceId}' , 'Auth\RegisterController@getAllCities');
    Route::get('/products/{id}' , 'Frontend\ProductController@apiGetProducts');
    Route::get('/products/{id}/{sort}/{paginate}' , 'Frontend\ProductController@apiGetSortedProducts');
});

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
    Route::resource('/coupons' , 'CouponController');
});
Auth::routes();

Route::namespace('Frontend')->group(function (){
    Route::get('/' , 'HomeController@index')->name('home');
    Route::get('/profile' , 'UserController@profile')->name('user.profile');
    Route::get('/add-to-cart/{id}' , 'CartController@addToCart')->name('cart.add');
    Route::post('/remove-item/{id}' , 'CartController@removeItem')->name('cart.remove');
    Route::get('/cart' , 'CartController@show')->name('cart.show');
    Route::post('/coupon' , 'CouponController@addCoupon')->name('coupon.add');
    Route::get('/products/{slug}' , 'ProductController@getProduct')->name('product.get');
    Route::get('/category/{id}' , 'ProductController@getProductByCategory')->name('category.index');
});


Route::get('/home', 'HomeController@index');
