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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Route::post('logout', 'LoginController@logout')->name('logout');
// Route::post('logout', ['as'=>'logout','uses'=>'LoginController@logout'])->name('logout');

        // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/', 'HomeController@index');

// Route::get('/', ['uses'=>'CountryController@index']);

Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');


// Route::get('/admin/users/view', 'UserController@index')->name('adminu');

// quitar el midleware de la ruta cuando no reconosca links, por ejemplo ->name('midleware');
// agregar el ->name(el midleware), el nombre de la ruta para que la reconosca en la navegacion
Route::get('admin/users/view', ['as'=>'admin/users/view','uses'=>'UserController@index']);

// Route::get('/admin/users/add', 'UserController@add')->name('admina');


Route::get('admin/users/add', ['as'=>'admin/users/add','uses'=>'UserController@add']);



Route::get('countrys', 'CountryController@index');



Route::get('getusers', 'ApiController@getUsers');


