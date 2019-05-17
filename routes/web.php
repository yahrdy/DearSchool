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



Auth::routes();


Route::group(['middleware' => ['web', 'auth']], function () {


    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::resource('profile', 'ProfileController');




//    Lessons
    Route::get('/', 'RouteController@home');
    Route::get('/bangla','RouteController@bangla');
    Route::get('/english','RouteController@english');
    Route::get('/general-math','RouteController@general_math');
    Route::get('/physics','RouteController@physics');
    Route::get('/chemistry','RouteController@chemistry');
    Route::get('/higher-math','RouteController@higer_math');
    Route::get('/ict','RouteController@ict');
});