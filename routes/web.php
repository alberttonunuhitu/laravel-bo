<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes(['register' => false]);

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');

Route::put('me/password', 'SettingController@updatePassword')->name('me.password');
Route::put('me/profile', 'SettingController@updateProfile')->name('me.profile');

Route::resource('roles', 'RoleController')->except([
    'index', 'create', 'store', 'show', 'destroy'
]);

Route::prefix('settings')->group(function () {
    Route::get('access', 'AccessController@index')->name('settings.access');
    Route::get('profile', 'SettingController@profile')->name('settings.profile');
    Route::get('security', 'SettingController@security')->name('settings.security');
});

