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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', 'SampahController@index')->name('dash.home');
Route::get('/dash-lamp', 'LampuController@index')->name('dash.lamp');
Route::view('/dash-user', 'admin.user')->name('dash.user');

Route::delete('delete/{lampu}', 'LampuController@delete')->name('delete.lampu');
Route::delete('delete/{tempatSampah}', 'SampahController@delete')->name('delete.sampah');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes(['register' => false]);

// Route::get('register', 'Auth\RegisterController@showRegisterForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
