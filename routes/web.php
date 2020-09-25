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

Route::get('/lang/{locale}', function ($locale){
    session(['locale'=>$locale]);
    return redirect()->back();
});

Route::get('/cache', function (){
    \Artisan::call('config:cache');
    return back();
});

Route::get('/', 'PageController@index');
Route::get('/aboutUs', 'PageController@aboutUs');
Route::get('/reviews', 'PageController@reviews');
Route::get('/discounts', 'PageController@discounts');
Route::get('/discount/{id}', 'PageController@viewDiscount');
Route::get('/courses', 'PageController@courses');
Route::get('/course/{id}', 'PageController@viewCourse');
Route::get('/informations', 'PageController@informations');

//forms
Route::post('/callback', 'PageController@callback');
Route::post('/contact', 'PageController@contact');
Route::post('/review', 'PageController@review');
Route::get('/search', 'PageController@search');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
