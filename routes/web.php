<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/', function () {
    return view('front.master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware'=>'guest'],function(){
    Route::get('/sign-in/github',[AuthenticatedSessionController::class,'github']);
    Route::get('/sign-in/github/redirect',[AuthenticatedSessionController::class,'githubRedirect']);
});


Route::group(['prefix'=>'admin','middleware'=>['auth','verified']],function(){
    Route::get('/',[DashboardController::class,'adminboard']);

    Route::resource('companies',CompanyController::class);
    Route::resource('jobs',JobController::class);
    Route::resource('categories',CategoryController::class);

    //slider routes
    Route::get('slider','App\Http\Controllers\Admin\SliderController@index')->name('slider.index');
    Route::get('slider/create','App\Http\Controllers\Admin\SliderController@create')->name('slider.create');
    Route::post('slider/store','App\Http\Controllers\Admin\SliderController@store')->name('slider.store');
    Route::get('slider/edit{$id}','App\Http\Controllers\Admin\SliderController@edit')->name('slider.edit');
    Route::post('slider/update','App\Http\Controllers\Admin\SliderController@update')->name('slider.update');
    Route::get('slider/delete','App\Http\Controllers\Admin\SliderController@destroy')->name('slider.destroy');
});
