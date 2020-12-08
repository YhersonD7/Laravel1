<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CompetenciaController;

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

Route::get('/saludo', [PaginaController::class, 'saludo']);
Route::get('/estudiantes', [PaginaController::class, 'inicio']);
Route::get('/aprendices', [VistaController::class, 'aprendices']);
Route::get('/clientes',[vistacontroller::class, 'cliente']);
Route::get('/personas/{varnum2?}', [VistaController::class, 'personas']);
Route::get('/index', [PaginaController::class, 'index']);
Route::get('/home', 'App\Http\Controllers\VistaController@cliente');


Route::get('/plantilla', [VistaController::class, 'plantillaweb']);
Route::get('/aprendiz2021', [AprendizController::class, 'aprendiz'])->name('verAprendiz');
Route::get('/instructor', [InstructorController::class, 'instructor'])->name('verInstructor');
Route::get('/competencia', [CompetenciaController::class, 'competencia'])->name('verCompetencia');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', function () {
    // $numero =['310450','320897','311453','310672'];
    return view('cliente', ['numero' => "Andrea Carolina"]);
});

Route::get('/usuario/{varnum?}', function($varnum='no hay parametro'){
    return '<h2>Edad de usuario:</h2> '. $varnum;
//})->where('varnum', '[A-Za-z]+');
})->where('varnum', '[0-9]+');

