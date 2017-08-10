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

Route::get('/', function(){
	return view('home');
})->name('home');

Route::get('/login', function(){
	return view('login');
})->name('login');

Route::get('/register', function(){
	return view('register');
})->name('register');

Route::get('/postfreead', function(){
	return view('postfreead');
})->name('postfreead');

Route::get('/contact', function(){
	return view('welcome');
})->name('contact');

Route::get('/about', function(){
	return view('welcome');
})->name('about');

Route::post('/postFreeAd', [
	'uses' => 'AdsController@postFreeAd',
	'as' => 'postFreeAd'
]);

Route::post('/register', [
	'uses' => 'UserController@postRegister',
	'as' => 'signup'
]);

Route::post('/login', [
	'uses' => 'UserController@postLogin',
	'as' => 'signin'
]);

Route::get('/freeadsimages/{filename}', [
	'uses' => 'AdsController@postFreeAd',
	'as' => 'ad.image'
]);

Route::get('/dashboard', [
	'uses' => 'UserController@getDashboard',
	'as' => 'dashboard',
	'middleware' => 'auth'
]);
