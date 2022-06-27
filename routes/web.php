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
Route::resource('problemasoluciones','App\Http\Controllers\ProblemasSolucionController')->middleware('auth');
Route::resource('manualesguias','App\Http\Controllers\ManualesGuiasController')->middleware('auth');
Route::resource('reglamento','App\Http\Controllers\ReglamentoController')->middleware('auth');
Route::resource('capacitacion','App\Http\Controllers\CapacitacionController')->middleware('auth');
Route::resource('documentacion','App\Http\Controllers\DocumentacionController')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Problema y soluciones
Route::get('/delete_problema_solucion/{id}', array(
    'as' => 'delete_problema_solucion',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\ProblemasSolucionController@delete_problema_solucion'
));

//Manuales y guías
Route::get('/delete_manuales_guia/{id}', array(
    'as' => 'delete_manuales_guia',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\ManualesGuiasController@delete_manuales_guia'
));

//
Route::get('/test', function () {
    return view('test');
});

