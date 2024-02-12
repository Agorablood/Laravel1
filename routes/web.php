<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('inicio', function () {
//     return view('header').view('inicio').view('footer');
// });
Route::get('/inicio', [PruebaController::class, 'inicio']);
Route::get('/primer-escenario', [PruebaController::class, 'mostrarPrimerEscenario']);
Route::get('/segundo-escenario', [PruebaController::class, 'mostrarSegundoEscenario']);
Route::get('/tercer-escenario', [PruebaController::class, 'mostrarTercerEscenario']);
Route::get('/cuarto-escenario', [PruebaController::class, 'mostrarCuartoEscenario']);
Route::get('/quinto-escenario', [PruebaController::class, 'mostrarQuintoEscenario']);
Route::get('/sexto-escenario', [PruebaController::class, 'mostrarSextoEscenario']);
Route::get('/septimo-escenario', [PruebaController::class, 'mostrarSeptimoEscenario']);
Route::get('/octavo-escenario', [PruebaController::class, 'mostrarOctavoEscenario']);
Route::get('/noveno-escenario', [PruebaController::class, 'mostrarNovenoEscenario']);
Route::get('/decimo-escenario', [PruebaController::class, 'mostrarDecimoEscenario']);
Route::get('/undecimo-escenario', [PruebaController::class, 'mostrarUndecimoEscenario']);
Route::get('/duodecimo-escenario', [PruebaController::class, 'mostrarDuodecimoEscenario']);
Route::get('/final', [PruebaController::class, 'finalEscenario']);
