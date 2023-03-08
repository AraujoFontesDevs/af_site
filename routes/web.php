<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendEmailController;

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

Route::view('/', 'pages.home')->name('index');
Route::view('/quem-somos', 'pages.about')->name('about');
Route::view('/ma', 'pages.mergers_acquisitions')->name('ma');
Route::view('/real-estate', 'pages.real_estate')->name('real_estate');
Route::view('/cambio', 'pages.cambio')->name('cambio');
Route::view('/assessoria-financeira', 'pages.advise')->name('advise');
Route::view('/ouvidoria', 'pages.ouvidoria')->name('ouvidoria');
Route::view('/contato', 'pages.contato')->name('contato');

Route::prefix('sendEmailOuvidoria')->group(function(){
	Route::post('/', [sendEmailController::class, 'sendEmailOuvidoria']);
});

Route::prefix('sendEmailContato')->group(function(){
	Route::post('/', [sendEmailController::class, 'sendEmailContato']);
});

Route::prefix('/equipe')->group(function(){
    Route::view('/', 'pages.socios')->name('socio');

    Route::view('/marcelo-araujo', 'pages.socios.marcelo_araujo')->name('socio.marcelo-araujo');
});
