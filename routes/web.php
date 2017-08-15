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
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@index']);

        Route::get('user', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index',
            'middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);
        Route::post('user', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store',
            'middleware' => ['permission:user-create']]);
        Route::get('user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create',
            'middleware' => ['permission:user-create']]);
        Route::get('user/{id}/edit', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit',
            'middleware' => ['permission:user-edit']]);
        Route::patch('user/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update',
            'middleware' => ['permission:user-edit']]);
        Route::delete('user/{id}', ['as' => 'admin.user.destroy', 'uses' => 'Admin\UserController@destroy',
            'middleware' => ['permission:user-delete']]);

        Route::get('role', ['as' => 'admin.role.index', 'uses' => 'Admin\RoleController@index',
            'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
        Route::post('role', ['as' => 'admin.role.store', 'uses' => 'Admin\RoleController@store',
            'middleware' => ['permission:role-create']]);
        Route::get('role/create', ['as' => 'admin.role.create', 'uses' => 'Admin\RoleController@create',
            'middleware' => ['permission:role-create']]);
        Route::get('role/{id}/edit', ['as' => 'admin.role.edit', 'uses' => 'Admin\RoleController@edit',
            'middleware' => ['permission:role-edit']]);
        Route::patch('role/{id}', ['as' => 'admin.role.update', 'uses' => 'Admin\RoleController@update',
            'middleware' => ['permission:role-edit']]);
        Route::delete('role/{id}', ['as' => 'admin.role.destroy', 'uses' => 'Admin\RoleController@destroy',
            'middleware' => ['permission:role-delete']]);

        Route::get('booking', ['as' => 'admin.booking.index', 'uses' => 'Admin\BookingController@index',
            'middleware' => ['permission:booking-list|booking-create|booking-edit|booking-delete']]);
        Route::post('booking', ['as' => 'admin.booking.store', 'uses' => 'Admin\BookingControllerController@store',
            'middleware' => ['permission:booking-create']]);
        Route::get('booking/create', ['as' => 'admin.booking.create', 'uses' => 'Admin\BookingControllerController@create',
            'middleware' => ['permission:booking-create']]);
        Route::get('booking/{id}/edit', ['as' => 'admin.booking.edit', 'uses' => 'Admin\BookingControllerController@edit',
            'middleware' => ['permission:booking-edit']]);
        Route::patch('booking/{id}', ['as' => 'admin.booking.update', 'uses' => 'Admin\BookingControllerController@update',
            'middleware' => ['permission:booking-edit']]);
        Route::delete('booking/{id}', ['as' => 'admin.booking.destroy', 'uses' => 'Admin\BookingControllerController@destroy',
            'middleware' => ['permission:booking-delete']]);
    });
});

Route::get('', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('booking', 'HomeController@store');

Auth::routes();
Route::get('logout', 'HomeController@logout');
Route::get('/home', 'HomeController@index')->name('home');
