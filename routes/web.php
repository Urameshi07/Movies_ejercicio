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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [app\Http\Controllers\HomeController::class, 'index'])->name('home');

//Panel de Admin
Route::get('/admin', function () {
    return view ('admin.index');
});

 //Route::get('/show/{movie}', 'MoviesController@show')->name('movies.index');

 use App\Http\Controllers\MoviesController; // MoviesController is controller name

Route::get('index',[MoviesController::class, 'index']);

Route::get('/home/create', 'PeliculaController@create');
Route::post('/articulo', 'PeliculaController@store');

Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');
