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
    Route::get('/', 'App\Http\Controllers\PagesController@index') ->name('home');

    Route::prefix('admin')->group(function(){

    Route::get('/dashboard', 'App\Http\Controllers\PagesController@dashboard')->name('admin.dashboard');
    Route::get('/main', 'App\Http\Controllers\MainPagesController@index')->name('admin.main');
    Route::put('/main', 'App\Http\Controllers\MainPagesController@update')->name('admin.main.update');
    Route::get('/protfolio', 'App\Http\Controllers\PagesController@protfolio')->name('admin.protfolio');
    Route::get('/services/create', 'App\Http\Controllers\ServicePagesController@create')->name('admin.services.create');
    Route::post('/services/create', 'App\Http\Controllers\ServicePagesController@store')->name('admin.services.store');
    Route::get('/services/list', 'App\Http\Controllers\ServicePagesController@list')->name('admin.services.list');
    Route::get('/services/edit/{id}', 'App\Http\Controllers\ServicePagesController@edit')->name('admin.services.edit');
    Route::post('/services/update/{id}', 'App\Http\Controllers\ServicePagesController@update')->name('admin.services.update');
    Route::delete('/services/destroy/{id}', 'App\Http\Controllers\ServicePagesController@destroy')->name('admin.services.destroy');

    Route::get('/portfolios/create', 'App\Http\Controllers\PortfolioPagesController@create')->name('admin.portfolios.create');
    Route::put('/portfolios/create', 'App\Http\Controllers\PortfolioPagesController@store')->name('admin.portfolios.store');
    Route::get('/portfolios/list', 'App\Http\Controllers\PortfolioPagesController@list')->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}', 'App\Http\Controllers\PortfolioPagesController@edit')->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}', 'App\Http\Controllers\PortfolioPagesController@update')->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}', 'App\Http\Controllers\PortfolioPagesController@destroy')->name('admin.portfolios.destroy');

    Route::get('/abouts/create', 'App\Http\Controllers\AboutPagesController@create')->name('admin.abouts.create');
    Route::put('/abouts/create', 'App\Http\Controllers\AboutPagesController@store')->name('admin.abouts.store');
    Route::get('/abouts/list', 'App\Http\Controllers\AboutPagesController@list')->name('admin.abouts.list');
    Route::get('/abouts/edit/{id}', 'App\Http\Controllers\AboutPagesController@edit')->name('admin.abouts.edit');
    Route::post('/abouts/update/{id}', 'App\Http\Controllers\AboutPagesController@update')->name('admin.abouts.update');
    Route::delete('/abouts/destroy/{id}', 'App\Http\Controllers\AboutPagesController@destroy')->name('admin.abouts.destroy');





});



Route::get('/admin/abouts/create', 'App\Http\Controllers\AboutPagesController@create')->name('admin.abouts.create');
Route::post('/admin/abouts/create', 'App\Http\Controllers\AboutPagesController@store')->name('admin.abouts.store');
Route::get('/admin/abouts/list', 'App\Http\Controllers\AboutPagesController@list')->name('admin.abouts.list');
Route::get('/admin/abouts/edit/{id}', 'App\Http\Controllers\AboutPagesController@edit')->name('admin.abouts.edit');
Route::post('/admin/abouts/update/{id}', 'App\Http\Controllers\AboutPagesController@update')->name('admin.abouts.update');
Route::delete('/admin/abouts/destroy/{id}', 'App\Http\Controllers\AboutPagesController@destroy')->name('admin.abouts.destroy');






Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
