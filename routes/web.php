<?php

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

    Route::resource('jobs',JobController::class);
});
