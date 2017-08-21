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

use App\User;
use App\UserAds;

Route::get('/', 'AdsController@getAllAdverts')->name('home');

Route::get('login', function(){
	return view('login');
})->name('login');

Route::get('register', function(){
	return view('register');
})->name('register');

Route::get('postfreead', function(){
	return view('postfreead');
})->name('postfreead');

Route::get('contact', function(){
	return view('home');
})->name('contact');

Route::get('about', function(){
	return view('home');
})->name('about');


Route::post('postfreead', [
	'uses' => 'AdsController@SaveAd',
	'as' => 'postfreead'
]);

Route::post('register', [
	'uses' => 'UserController@postRegister',
	'as' => 'signup'
]);

Route::post('login', [
	'uses' => 'UserController@postLogin',
	'as' => 'signin'
]);


Route::get('/freeadsimages/{filename}', [
	'uses' => 'AdsController@SaveAd',
	'as' => 'ad.image'
]);

Route::get('dashboard', [
	'uses' => 'UserController@getDashboard',
	'as' => 'dashboard',
	'middleware' => 'auth'
]);

Route::get('profile', function() {
    return view('user.myprofile');
})->name('profile');

Route::get('logout', [
	'uses' => 'UserController@getLogout',
	'as' => 'logout'
]);

Route::get('postnewad', function(){
	$user = Auth::User();
	return view('user.postnewad', compact('user'));
})->name('postnewad');

Route::post('post-user-ad', ['uses' => 'AdsController@postUserAd', 'as' => 'post-user-ad']);

Route::get('postedads', [
	'uses' => 'AdsController@showUserAdverts'
])->name('postedads');

Route::get('delete-advert/{ad_id}', [
	'uses' => 'AdsController@deleteAdvert',
	'as' => 'ad.delete',
	'middleware' => 'auth'
]);

Route::get('edit-advert/{ad_id}', [
	'uses' => 'AdsController@editAdvert',
	'as' => 'ad.edit',
	'middleware' => 'auth'
]);

Route::post('editad/{ad_id}', ['uses' => 'AdsController@postEditAdvert', 'as' => 'editad']);