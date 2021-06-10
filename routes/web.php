<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;


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
    return view('auth/login');
});

Route::group(['middleware' =>['auth']], function(){
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name
    ('dashboard');
});
require __DIR__.'/auth.php';
Route::resource('middleware', DashboardController::class);
Route::get('middleware', [ 'as' => 'dashboard.create', 'uses' => 'App\Http\Controllers\DashboardController@create']);
Route::post('middleware', [ 'as' => 'dashboard.store', 'uses' => 'App\Http\Controllers\DashboardController@store']);
Route::get('dashboard/{id}', [ 'as' => 'dashboard.edit', 'uses' => 'App\Http\Controllers\DashboardController@edit']);
Route::post('dashboard/update/{id}', [ 'as' => 'dashboard.update', 'uses' => 'App\Http\Controllers\DashboardController@update']);
Route::post('dashboard/delete/{id}', [ 'as' => 'dashboard.destroy', 'uses' => 'App\Http\Controllers\DashboardController@destroy']);


// Route::resource('dashboard',DashboardController::class);
// Route::resource('/dosendashboard', 'App\Http\Controllers\TugasController');
//Route::post('/dashboard/post','App\Http\Controllers\DashboardController@create');
// Route::resource('/dashboard/post', DashboardController::class);