<?php

use App\Http\Controllers\ExercicioUm;
use App\Http\Controllers\ExercicioUmController;
use App\Http\Requests\ExercicioUmFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExercicioUm::class, 'multiplicar']);

Route::get('exercicio/sete', 
[ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);
