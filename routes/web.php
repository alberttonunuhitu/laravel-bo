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

Route::name('users.')->group(function () {
    Route::get('users', 'UserController@index')
        ->middleware('permission:read users')
        ->name('index');

    Route::get('users/create', 'UserController@create')
        ->middleware('permission:create users')
        ->name('create');

    Route::post('users', 'UserController@store')
        ->middleware('permission:create users')
        ->name('store');

    Route::get('users/{id}/edit', 'UserController@edit')
        ->middleware('permission:update users')
        ->name('edit');

    Route::put('users/{id}', 'UserController@update')
        ->middleware('permission:update users')
        ->name('update');

    Route::delete('users/{id}', 'UserController@destroy')
        ->middleware('permission:delete users')
        ->name('destroy');
});
