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

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'StoreController@index')->name('index');
        Route::group(['prefix' => 'store'], function () {
            Route::get('create', 'StoreController@getAdd')->name('store.getAdd');
            Route::post('create', 'StoreController@postAdd')->name('store.postAdd');
            Route::get('edit/{id?}', 'StoreController@getEdit')->name('store.getEdit');
            Route::post('edit/{id?}', 'StoreController@postEdit')->name('store.postEdit');
        });
        Route::get('profile', 'UserController@getEdit')->name('profile.getEdit');
        Route::post('profile', 'UserController@postEdit')->name('profile.postEdit');
    });
});

Route::get('/workspace/{name?}', function ($name) {
    return view('workspace.index', compact('name'));
})->name('workspace.index');
Route::get('food/list', 'FoodController@index')->name('food.index');
Route::get('food/create', 'FoodController@getAdd')->name('food.getAdd');
Route::post('food/create', 'FoodController@postAdd')->name('food.postAdd');
Route::get('food/edit/{id?}', 'FoodController@getEdit')->name('food.getEdit');
Route::post('food/edit/{id?}', 'FoodController@postEdit')->name('food.postEdit');

Route::get('category/list', 'CategoryController@index')->name('category.index');
Route::get('category/create', 'CategoryController@getAdd')->name('category.getAdd');
Route::post('category/create', 'CategoryController@postAdd')->name('category.postAdd');
Route::get('category/edit/{id?}', 'CategoryController@getEdit')->name('category.getEdit');
Route::post('category/edit/{id?}', 'CategoryController@postEdit')->name('category.postEdit');

Route::get('type/list', 'TypeController@index')->name('type.index');
Route::get('type/create', 'TypeController@getAdd')->name('type.getAdd');
Route::post('type/create', 'TypeController@postAdd')->name('type.postAdd');
Route::get('type/edit/{id?}', 'TypeController@getEdit')->name('type.getEdit');
Route::post('type/edit/{id?}', 'TypeController@postEdit')->name('type.postEdit');

Route::get('promotion/list', 'PromotionController@index')->name('promotion.index');
Route::get('promotion/create', 'PromotionController@getAdd')->name('promotion.getAdd');
Route::post('promotion/create', 'PromotionController@postAdd')->name('promotion.postAdd');
Route::get('promotion/edit/{id?}', 'PromotionController@getEdit')->name('promotion.getEdit');
Route::post('promotion/edit/{id?}', 'PromotionController@postEdit')->name('promotion.postEdit');

Route::get('/', 'PageController@index')->name('home');






